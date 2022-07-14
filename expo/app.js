var express = require('express');
var app = express();
var mysql = require('mysql'); 

var cors = require('cors');
app.use(cors());

// mysql 連接信息 
var connection = mysql.createConnection({ 
    host: 'localhost', 
    user: 'root',   
    password: '', 
    database: 'space', 
    port: 3306 }); 
    

app.get('/',function(req, res){
    // 查詢 info_test 表 
    connection.query('SELECT * FROM expo', function (error, result){ 
       if (error) {
       console.log('[SELECT ERROR]',error.message);
       return; 
    }
    res.send(result) ;
    console.log('ok')
     }); 
})

app.get('/facility',function(req, res){
  // 查詢 info_test 表 
  connection.query('SELECT * FROM spacepic', function (error, result){ 
     if (error) {
     console.log('[SELECT ERROR]',error.message);
     return; 
  }
  res.send(result) ;
  console.log('ok')
   }); 
})

 //connection.end(); 複製代碼

app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
});