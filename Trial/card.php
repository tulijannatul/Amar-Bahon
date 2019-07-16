<?php 
//example a google IP
$user_info = get_ip_info('74.125.224.72');
$google_info = get_google_data($user_info['latitude'],$user_info['longitude']);

$user = array_merge($user_info,$google_info);

//See below for result
print_r($user);

function get_google_data($long,$lat){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$long.','.$lat.'&sensor=true');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data,true);
}

function get_ip_info($ip = NULL){
    if(empty($ip)) $ip = $_SERVER['REMOTE_ADDR'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'http://www.ipaddresslocation.org/ip-address-locator.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,array('ip'=>$ip));
    $data = curl_exec($ch);
    curl_close($ch);
    preg_match_all('/<i>([a-z\s]+)\:<\/i>\s+<b>(.*)<\/b>/im',$data,$matches,PREG_SET_ORDER);
    if(count($matches)==0)return false;
    $return = array();
    $labels = array(
    'Hostname'          => 'host',
    'IP Country'        => 'country',
    'IP Country Code'   => 'country_code',
    'IP Continent'      => 'continent',
    'IP Region'         => 'region',
    'IP Latitude'       => 'latitude',
    'IP Longitude'      => 'longitude',
    'Organization'      => 'organization',
    'ISP Provider'      => 'isp');
    foreach($matches as $info){
        if(isset($info[2]) && !is_null($labels[$info[1]])){
            $return[$labels[$info[1]]]=$info[2];
        }
    }
    return (count($return))?$return:false;
}

?>