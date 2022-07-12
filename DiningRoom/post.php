<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form method="POST" action="db.php">
        <div class="modal-body">
            <h3>定義空間</h3>
            <p>
                歡迎蒞臨<br>
                有訂位需求的顧客，請填寫以下資訊
            </p>
            <h5>用餐日期</h5>
            <p>本餐廳只接受二個月內線上訂位</p>
            <label for="bookdate">日期：</label>
            <input type="date" name="date_s" id="bookdate" placeholder="2014-09-18">
            <div class="news-filter">
                <select name="period" required>
                    <option value="" disabled selected hidden>請選擇時間</option>
                    <option value="12:00">12:00&nbsp;PM</option>
                    <option value="12:30">12:30&nbsp;PM</option>
                    <option value="13:00">13:00&nbsp;PM</option>
                    <option value="13:30">13:30&nbsp;PM</option>
                    <option value="14:00">14:00&nbsp;PM</option>
                    <option value="14:30">14:30&nbsp;PM</option>
                    <option value="15:00">15:00&nbsp;PM</option>
                    <option value="15:30">15:30&nbsp;PM</option>
                    <option value="16:00">16:00&nbsp;PM</option>
                    <option value="16:30">16:30&nbsp;PM</option>
                    <option value="17:00">17:00&nbsp;PM</option>
                </select>
            </div>
            <h5>用餐人數</h5>
            <div class="myDiv">
                <input type="range" name="number" id="myRange" value="1" min="1" max="10" step="1" required>
                <br>
                <span id="rangeTxt"></span>
            </div>
            <h5>訂位資訊</h5>
            <p>您的大名</p>
            <input name="name" id="booking" oninput="mod()" onpropertychange="mod()" type="text" placeholder="例如:陳先生" required>
            <p>電話</p>
            <input name="telephone" type="text" maxlength="10" pattern="09\d{8}" placeholder="例如:09xxxxxxxx" required>
            <p>謝謝<span id="booker">您</span>的填寫！<br>
                在送出前，請再次確認資訊是否填寫正確。<br>
                期待您的光臨
            </p>
        </div>
        <div class="modal-footer">
            <input type="submit">
        </div>
    </form>
    <script>
        // 訂位長條軸人數
        $("#rangeTxt").html($("#myRange").val()); // 在 #rangeTxt 顯示 #myRange 的 bar 值
        $("#myRange").on("input", function() { // 當輸入 input 時執行以下動作
            $("#rangeTxt").html($(this).val()); // 將本數值顯示在 #rangeTxt 上
        });
        $(function() {
            var r = $('input');
            r.on('mouseenter', function() {
                var p = r.val();
                r.on('click', function() {
                    p = r.val();
                    bg(p);
                });
                r.on('mousemove', function() {
                    p = r.val();
                    bg(p);
                });
            });

            function bg(n) {
                r.css({
                    'background-image': '-webkit-linear-gradient(left ,#f22 0%,#f22 ' + n + '%,#fff ' + n + '%, #fff 100%)'
                });
            }
        });
        // 以上訂位長條軸人數

        // 訂位人名字監控
        function mod() {
            var booking = document.getElementById("booking").value;
            document.getElementById("booker").textContent = booking;
        }
        // 以上訂位人名字監控
    </script>
</body>

</html>