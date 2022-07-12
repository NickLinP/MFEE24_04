// 菜單切換
$(function () {
    var $li = $('ul.tab-title li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-inner').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});

$(function () {
    var $li = $('ul.tab-titlev2 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv2').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv2').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });

});

$(function () {
    var $li = $('ul.tab-titlev3 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv3').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv3').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});

$(function () {
    var $li = $('ul.tab-titlev4 li');
    $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-innerv4').hide();

    $li.click(function () {
        $($(this).find('a').attr('href')).fadeIn(1000).show().siblings('.tab-innerv4').hide();
        $(this).addClass('active').siblings('.active').removeClass('active');
    });
});
// 以上菜單切換

// 互動視窗
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// 以上互動視窗

// 訂位限制
function convertToISO(timebit) {
    // remove GMT offset
    timebit.setHours(0, -timebit.getTimezoneOffset(), 0, 0);
    // format convert and take first 10 characters of result
    var isodate = timebit.toISOString().slice(0, 10);
    return isodate;
}

var bookdate = document.getElementById('bookdate');
var currentdate = new Date();
bookdate.min = convertToISO(currentdate);
bookdate.placeholder = bookdate.min;
var futuredate = new Date();
// go forward 7 days into the future
futuredate.setDate(futuredate.getDate() + 60);
bookdate.max = convertToISO(futuredate);
// 以上訂位限制

// 訂位人名字監控
function mod() {
    var booking = document.getElementById("booking").value;
    document.getElementById("booker").textContent = booking;
}
// 以上訂位人名字監控