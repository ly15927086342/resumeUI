<?php
//phpinfo();
header('Access-Control-Allow-Origin:*;charset=utf-8');
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$pw = $_POST['pw'];
if ($pw=="1314"){
	echo "http://localhost:1314/index.html";
} else {
	echo "wrong";
}
?>