 // 載入網頁時從sessionStorage中獲取數據
 $(document).ready(function () {

    var minprice = sessionStorage.getItem("price");
    var productDIV = sessionStorage.getItem("productDIV");
    var deliverPrice = $("#deliverPrice").text();

    $(".CheckCar").prepend(productDIV);
    $("#minprice").text(minprice);
    $("#maxprice").text((Number(minprice) + Number(deliverPrice)));
    //  刪除數據 sessionStorage.removeItem("");
});

//  城市鄉鎮select
$('#twzipcode').twzipcode();
$('#twzipcode input').css("display", "none");
$('#twzipcode select').css({
    "width": "50%",
    "height": "35px",
});

//  購買人同收件人功能
function copyinfo() {
    if (event.currentTarget.checked) {
        $("#InputLastname").attr("value", "冠中");
        $("#InputFirstname").attr("value", "吳");
        $("#InputEmail").attr("value", "guanzhong199806@gmail.com");
        $("#PhoneNumber").attr("value", "0919073551");
    } else {
        $(".attrDisabled input").removeAttr("value");
    }
};

//  貨運與付款selects
$("#selectDeliver").change(function () {

    var vs = $("#selectDeliver").val();

    if (vs == 1) {

        $("#deliverPrice").text("80");
        $("#DeliverBox1").css("display", "flex");
        $("#DeliverBox2").css("display", "none");
        $("#DeliverBox3").css("display", "none");

    } else
        if (vs == 2) {

            $("#deliverPrice").text("0");
            $("#DeliverBox1").css("display", "none");
            $("#DeliverBox2").css("display", "flex");
            $("#DeliverBox3").css("display", "none");
        } 
        // else
        //     if (vs == 3) {

        //         $("#deliverPrice").text("60");
        //         $("#DeliverBox1").css("display", "none");
        //         $("#DeliverBox2").css("display", "none");
        //         $("#DeliverBox3").css("display", "flex");
        //  }
            else
                if (vs == 0) {
                    $("#deliverPrice").text("0");
                    $("#DeliverBox1").css("display", "none");
                    $("#DeliverBox2").css("display", "none");
                    $("#DeliverBox3").css("display", "none");
                }

    var minprice = sessionStorage.getItem("price")
    var deliverPrice = $("#deliverPrice").text()
    $("#maxprice").text((Number(minprice) + Number(deliverPrice)));
});

$("#selectPay").change(function () {
    var vs = $("#selectPay").val();
    if (vs == 0) {
        $("#PayBox1").css("display", "none");
        $("#PayBox2").css("display", "none");
    } else
        if (vs == 1) {
            $("#PayBox1").css("display", "flex");
            $("#PayBox2").css("display", "none");
        } else
            if (vs == 2) {
                $("#PayBox1").css("display", "none");
                $("#PayBox2").css("display", "flex");
            }
});

//  刪除功能
function deletePD(obj) {
    var price = $("#minprice").text();
    var CarPDdiv = $(obj).parent();
    var deleteNum = $(".ttval", CarPDdiv).text();
    var onepdprice = $(".onepdprice", CarPDdiv).text();
    var deliverPrice = $("#deliverPrice").text();

    //  刪除點選商品
    $(obj).parent().remove();
    $("#minprice").text(Number(price) - Number(deleteNum) * Number(onepdprice));
    $("#maxprice").text(Number(price) - Number(deleteNum) * Number(onepdprice) + Number(deliverPrice));
    // console.log($("#minprice").text());

    // 結帳頁刪除修改
    sessionStorage.removeItem("productDIV");
    sessionStorage.removeItem("price");
    sessionStorage.setItem("productDIV", $(".CheckCar").html());
    sessionStorage.setItem("price", $("#minprice").text());   //將數據存入sessionStorage
    // location.href = 'checkout.html';            //頁面跳轉
}

//  回上頁
$(".Back").click(
    function () {
        location.href = 'products.html';           
    });

//  資料送出
$(".End").click(
    function () {
        if ($(".CarPD").length < 1) {
            alert("您的購物車已清空，歡迎前往選購!");
            
        } else {
            alert("訂單已送出!");
        sessionStorage.removeItem("productDIV");
        sessionStorage.removeItem("price");
        location.href = 'shop.html';  
     }         
    });

