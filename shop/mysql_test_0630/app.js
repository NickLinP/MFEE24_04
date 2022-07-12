var express = require("express");
var app = express();
app.listen(3000);

var mysql = require('mysql');
var conn = mysql.createConnection({
    user: "root",
    password: "",
    host: "localhost",
    port: 3306,
    database: "northwind"
})

conn.query('SELECT * FROM products',function (err, result) {
    if(err){
      console.log('[SELECT ProductID]',err.message);
      return;
    }
    // console.log('');
    //    console.log(result);
    //    console.log('\n\n');  
});
// conn.end()


