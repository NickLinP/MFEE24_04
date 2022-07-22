$(document).ready(function () {

    var minprice = sessionStorage.getItem("price");
    var productDIV = sessionStorage.getItem("productDIV");
    var pdID = sessionStorage.getItem("pdID");

    $("#shopCar").prepend(productDIV);
    $("#FirstMoney").text(minprice);
    // sessionStorage.removeItem("");
    // console.log(pdID);
    $.ajax({
        type: "get",
        url: "http://localhost:3000/",
        // data: JSON.stringify(dataToServer),
        contentType: "application/json",
        success: function (e) {
            console.log(e[pdID - 1].id);
            console.log(e[pdID - 1].name);
            // console.log(e[pdID - 1].descr);
            // console.log(e[pdID - 1].price);
            // console.log(e[pdID - 1].img_src1);
            
            $("#pdName h1").text(e[pdID - 1].name);
            $("#descr").text(e[pdID - 1].descr);
            $("#productPrice").text(e[pdID - 1].price);
            

            $("#bigimg").attr('src', e[pdID - 1].img_src1);
            $("#img1 img").attr('src', e[pdID - 1].img_src1);
            if (e[pdID - 1].img_src2 == null) { $("#img2 img").css("display", "none"); }
            else { $("#img2 img").attr('src', e[pdID - 1].img_src2); };

            if (e[pdID - 1].img_src3 == null) { $("#img3 img").css("display", "none"); }
            else { $("#img3 img").attr('src', e[pdID - 1].img_src3); };

            if (e[pdID - 1].img_src4 == null) { $("#img4 img").css("display", "none"); }
            else { $("#img4 img").attr('src', e[pdID - 1].img_src4); };

            if (e[pdID - 1].img_src5 == null) { $("#img5 img").css("display", "none"); }
            else { $("#img5 img").attr('src', e[pdID - 1].img_src5); };

            if (e[pdID - 1].img_src6 == null) { $("#img6 img").css("display", "none"); }
            else { $("#img6 img").attr('src', e[pdID - 1].img_src6); };



            $("#img1 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src1);
            });
            $("#img2 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src2);
            });
            $("#img3 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src3);
            });
            $("#img4 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src4);
            });
            $("#img5 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src5);
            });
            $("#img6 img").mouseover(function () {
                $("#bigimg").attr("src", e[pdID - 1].img_src6);
            });
 

            if(Number(pdID) < 32){
            
                $('.random1 #p1_1').text(e[Number(pdID) ].name);
                $('.random1 #p1_2').text("NT$ " + e[Number(pdID) ].price);
                $('.random1 img').attr("src",e[Number(pdID) ].img_src1);
    
                
                $('.random2 #p2_1').text(e[Number(pdID) +1].name);
                $('.random2 #p2_2').text("NT$ " + e[Number(pdID) +1].price);
                $('.random2 img').attr("src",e[Number(pdID) +1].img_src1);
    
               
                $('.random3 #p3_1').text(e[Number(pdID) +2].name);
                $('.random3 #p3_2').text("NT$ " + e[Number(pdID) +2].price);
                $('.random3 img').attr("src",e[Number(pdID) +2].img_src1);
    
               
                $('.random4 #p4_1').text(e[Number(pdID) +3].name);
                $('.random4 #p4_2').text("NT$ " + e[Number(pdID) +3].price);
                $('.random4 img').attr("src",e[Number(pdID) +3].img_src1);   
                
             }else if(Number(pdID) > 31 ){

                $('.random1 #p1_1').text(e[Number(pdID) -2].name);
                $('.random1 #p1_2').text("NT$ " + e[Number(pdID) -2].price);
                $('.random1 img').attr("src",e[Number(pdID) -2].img_src1);
    
                
                $('.random2 #p2_1').text(e[Number(pdID) -3].name);
                $('.random2 #p2_2').text("NT$ " + e[Number(pdID) -3].price);
                $('.random2 img').attr("src",e[Number(pdID) -3].img_src1);
    
               
                $('.random3 #p3_1').text(e[Number(pdID) -4].name);
                $('.random3 #p3_2').text("NT$ " + e[Number(pdID) -4].price);
                $('.random3 img').attr("src",e[Number(pdID) -4].img_src1);
    
               
                $('.random4 #p4_1').text(e[Number(pdID) -5].name);
                $('.random4 #p4_2').text("NT$ " + e[Number(pdID) -5].price);
                $('.random4 img').attr("src",e[Number(pdID) -5].img_src1);

             };

        }
    });

    if(Number(pdID) > 31){ 
        // console.log('ok');
        // console.log(Number(pdID) + 1);
        $( ".random1 a" ).click( function(){ 
            var n = (Number(pdID) - 1);
            sessionStorage.setItem("pdID", n); 
            location.href = 'products.html'
                       });
        $( ".random2 a" ).click( function(){ 
            var m = (Number(pdID) - 2);
            sessionStorage.setItem("pdID", m); 
            location.href = 'products.html'
                       });
        $( ".random3 a" ).click( function(){ 
            var z = (Number(pdID) - 3);
            sessionStorage.setItem("pdID", z); 
            location.href = 'products.html'
                        });
        $( ".random4 a" ).click( function(){ 
            var x = (Number(pdID) - 4);
            sessionStorage.setItem("pdID", x); 
            location.href = 'products.html'
                        });                
        
            }else if(Number(pdID) < 32){
        
            $( ".random1 a" ).click( function(){ 
                var n = (Number(pdID) + 1);
                sessionStorage.setItem("pdID", n); 
                location.href = 'products.html'
                           });
            $( ".random2 a" ).click( function(){ 
                var m = (Number(pdID) + 2);
                sessionStorage.setItem("pdID", m); 
                location.href = 'products.html'
                           });
            $( ".random3 a" ).click( function(){ 
                var z = (Number(pdID) + 3);
                sessionStorage.setItem("pdID", z); 
                location.href = 'products.html'
                            });
            $( ".random4 a" ).click( function(){ 
                var x = (Number(pdID) + 4);
                sessionStorage.setItem("pdID", x); 
                location.href = 'products.html'
                            });
                     }


});



