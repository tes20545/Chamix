<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$mesg = $_POST['package'];

$message = $mesg."\n".'จาก Line ID: '.$name."\n".'เบอร์โทรศัพท์: '.$phone."\n".'อีเมลล์: '.$email."\n";

if($name<>"" ||  $mesg <> "") {
	
	sendlinemesg();

	header('Content-Type: text/html; charset=utf-8');
    $res = notify_message($message);
    echo "<script>";
	echo "alert('ทำการสั่งซื้อเรียบร้อย โปรดรอการติดต่อกลับ');";
        echo "window.history.back();";
        echo "</script>";
} else {
	echo "<center>Error: กรุณากรอกข้อมูลให้ครบถ้วน</center>";
}

function sendlinemesg() {
	
    define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN','N74A5qU3UNjX7ACpDecmUOBxYBYPMB5ZkivbfFUIet1');

	function notify_message($message){

		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData,'','&');
		$headerOptions = array(
			'http'=>array(
				'method'=>'POST',
				'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
				'content' => $queryData
			)
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$res = json_decode($result);
		return $res;

	}

}

?>