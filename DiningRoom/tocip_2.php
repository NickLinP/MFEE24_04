<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <!-- 我寫的連結 -->
    <link rel="stylesheet" href="css/Topic.css">
    <title>餐飲管理系統</title>
    <style>
        img {
            width: 25px;
        }

        .image {
            width: 25px;
            height: 40px;
        }

        input {
            width: 120px;
        }
    </style>
</head>

<body>
    <div id="tab-demo">
        <ul class="tab-title col-12">
            <h2>
                <li><a href="#tab01">
                        <samp id="sub_1">精品咖啡</samp>
                    </a></li>
                <li><a href="#tab02">
                        <samp id="sub_2">其他飲品</samp>
                    </a></li>
                <li><a href="#tab03">
                        <samp id="sub_3">輕食料理</samp>
                    </a></li>
            </h2>
        </ul>
        <form action="./topic_1.php" method="post" enctype="multipart/form-data">
            <div id="tab01" class="tab-inner col-12">
                <table class="table table-hover table-responsive">
                    <thead class="table align-middle">
                        <tr>
                            <th>名稱:</th>
                            <th>英文名稱:</th>
                            <th>價格:</th>
                            <th>上傳檔案:</th>
                        </tr>
                    </thead>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_1" value="美式咖啡"></td>
                        <td><input type="text" name="co_1v1" value="Caffè Americano"></td>
                        <td><input type="text" name="co_1v2" value="NT$75"></td>
                        <td>
                            <img class="image" id="output_1" height="200" style="display:none">
                            <input type="file" name="co_1v3" onchange="openFile_1(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_2" value="義式濃縮咖啡"></td>
                        <td><input type="text" name="co_2v1" value="Espresso"></td>
                        <td><input type="text" name="co_2v2" value="NT$85"></td>
                        <td>
                            <img class="image" id="output_2" height="200" style="display:none">
                            <input type="file" name="co_2v3" onchange="openFile_2(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_3" value="椪糖咖啡"></td>
                        <td><input type="text" name="co_3v1" value="Dalgona coffee"></td>
                        <td><input type="text" name="co_3v2" value="NT$90"></td>
                        <td>
                            <img class="image" id="output_3" height="200" style="display:none">
                            <input type="file" name="co_3v3" onchange="openFile_3(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_4" value="卡布奇諾"></td>
                        <td><input type="text" name="co_4v1" value="Cappuccino"></td>
                        <td><input type="text" name="co_4v2" value="NT$95"></td>
                        <td>
                            <img class="image" id="output_4" height="200" style="display:none">
                            <input type="file" name="co_4v3" onchange="openFile_4(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_5" value="咖啡拿鐵"></td>
                        <td><input type="text" name="co_5v1" value="Caffè Latte"></td>
                        <td><input type="text" name="co_5v2" value="NT$95"></td>
                        <td>
                            <img class="image" id="output_5" height="200" style="display:none">
                            <input type="file" name="co_5v3" onchange="openFile_5(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_6" value="焦糖瑪奇朵"></td>
                        <td><input type="text" name="co_6v1" value="Caramel Macchiato"></td>
                        <td><input type="text" name="co_6v2" value="NT$100"></td>
                        <td>
                            <img class="image" id="output_6" height="200" style="display:none">
                            <input type="file" name="co_6v3" onchange="openFile_6(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="co_7" value="咖啡密斯朵"></td>
                        <td><input type="text" name="co_7v1" value="Caffè Misto"></td>
                        <td><input type="text" name="co_7v2" value="NT$100"></td>
                        <td>
                            <img class="image" id="output_7" height="200" style="display:none">
                            <input type="file" name="co_7v3" onchange="openFile_7(event)">
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tab02" class="tab-inner col-12">
                <table class="table table-hover table-responsive">
                    <thead class="table align-middle">
                        <tr>
                            <th>名稱:</th>
                            <th>英文名稱:</th>
                            <th>價格:</th>
                            <th>上傳檔案:</th>
                        </tr>
                    </thead>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_1" value="錫蘭紅茶"></td>
                        <td><input type="text" name="lo_1v1" value="Ceylon Black Tea"></td>
                        <td><input type="text" name="lo_1v2" value="NT$60"></td>
                        <td>
                            <img class="image" id="output_1" height="200" style="display:none">
                            <input type="file" name="lo_1v3" onchange="openFile_1(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_2" value="冰搖檸檬紅茶"></td>
                        <td><input type="text" name="lo_2v1" value="Shaken Lemon Black Tea"></td>
                        <td><input type="text" name="lo_2v2" value="NT$65"></td>
                        <td>
                            <img class="image" id="output_2" height="200" style="display:none">
                            <input type="file" name="lo_2v3" onchange="openFile_2(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_3" value="精選英式奶茶"></td>
                        <td><input type="text" name="lo_3v1" value="British Milk Tea"></td>
                        <td><input type="text" name="lo_3v2" value="NT$80"></td>
                        <td>
                            <img class="image" id="output_3" height="200" style="display:none">
                            <input type="file" name="lo_3v3" onchange="openFile_3(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_4" value="純素黑熱巧克力"></td>
                        <td><input type="text" name="lo_4v1" value="Vegan Dark Hot Chocolate"></td>
                        <td><input type="text" name="lo_4v2" value="NT$85"></td>
                        <td>
                            <img class="image" id="output_4" height="200" style="display:none">
                            <input type="file" name="lo_4v3" onchange="openFile_4(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_5" value="黑糖珍珠奶茶"></td>
                        <td><input type="text" name="lo_5v1" value="Brown Sugar Pearl milk tea"></td>
                        <td><input type="text" name="lo_5v2" value="NT$90"></td>
                        <td>
                            <img class="image" id="output_5" height="200" style="display:none">
                            <input type="file" name="lo_5v3" onchange="openFile_5(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_6" value="熱可可"></td>
                        <td><input type="text" name="lo_6v1" value="Hot Chocolate"></td>
                        <td><input type="text" name="lo_6v2" value="NT$90"></td>
                        <td>
                            <img class="image" id="output_6" height="200" style="display:none">
                            <input type="file" name="lo_6v3" onchange="openFile_6(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="lo_7" value="冰經典巧克力"></td>
                        <td><input type="text" name="lo_7v1" value="Iced Signature Chocolate"></td>
                        <td><input type="text" name="lo_7v2" value="NT$135"></td>
                        <td>
                            <img class="image" id="output_7" height="200" style="display:none">
                            <input type="file" name="lo_7v3" onchange="openFile_7(event)">
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tab03" class="tab-inner col-12">
                <table class="table table-hover table-responsive">
                    <thead class="table align-middle">
                        <tr>
                            <th>名稱:</th>
                            <th>英文名稱:</th>
                            <th>價格:</th>
                            <th>上傳檔案:</th>
                        </tr>
                    </thead>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_1" value="哈姆菠菜蛋堡"></td>
                        <td><input type="text" name="eo_1v1" value="Ham & Frittata Sandwich"></td>
                        <td><input type="text" name="eo_1v2" value="NT$80"></td>
                        <td>
                            <img class="image" id="output_1" height="200" style="display:none">
                            <input type="file" name="eo_1v3" onchange="openFile_1(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_2" value="法式烤火腿三明治"></td>
                        <td><input type="text" name="eo_2v1" value="Ham & Cheese Sandwich"></td>
                        <td><input type="text" name="eo_2v2" value="NT$85"></td>
                        <td>
                            <img class="image" id="output_2" height="200" style="display:none">
                            <input type="file" name="eo_2v3" onchange="openFile_2(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_3" value="起司牛肉可頌"></td>
                        <td><input type="text" name="eo_3v1" value="Cheese & Beef Croissant"></td>
                        <td><input type="text" name="eo_3v2" value="NT$90"></td>
                        <td>
                            <img class="image" id="output_3" height="200" style="display:none">
                            <input type="file" name="eo_3v3" onchange="openFile_3(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_4" value="黑松露嫩蛋三明治"></td>
                        <td><input type="text" name="eo_4v1" value="Truffle and Egg Sandwich"></td>
                        <td><input type="text" name="eo_4v2" value="NT$95"></td>
                        <td>
                            <img class="image" id="output_4" height="200" style="display:none">
                            <input type="file" name="eo_4v3" onchange="openFile_4(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_5" value="鹽燒豬肉堡"></td>
                        <td><input type="text" name="eo_5v1" value="Saute Pork Sandwich"></td>
                        <td><input type="text" name="eo_5v2" value="NT$95"></td>
                        <td>
                            <img class="image" id="output_5" height="200" style="display:none">
                            <input type="file" name="eo_5v3" onchange="openFile_5(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_6" value="經典總匯三明治"></td>
                        <td><input type="text" name="eo_6v1" value="Club Sandwich"></td>
                        <td><input type="text" name="eo_6v2" value="NT$110"></td>
                        <td>
                            <img class="image" id="output_6" height="200" style="display:none">
                            <input type="file" name="eo_6v3" onchange="openFile_6(event)">
                        </td>
                    </tr>
                    <tr class="table align-middle">
                        <td><input type="text" name="eo_7" value="舒肥雞肉蔬菜盅"></td>
                        <td><input type="text" name="eo_7v1" value="Shu Fei Chicken Vegetable"></td>
                        <td><input type="text" name="eo_7v2" value="NT$200"></td>
                        <td>
                            <img class="image" id="output_7" height="200" style="display:none">
                            <input type="file" name="eo_7v3" onchange="openFile_7(event)">
                        </td>
                    </tr>
                </table>
            </div>
            <input type="submit">
        </form>
    </div>
    <script>
        // 菜單切換
        $(function() {
            var $li = $('ul.tab-title li');
            $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

            $li.click(function() {
                $($(this).find('a').attr('href')).fadeIn(100).show().siblings('.tab-inner').hide();
                $(this).addClass('active').siblings('.active').removeClass('active');
            });
        });

        function openFile_1(event) {
            var input = event.target; //取得上傳檔案
            var reader = new FileReader(); //建立FileReader物件
            reader.readAsDataURL(input.files[0]); //以.readAsDataURL將上傳檔案轉換為base64字串
            reader.onload = function() { //FileReader取得上傳檔案後執行以下內容
                var dataURL = reader.result; //設定變數dataURL為上傳圖檔的base64字串
                $("#output_1").attr('src', dataURL).show(); //將img的src設定為dataURL並顯示
            };
        }

        function openFile_2(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_2").attr('src', dataURL).show();
            }
        }

        function openFile_3(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_3").attr('src', dataURL).show();
            }
        }

        function openFile_4(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_4").attr('src', dataURL).show();
            }
        }

        function openFile_5(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_5").attr('src', dataURL).show();
            }
        }

        function openFile_6(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_6").attr('src', dataURL).show();
            }
        }

        function openFile_7(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function() {
                var dataURL = reader.result;
                $("#output_7").attr('src', dataURL).show();
            }
        }
    </script>
</body>

</html>
