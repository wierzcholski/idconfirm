<?php
$IDCONFIRM_ID = '9999999'; //IDConfirm ID
	$IDCONFIRM_KEY = '181svGmxSALjVhVcgmas7g'; //API Key
	$IDCONFIRM_LABEL = '1'; // YOUR INTERNAL LABLE OF USER
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => 'https://idconfirm.io/api/',
		CURLOPT_USERAGENT => 'IDCONFIRM_VERFICATION_DEMO',
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
			"action" => 'verfication_push_init',
			"id" => $IDCONFIRM_ID,
			"key" => $IDCONFIRM_KEY,
			"label" => $IDCONFIRM_LABEL //YOUR LABEL
		)
	));
	$resp = curl_exec($curl);
	$resp = json_decode($resp);
	$code = $resp -> code;
	curl_close($curl);
	print "<script>var newUniqKey = '$code' ;</script>";
?>

<div id="idconfirm">
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function() {
		console.log("load idconfirm");
		$('#idconfirm').load('https://idconfirm.io/addon/index.html');
	});

</script>