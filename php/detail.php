<?php

  $lat = $_GET['lat']; //세로 (latitude-위도)
  $lon = $_GET['lon']; //가로 (longitude-경도)

  $ch = curl_init();
  $url = 'http://api.visitkorea.or.kr/openapi/service/rest/GoCamping/locationBasedList'; /*URL*/
  $queryParams = '?' . urlencode('ServiceKey') . '=FZ9ETTcU6BfwsBtQzxMy%2BpDySKoGs8TSeTUn0mJYWVU71VM6%2BKsLVDMDuunnFhcFfjngrpqB74HlAxLtj1kv%2Bg%3D%3D'; /*Service Key*/
  $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
  $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
  $queryParams .= '&' . urlencode('MobileOS') . '=' . urlencode('ETC'); /**/
  $queryParams .= '&' . urlencode('MobileApp') . '=' . urlencode('AppTest'); /**/
  $queryParams .= '&' . urlencode('mapX') . '=' . urlencode($lon); /*경도*/
  $queryParams .= '&' . urlencode('mapY') . '=' . urlencode($lat); /*위도*/
  $queryParams .= '&' . urlencode('radius') . '=' . urlencode(10); /*반경 거리*/

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