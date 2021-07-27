<? 

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL,$_GET['pageUrl']);
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

$jsonData = (curl_exec($curlSession));
curl_close($curlSession);


echo $jsonData;

?>