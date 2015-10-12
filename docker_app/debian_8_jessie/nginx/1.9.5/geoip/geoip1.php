<html>
<head>
 <title>What is my IP address - determine or retrieve my IP address</title>
</head>
<body>
<?php
    if (getenv(HTTP_X_FORWARDED_FOR)) {
        $pipaddress = getenv(HTTP_X_FORWARDED_FOR);
        $ipaddress = getenv(REMOTE_ADDR);
        echo "<br>Your Proxy IP address is : ".$pipaddress. " (via $ipaddress) " ;
    } else {
        $ipaddress = getenv(REMOTE_ADDR);
        echo "<br>Your IP address is : $ipaddress";
    }
  $geoip_city_country_code = getenv(GEOIP_CITY_COUNTRY_CODE);
  $geoip_city_country_code3 = getenv(GEOIP_CITY_COUNTRY_CODE3);
  $geoip_city_country_name = getenv(GEOIP_CITY_COUNTRY_NAME);
  $geoip_region = getenv(GEOIP_REGION);
  $geoip_city = getenv(GEOIP_CITY);
  $geoip_postal_code = getenv(GEOIP_POSTAL_CODE);
  $geoip_city_continent_code = getenv(GEOIP_CITY_CONTINENT_CODE);
  $geoip_latitude = getenv(GEOIP_LATITUDE);
  $geoip_longitude = getenv(GEOIP_LONGITUDE);
  echo "<br>Country : $geoip_city_country_name ( $geoip_city_country_code3 , $geoip_city_country_code ) ";
  echo "<br>Region :  $geoip_region";
  echo "<br>City :  $geoip_city ";
  echo "<br>Postal code :  $geoip_postal_code";
  echo "<br>City continent code :  $geoip_city_continent_code";
  echo "<br>Geoip latitude :  $geoip_latitude ";
  echo "<br>Geoip longitude :   $geoip_longitude ";
 
?>
</body>
</html>
