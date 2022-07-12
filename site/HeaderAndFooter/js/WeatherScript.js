var i = 0;
var Wx,T,RH,WS;
var Today = new Date().toISOString().slice(0, 10)
//設置天氣圖
function SetWeather(CName) {
	/*
	    * Wx 天氣現象
	    * T 均溫
	    * RH 濕度
	    * WS 風速	
	*/
	var parameters = {
		Authorization : "CWB-14D6FEA5-E6DF-4713-BB7C-3189EAA0F4B1", //替換成自己的ID
		format:"JSON",
		locationName: CName,
		// elementName:"T,RH,Wx",
		sort:"time"
	};

	$.ajax({
		method:'Get',
		data:parameters,
		url: WeekForcastUrl 
	}).done(function(data) {
		// console.log(data)
		$("#CName").text(CName);
		T = data.records.locations[0].location[0].weatherElement.filter(x=>x.elementName ==='T')[0].time;
		Wx =data.records.locations[0].location[0].weatherElement.filter(x=>x.elementName ==='Wx')[0].time;
		RH =data.records.locations[0].location[0].weatherElement.filter(x=>x.elementName ==='RH')[0].time;
		WS =data.records.locations[0].location[0].weatherElement.filter(x=>x.elementName ==='WS')[0].time;
		Setforcast();
		i++;
	});
}

function compareDate(x){
	return new Date(x.startTime).getDate()==new Date(x.endTime).getDate();
}

function Setforcast() {
	for(index = 0; index < 7; index++){
		if (index == 0) {
			NowWeather();
        }	
	}
}

//今天氣象
function NowWeather(){
	var averagetemp= T.filter(compareDate)[index];
	var weatherImgCode = Wx.filter(compareDate)[index].elementValue[1].value;
	var wetPercent = RH.filter(compareDate)[index].elementValue[0].value;
	var winSpeed = WS.filter(compareDate)[index].elementValue[0].value
	$("#today").text(Today); // 今天日期
	$("#description").text(weather_con[weatherImgCode][1]); // 天氣描述
	$("#temperature").text(parseInt(averagetemp.elementValue[0].value)); // 氣溫
	$("#weatherimg").attr('src', weather_con[weatherImgCode][0]); // 根據天氣編號決定顯示圖片
	$("#winspeed").text(winSpeed); // 風速
	$("#wet").text(wetPercent); // 濕度						
}

function ShowWaeather() {
    SetWeather(word[0].City[0].CName);
    setTimeout("ShowWaeather()", 5000);
};

ShowWaeather();
