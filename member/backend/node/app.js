// 建立SERVER
var express = require('express');
var app = express();

// 允許跨域使用本服務
var cors = require("cors");
app.use(cors());

// 使用session
var expressSessoin = require("express-session");
const storage = require('node-sessionstorage');
var sessionMiddleware = expressSessoin({
    secret: "P@ssword",
    resave: true,
    saveUninitialized: true
});

// 將外部傳入的資料轉換為JSON格式
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

// 啟動Server
app.listen(3000);

// 建立MySQL連線
var mysql = require("mysql");
var conn = mysql.createConnection({
    user: "root",
    password: "",
    host: "localhost",
    port: 3306,
    database: "def_space"
})

// 如果連線成功err會是null
conn.connect(function (err) {
    console.log(err);
});


// 伺服器指令測試
app.get('/test', function (req, res) {
    console.log('收到get命令');
    res.send('get成功');
})
app.post('/test', function (req, res) {
    storage.setItem('foo', 'bar');
    console.log(storage.getItem('foo'));
    res.send('ok');
})

var svgCaptcha = require('svg-captcha');
var data = svgCaptcha.create({
    //options 
})
console.log(data)
//{data: '<svg>......</svg>', text: 'fdsafasdf'}
// 在express中使用

var svgCaptcha = require('svg-captcha');
var express = require('express');

// 中介程式啟動
app.use(sessionMiddleware);

// google登入解析token
const jwt_decode = require('jwt-decode');
app.post('/login/token', function (req, res) {
    var token = req.body.token;
    var user_profile = jwt_decode(token);
    console.log(user_profile);
    console.log(user_profile.email);
    console.log(user_profile.given_name);
    console.log(user_profile.sub);

    var firstName = user_profile.family_name;
    var lastName = user_profile.given_name;
    var email = user_profile.email;
    var password = user_profile.sub;

    // 帳號重複確認flag
    var duplicatedAccount = false;
    conn.query("SELECT email, id FROM `member`;", [],
        function (err, rows) {
            for (var i = 0; i < rows.length; i++) {
                console.log(rows[i]);
                console.log(rows[i].email);
                if (email == rows[i].email) {
                    duplicatedAccount = true;
                    console.log('帳號重複');
                    var userProfile = {
                        id: rows[i].id
                    }
                    res.send(userProfile);
                    break;
                }
            }

            if (duplicatedAccount == true) {
                return;
            } else {
                conn.query(
                    "INSERT INTO `member` (`firstname`, `lastname`, `email`, `password`) VALUES (?, ?, ?, ?);",
                    [firstName, lastName, email, password],
                    function (err, rows) {
                        var userProfile = {
                            id: rows.insertId
                        }
                        res.send(userProfile);
                    }
                )
            }
        }
    )
})

// 登入功能
app.post('/login', function (req, res) {
    var inputEmail = req.body.email;
    var inputPassword = req.body.password;
    var userPassword = '';
    var userId = 0;

    // 比對帳號 (email)
    conn.query("SELECT email , password , id FROM `member`;", [],
        function (err, rows) {
            var arrIdx = 0;
            var emailErr = false;
            var emailCheck = false;
            var passwordCheck = false;

            rows.forEach(function (item, idx) {
                var serverEmail = item.email;
                emailErr = false;
                if (inputEmail == serverEmail) {
                    console.log('帳號正確');
                    emailCheck = true;
                    arrIdx = idx;
                    userId = rows[idx].id;
                    userPassword = rows[idx].password;
                }
            })
            if (emailCheck == false) {
                console.log('後端輸出帳號錯誤');
                res.send('email_error');
                return;
            }

            // 比對密碼
            if (inputPassword == userPassword) {
                passwordCheck = true;
                console.log('密碼正確');
            } else {
                console.log('密碼錯誤');
                res.send('password_error');
                return;
            }
            // 如果密碼也正確，回傳登入確認以及該帳號的id到前端
            if (emailCheck == true & passwordCheck == true) {
                var data = {
                    confirmLogin: 'ok',
                    id: userId.toString()
                };
                console.log(data);
                res.send(data);
            }
        }
    )
})



app.post('/member/profile', function (req, res) {
    var tokenId = JSON.parse(req.body.userId);
    // console.log(typeof (tokenId))
    // console.log(tokenId)
    conn.query("SELECT * FROM `member` WHERE id = ?;", [tokenId],
        function (err, rows) {
            console.log(JSON.stringify(rows[0]));
            var userProfile = {
                id: rows[0].id,
                firstname: rows[0].firstname,
                lastname: rows[0].lastname,
                email: rows[0].email,
                phoneNumber: rows[0].phoneNumber,
                birthdate: rows[0].birthdate,
                country: rows[0].country,
                township: rows[0].township,
                address: rows[0].address
            }
            res.send(userProfile);
        })
})


