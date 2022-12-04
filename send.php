$host   = "riset.revolusi-it.com";
$port     = 1883;
$username = "";
$password = "";

require("phpMQTT.php");
$message = "G.211.19.0114, G.211.19.0116, G.211.19.0139";
$mqtt = new bluerhinos\phpMQTT($host, $port, "ClientID".rand());

if ($mqtt->connect(true,NULL,$username,$password)) {
  $mqtt->publish("iot/test",$message, 0);
  $mqtt->close();
}else{
  echo "Fail or time out
";
}