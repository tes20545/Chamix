<?php


$type = $_POST['type'];
$mesg = $_POST['detail'];
$em_name=$_POST['em_name'];
$em_branch=$_POST['em_branch'];
$em_phone=$_POST['em_phone'];

$message = 'รายละเอียดการแจ้งซ่อม:'.$mesg."\n".'ประเภท: '.$type."\n".'ชื่อคนแจ้ง: '.$em_name."\n".'สาขาที่สังกัด:'.$em_branch."\n".'เบอร์โทรศัพท์:'.$em_phone;

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