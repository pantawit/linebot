<?php
$access_token = 'NGAf6eK6YULSoa1ZvdkhxrdS5uqVInFZceWsoX/f22k8Bcs8RCaVP2LTubiiiEf4y09Qlikusj/HD69GvK9MVu3xC58+v0M8FKz8F7Vw28usKK2Mr8tGPDpQmf53Ea0JqTlXV0RKblrmGuSkD9ZYTAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

if (!function_exists('http_response_code'))
{
    function http_response_code($newcode = NULL)
    {
        static $code = 200;
        if($newcode !== NULL)
        {
            header('X-PHP-Response-Code: '.$newcode, true, $newcode);
            if(!headers_sent())
                $code = $newcode;
        }       
        return $code;
    }
}
>
