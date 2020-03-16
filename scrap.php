<?php

$curl=curl_init();
/*https://m.media-amazon.com/images/I/71t58FV+qFL._AC_UY218_ML3_.jpg*/
/*https://www.amazon.in/s?k=php+books&ref=nb_sb_noss*/
$string_name="php books";
$url="https://www.amazon.in/s/field-keywords=$string_name";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($curl);
curl_close($curl);

?>