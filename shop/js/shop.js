$(document).ready(function () {

for (let i=1; i<36; i++){
$( "#idP" + i ).click( function(){ 
   sessionStorage.setItem("pdID", i); 
  });
};

$('#s00').val(4);
$('#s01').val(55);

});

// 商品分類
function selectOp() {
    // 'select option:selected'
    var vs = $('#s00').val();
    if (vs == 1) {
        $('.pageBox').siblings().css({ "display": "none" });
        $('.Tshirt,#pageall').addClass().css({ "display": "flex" });
        $("#pageall div").remove();
        $(".DS1").clone().appendTo("#pageall");
        $("#titlename").text(`${'沉醉者藝術專刊'}`);
        $('#s01').val(55);
        

    } else
        if (vs == 0) {
            $('.pageBox').siblings().css({ "display": "none" });
            $('.silkscarf,#pageall').addClass().css({ "display": "flex" });
            $("#pageall div").remove();
            $(".TH3").clone().appendTo("#pageall");
            $("#titlename").text(`${'Traveling & Hugging'}`);
            $('#s01').val(55);
        } else
            if (vs == 3) {
                $('.pageBox').siblings().css({ "display": "none" });
                $('.poster,#pageall').addClass().css({ "display": "flex" });
                $("#pageall div").remove();
                $(".MD2").clone().appendTo("#pageall");
                $("#titlename").text(`${'吳冠中-MASKBOY'}`);
                $('#s01').val(55);
            } else
                if (vs == 2) {
                    $('.pageBox').siblings().css({ "display": "none" });
                    $('.Other,#pageall').addClass().css({ "display": "flex" });
                    $("#pageall div").remove();
                    $(".Other").clone().appendTo("#pageall");
                    $("#titlename").text(`${'其他'}`);
                    $('#s01').val(55);
                } else
                    if (vs == 4) {
                        $("#pageall").css({ "display": "none" });
                        $('.pageindex').css({ "display": "flex" });
                        $("#titlename").text(`${'所有商品'}`);
                        $('#s01').val(55);
                    };
                    $.getScript('../js/ShopChangeImg.js');
    // sessionStorage.removeItem("pdID");
    for (let i=1; i<36; i++){
        $( "a#idP" + i ).click( function(){ sessionStorage.setItem("pdID", i); });
            };
};
// 商品篩選
function selectOp2() {
    var vs = $('#s00').val();
    var vs2 = $('#s01').val();

    // 全部商品進行排序
    if (vs == 4 && vs2 == 5) {
        $('.pageBox').siblings().css({ "display": "none" });
        $('.Tshirt,#pageall').addClass().css({ "display": "flex" });
        $("#pageall div").remove();
        $(".NT180").clone().appendTo("#pageall");
        $(".NT250").clone().appendTo("#pageall");
        $(".NT260").clone().appendTo("#pageall");
        $(".NT290").clone().appendTo("#pageall");
        $(".NT390").clone().appendTo("#pageall");
        $(".NT420").clone().appendTo("#pageall");
        $(".NT680").clone().appendTo("#pageall");
        $(".NT980").clone().appendTo("#pageall");
        $(".NT1280").clone().appendTo("#pageall");
        $(".NT2700").clone().appendTo("#pageall");
        $(".NT6500").clone().appendTo("#pageall");
    } else
        if (vs == 4 && vs2 == 6) {
            $('.pageBox').siblings().css({ "display": "none" });
            $('.Tshirt,#pageall').addClass().css({ "display": "flex" });
            $("#pageall div").remove();
            $(".NT6500").clone().appendTo("#pageall");
            $(".NT2700").clone().appendTo("#pageall");
            $(".NT1280").clone().appendTo("#pageall");
            $(".NT980").clone().appendTo("#pageall");
            $(".NT680").clone().appendTo("#pageall");
            $(".NT420").clone().appendTo("#pageall");
            $(".NT390").clone().appendTo("#pageall");
            $(".NT290").clone().appendTo("#pageall");
            $(".NT260").clone().appendTo("#pageall");
            $(".NT250").clone().appendTo("#pageall");
            $(".NT180").clone().appendTo("#pageall");
        } else
            if (vs == 4 && vs2 == 7) {
                $('.pageBox').siblings().css({ "display": "none" });
                $('.Tshirt,#pageall').addClass().css({ "display": "flex" });
                $("#pageall div").remove();
                $(".DS1").clone().appendTo("#pageall");
                $(".MD2").clone().appendTo("#pageall");
                $(".TH3").clone().appendTo("#pageall");
            } else
                if (vs == 4 && vs2 == 8) {
                    $('.pageBox').siblings().css({ "display": "none" });
                    $('.Tshirt,#pageall').addClass().css({ "display": "flex" });
                    $("#pageall div").remove();
                    $(".TH3").clone().appendTo("#pageall");
                    $(".MD2").clone().appendTo("#pageall");
                    $(".DS1").clone().appendTo("#pageall");
                } else

                    // 篩選後商品進行排序
                    //vs == 0 
                    if (vs == 0 && vs2 == 5) {
                        $("#pageall div").remove();
                        $(".NT250.TH3").clone().appendTo("#pageall");
                        $(".NT420.TH3").clone().appendTo("#pageall");
                        $(".NT680").clone().appendTo("#pageall");
                        $(".NT980.Tshirt").clone().appendTo("#pageall");
                        $(".NT980.silkscarf").clone().appendTo("#pageall");
                        $(".NT980.poster").clone().appendTo("#pageall");
                    } else
                        if (vs == 0 && vs2 == 6) {
                            $("#pageall div").remove();
                            $(".NT980.poster").clone().appendTo("#pageall");
                            $(".NT980.silkscarf").clone().appendTo("#pageall");
                            $(".NT980.Tshirt").clone().appendTo("#pageall");
                            $(".NT680").clone().appendTo("#pageall");
                            $(".NT420.TH3").clone().appendTo("#pageall");
                            $(".NT250.TH3").clone().appendTo("#pageall");
                        } ;

    // vs == 1,2 不用排序
    // vs == 3
    if (vs == 3 && vs2 == 5) {
        $("#pageall div").remove();
        $(".NT180").clone().appendTo("#pageall");
        $(".NT260").clone().appendTo("#pageall");
        $(".NT290").clone().appendTo("#pageall");
        $(".NT390").clone().appendTo("#pageall");
        $(".NT1280").clone().appendTo("#pageall");
        $(".NT2700").clone().appendTo("#pageall");
        $(".NT6500").clone().appendTo("#pageall");
    } else
        if (vs == 3 && vs2 == 6) {
            $("#pageall div").remove();
            $(".NT6500").clone().appendTo("#pageall");
            $(".NT2700").clone().appendTo("#pageall");
            $(".NT1280").clone().appendTo("#pageall");
            $(".NT390").clone().appendTo("#pageall");
            $(".NT290").clone().appendTo("#pageall");
            $(".NT260").clone().appendTo("#pageall");
            $(".NT180").clone().appendTo("#pageall");
        };
        
    $.getScript('../js/ShopChangeImg.js');
    // sessionStorage.removeItem("pdID");
    for (let i=1; i<36; i++){
        $( "a#idP" + i ).click( function(){ sessionStorage.setItem("pdID", i); });
            };
    
}

    

    
    
  
    