function prependDIV() {

    var ttprice = $("#FirstMoney").text()
    var inputVal = $("#productNum input").val()
    var productPrice = $("#productPrice").text()

    if ($("#btnradio1").prop("checked")) {
        $("#psize").text("藍");
    } else {
        $("#psize").text("黃");
    };

    $("#shopCar").prepend(`
    <div class="row gy-4 CarPD"id="SG${1}" style="padding-bottom: 25px;">
        <div class="col-3">
            <img src=${$("#img1 img").attr('src')} alt="" style="width: 80px; height:80px;">
        </div>
        <div class="col-3">
            <h6>${$("#pdName h1").text()}</h6>
        </div>
        <div class="col-1 ">NT$</div>
        <div class="col-2 onepdprice">${$("#productPrice").text()}</div>
        <div class="col-1 ttval" >${$("#productNum input").val()}</div>
        
        <div class="col-2 deleteOne" type="button" id="PDelete" onclick="deletePD(this)">刪除</div>
    </div> `);
console.log(`<img src=${$("#bigimg").attr('src')} alt="" style="width: 80px; height:80px;">`);
           //商品尺寸有時間新增 <div class="col-1 psize">${$("#psize").text()}</div> 

    // 加上金額
    if (ttprice == '' | '0') {
        $("#FirstMoney").text(inputVal * Number(productPrice));
    } else
        if (ttprice != '') {
            $("#FirstMoney").text(Number(ttprice) + inputVal * Number(productPrice));
        }
    var productDIV = $("#shopCar").html();
    var price = $("#FirstMoney").text();
    sessionStorage.setItem("productDIV", productDIV);
    sessionStorage.setItem("price", price);
}

function deletePD(obj) {
    var ttprice = $("#FirstMoney").text();
    var CarPDdiv = $(obj).parent();
    var deleteNum = $(".ttval", CarPDdiv).text()
    var onepdprice = $(".onepdprice", CarPDdiv).text()
    // 刪除點選商品 .onepdprice
    $(obj).parent().remove();
    // 總價錢扣除 刪除數量*價錢
    $("#FirstMoney").text(Number(ttprice) - Number(deleteNum) * Number(onepdprice));
    // console.log(onepdprice);
    var productDIV = $("#shopCar").html();
    var price = $("#FirstMoney").text();
    sessionStorage.setItem("productDIV", productDIV);
    sessionStorage.setItem("price", price);
}

var productNum = $("#productNum input");
$('#minus').attr('disabled', true);
function add() {
    productNum.val(Math.abs(parseInt(productNum.val())) + 1);
    if (parseInt(productNum.val()) != 1) {
        $('#minus').attr('disabled', false);
    };
}
function minus() {
    productNum.val(Math.abs(parseInt(productNum.val())) - 1);
    if (parseInt(productNum.val()) == 1) {
        $('#minus').attr('disabled', true);
    };
}

//sessionStorage 
// 立即結帳
$(".Checkout").click(
    function () {
        if ($(".CarPD").length < 1) {
            alert("您的購物車還沒有加入商品喔!");

        } else {
            var productDIV = $("#shopCar").html();
            var price = $("#FirstMoney").text();
            sessionStorage.setItem("productDIV", productDIV);
            sessionStorage.setItem("price", price);   //將數據存入sessionStorage
            location.href = 'checkout.html';
        }         //頁面跳轉
        // sessionStorage.setItem("price", id);刪除
    });