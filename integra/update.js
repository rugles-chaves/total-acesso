var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "novo"
});
$hoje = new Date()
//console.log(hoje)
$nub= '1'
con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "update usuarios set data ='"+$hoje+"' where id ="+$nub+" ";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});

