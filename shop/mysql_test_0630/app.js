var express = require("express");
var app = express();
app.listen(3000);

var cors = require("cors");
app.use(cors());

var mysql = require('mysql');
var conn = mysql.createConnection({
    user: "root",
    password: "",
    host: "localhost",
    port: 3306,
    database: "shop_product"
});

 
app.get('/', function (req, res) {
  
conn.query('SELECT * FROM products',function (err, result) {
    if(err){
      console.log('[SELECT ERROR]',err.message);
      return;
    }
     res.send(result);
      //  console.log(result);
       console.log("ok");
  });

});



// conn.end()


