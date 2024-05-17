<?php
 
 $curl = curl_init();
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.aiforthai.in.th/ssense?text=สาขานี้พนักงานน่ารักให้บริการดี",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "Apikey: NUCyyo4koUbIFFkqxYehuyB4YSJsxFEP"
   )
 ));
  
 $response = curl_exec($curl);
 $err = curl_error($curl);
  
 curl_close($curl);
  
 if ($err) {
   echo "cURL Error #:" . $err;
 } else {
   echo $response;
 }
 ?>
  
 POST
 <?php
  
 $curl = curl_init();
  
 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.aiforthai.in.th/ssense",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_SSL_VERIFYPEER => FALSE,
   //CURLOPT_SSL_VERIFYHOST => 2,
   CURLOPT_POSTFIELDS => "text=สาขานี้พนักงานน่ารักให้บริการดี",
   CURLOPT_HTTPHEADER => array(
     "Content-Type: application/x-www-form-urlencoded",
     "Apikey: NUCyyo4koUbIFFkqxYehuyB4YSJsxFEP"
   )
 ));
  
 $response = curl_exec($curl);
 $err = curl_error($curl);
  
 curl_close($curl);
  
 if ($err) {
   echo "cURL Error #:" . $err;
 } else {
   echo $response;
 }
 ?>