// 會員註冊，必須優先比對email是否有重複，如果重複需拒絕註冊
app.post('/member/signUp', function (req, res) {
    var firstName = req.body.firstName;
    var lastName = req.body.lastName;
    var email = req.body.email;
    var password = req.body.password;
    var birthDate = req.body.birthDate;

    // 圖形驗證碼認證確認
    var actCode = storage.getItem('randomcode');
    var getCode = req.body.code;

    // 如果認證碼輸入就不需要訪問資料庫比對email
    if (getCode != actCode) {
        res.send('verify_error');
        return;
    }

    // 帳號重複確認flag
    var duplicatedAccount = false;
    conn.query("SELECT email FROM `member`;", [],
        function (err, rows) {
            // console.log(JSON.stringify(rows));
            console.log(rows);
            console.log(rows.length);
            for (var i = 0; i < rows.length; i++) {
                console.log(rows[i]);
                console.log(rows[i].email);
                if (email == rows[i].email) {
                    duplicatedAccount = true;
                    console.log('帳號重複');
                    res.send('duplicated_account');
                    break;
                }
            }

            if (duplicatedAccount == true) {
                return;
                // 將資料寫入資料庫，完成註冊會員
            } else {
                conn.query(
                    "INSERT INTO `member` (`firstname`, `lastname`, `email`, `password`, `birthdate`) VALUES (?, ?, ?, ?, ?);",
                    [firstName, lastName, email, password, birthDate],
                    function (err, rows) {
                        // 發出註冊成功到網頁
                        res.send('signUp_success');
                    }
                )
            }
        }
    )
})


// 會員資料修改
app.put('/member/dataUpdate', function (req, res) {
    var userId = JSON.parse(req.body.userId);
    var firstName = req.body.firstName;
    var lastName = req.body.lastName;
    var email = req.body.email;
    var phoneNumber = req.body.phoneNumber;
    // password目前在表單上沒有，暫時不使用
    var password = req.body.password;
    var birthDate = req.body.birthDate;
    var country = req.body.country;
    var township = req.body.township;
    var address = req.body.address;
    conn.query("UPDATE `member` SET `firstname` = ?, `lastname` = ?, `email` = ? , `phoneNumber` = ? , `birthdate` = ? , `country` = ?, `township` = ?, `address` = ? WHERE `member`.`id` = ?;",
        [firstName, lastName, email, phoneNumber, birthDate, country, township, address, userId],
        function (err, rows) {
            console.log('修改成功');
        }
    )
})



// 咖啡廳訂位紀錄讀取
app.post('/member/coffee', function (req, res) {
    var userId = JSON.parse(req.body.userId);
    conn.query("SELECT * FROM `member` WHERE id = ?;",
        [userId],
        function (err, rows) {
            var email = rows[0].email;
            conn.query("SELECT * FROM `coffee_reserve` WHERE email = ? ORDER BY reserveDate;",
                [email],
                function (err, rows) {
                    res.send(rows);
                })
        })
})


// 場地租借紀錄讀取
app.post('/member/rent', function (req, res) {
    var userId = JSON.parse(req.body.userId);
    conn.query("SELECT * FROM `member` WHERE id = ?;",
        [userId],
        function (err, rows) {
            var email = rows[0].email;
            console.log(email);
            conn.query("SELECT * FROM `rent_site` WHERE email = ? ORDER BY reserveDate;",
                [email],
                function (err, rows) {
                    res.send(rows);
                })
        })

})


// 訂單紀錄
app.post('/member/order', function (req, res) {
    var userId = JSON.parse(req.body.userId);
    conn.query("SELECT * FROM `member` WHERE id = ?;",
        [userId],
        function (err, rows) {
            var email = rows[0].email;
            // 透過email列出所有紀錄
            conn.query("SELECT * FROM `order_history` WHERE email = ? ORDER BY orderDate;",
                [email],
                function (err, rows) {
                    res.send(rows);
                }
            )
        }
    )
})

// 訂單記錄詳細資料
app.post('/member/order/detail', function (req, res) {
    var orderNumber = req.body.orderNumber;
    conn.query("SELECT * FROM `order_detail` WHERE `orderNumber` = ?;",
        [orderNumber],
        function (err, rows) {
            res.send(rows);
        }
    )
})

// 圖形驗證碼生成發送到畫面
app.get('/get-img-verify', function (req, res) {
    console.log('取得圖形驗證碼');
    console.log(req.query);
    var option = req.query;
    // // 驗證碼，有兩個屬性，text是字符，data是svg代碼
    var code = svgCaptcha.create(option);
    // // 保存到session,忽略大小寫
    storage.setItem('randomcode', code.text);
    console.log('item set:', storage.getItem('randomcode'));
    // // 返回數據直接放入頁面元素展示即可
    console.log(code.text);
    res.send({
        img: code.data
    });
});

// 圖形驗證碼接收驗證，功能已經整合到註冊內
// app.post('/cerification', function (req, res, next) {
// var actCode = storage.getItem('randomcode');
// var getCode = req.body.code;
// if ( getCode == actCode ){
//     res.send('verify_ok');
// }else{
//     res.send('verify_error');
// }
// });



// 忘記密碼功能
var forgetEmail = require('./forgetEmail');
var randomPassowrd = require('./random.js');
console.log(`隨機密碼${randomPassowrd()}`);
// 只要執行forgetEmail()就會發送郵件
// forgetEmail('外部傳入參數')
app.post('/forgetPassowrd', function (req, res) {
    var email = req.body.email;
    conn.query("SELECT * FROM `member` WHERE email = ?;", [email],
        function (err, rows) {
            // 若rows不為空，代表有找到帳號，重新設置亂數密碼，並透過郵件發送
            if (rows != '') {
                var userName = rows[0].firstname + rows[0].lastname;
                var newPassowrd = randomPassowrd();
                console.log(userName);
                conn.query("UPDATE `member` SET `password` = ? WHERE `member`.`email` = ?;",
                    [newPassowrd, email],
                    function (err, rows) {
                        forgetEmail(email, userName, newPassowrd);
                        res.send('already_reset_password');
                    }
                )
            } else {
                // 找不到該信箱，發送錯誤訊息到前端
                res.send('not_found_email');
            }
        }
    )
})



