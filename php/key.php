<?php

  $key_value = $_GET['key'];

  $ch = curl_init();
  $url = 'http://api.visitkorea.or.kr/openapi/service/rest/GoCamping/searchList'; /*URL*/
  $queryParams = '?' . urlencode('ServiceKey') . '=FZ9ETTcU6BfwsBtQzxMy%2BpDySKoGs8TSeTUn0mJYWVU71VM6%2BKsLVDMDuunnFhcFfjngrpqB74HlAxLtj1kv%2Bg%3D%3D'; /*Service Key*/
  $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
  $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
  $queryParams .= '&' . urlencode('MobileOS') . '=' . urlencode('ETC'); /**/
  $queryParams .= '&' . urlencode('MobileApp') . '=' . urlencode('AppTest'); /**/
  $queryParams .= '&' . urlencode('keyword') . '=' . urlencode($key_value); /**/

  curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  $response = curl_exec($ch);
  curl_close($ch);

 // convert the XML string to JSON
  $xml = simplexml_load_string($response);
  $json = json_encode($xml, JSON_UNESCAPED_UNICODE);
  echo $json;


?>