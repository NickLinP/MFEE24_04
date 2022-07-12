const http = require("http");

const server = http.createServer((req, res) =>{
    res.write("hello user.");
    res.end();
})

server.listen(3501,() =>{
    console.log("server is running")
});