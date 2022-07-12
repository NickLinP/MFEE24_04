var word = [
	{
		Area: 'TW', City: [
			{ CName: '臺北市', EName: 'Taipei' }
		]
	}
];

var WeekForcastUrl = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-D0047-091?';

var WeekChinese = {
	"Mon": "一",
	"Tue": "二",
	"Wed": "三",
	"Thu": "四",
	"Fri": "五",
	"Sat": "六",
	"Sun": "日"
}


var weather_con = {
	"01": ["./img/weather_sunny.png", "晴天"],
	"02": ["./img/weather_sunny.png", "晴天"],
	"03": ["./img/weather_cloudy.png", "多雲"],
	"04": ["./img/weather_cloudy.png", "多雲"],
	"05": ["./img/weather_cloudy.png", "多雲"],
	"06": ["./img/weather_cloudy.png", "多雲"],
	"06": ["./img/weather_rain.png", "雨天"],
	"07": ["./img/weather_rain.png", "雨天"],
	"08": ["./img/weather_rain.png", "雨天"],
	"09": ["./img/weather_rain.png", "雨天"],
	"10": ["./img/weather_rain.png", "雨天"],
	"11": ["./img/weather_rain.png", "雨天"],
	"12": ["./img/weather_rain.png", "雨天"],
	"13": ["./img/weather_rain.png", "雨天"],
	"14": ["./img/weather_rain.png", "雨天"],
	"15": ["./img/weather_rain.png", "雨天"],
	"16": ["./img/weather_rain.png", "雨天"],
	"17": ["./img/weather_rain.png", "雨天"],
	"18": ["./img/weather_rain.png", "雨天"],
	"19": ["./img/weather_thunder.png", "多雲午後短暫雷陣雨"],
	"20": ["./img/weather_thunder.png", "多雲午後短暫雷陣雨"],
	"21": ["./img/weather_thunder.png", "多雲午後短暫雷陣雨"],
	"22": ["./img/weather_thunder.png", "多雲午後短暫雷陣雨"],
	"23": ["./img/weather_thunder.png", "多雲午後短暫雷陣雨"]
}
