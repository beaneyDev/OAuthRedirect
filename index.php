<?php
	$code = $_GET["code"];
	$url = 'https://github.com/login/oauth/access_token';
	$data = array('client_id' => 'df6b508bc92edc6cdb8c', 'client_secret' => '819dc555f87766b8cdb8f3974c18bbd42b69495f', 'code' => $code);

	// use key 'http' even if you send the request to https://...
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/json",
	        'header'  => "Accept: application/json",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }
	$data = json_decode($result);
	header('Location: http://mb-react-todo.herokuapp.com/?accessToken=' . $data->access_token);
?>