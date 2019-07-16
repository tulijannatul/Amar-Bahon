<?php
include_once('geoip.inc');

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$ip = getUserIP();

/*
test if $ip is v4 or v6 and assign appropriate .dat file in $gi
run appropriate function geoip_country_code_by_addr() vs geoip_country_code_by_addr_v6()   
*/
if((strpos($ip, ":") === false)) {
    //ipv4
    $gi = geoip_open("/usr/share/GeoIP/GeoIP1.dat",GEOIP_STANDARD);
    $country = geoip_country_code_by_addr($gi, $ip);
}
else {
    //ipv6
    $gi = geoip_open("/usr/share/GeoIP/GeoIPv6.dat",GEOIP_STANDARD);
    $country = geoip_country_code_by_addr_v6($gi, $ip);
}
echo $ip . "<br>" . $country;


 ?>