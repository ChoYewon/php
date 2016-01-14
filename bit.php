<?php
   header("Content-Type: text/html; charset=UTF-8");
   
   $url = $_GET['url'];

   $urls['nv'] = "http://www.naver.com/";
   $urls['fb'] = "http://www.facebook.com/";
   $urls['mr'] = "http://www.e-mirim.hs.kr/";
   $urls['and'] = "http://dev.android.com/";

   if(array_key_exists( $url, $urls )){
      header("Location: " . $urls[$url]);
      exit();
   }else{
      echo $url . "는 등록되어 있지 않습니다.";
   }
?>   
