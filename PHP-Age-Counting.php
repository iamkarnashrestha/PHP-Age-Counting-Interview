<?php

$ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);
$response = json_decode($data,true);
$items = explode(', ', $response['data']);
$i=1;$j=0;
foreach ($items as $key => $value) {
	if($key==$i)
	{
		$ages[$j]=$value;
		$i=$i+2;
		$j=$j+1;
	}
}
$count=0;
foreach ($ages as $key => $value) {
	$age=explode('=', $value)[1];
	if($age>=50)
	{
		$count=$count+1;
		
	}
}
echo $count;

?>