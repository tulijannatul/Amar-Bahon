<?php
  
  class geo
  {
    protected $api = 'http://www.telize.com/geoip/%s' ;

    protected $properties = [];

    public function __get($key)
    {
    	if(isset($this->properties[$key])){
    		return $this->properties[$key];
    	}

    	return null;
    }

    public function request($ip)
    {
    	$url = sprintf($this->api, $ip);
    	$data = $this->sendRequest($url);

    	$this->properties = json_decode($data, true);


    }

    protected function sendRequest($url)
    {
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_RETTURNTRANSFER, true);
    	curl_setopt($curl, CURLOPT_URL, $url);

    	return curl_exec($curl);
    }
  }
?>