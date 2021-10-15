<?php

namespace App\Helpers;

class Helper
{
    public static function sendCurl($url, $xml_data='') {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Gateway-APIKey: '.config('app.API_KEY')));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_TIMEOUT,13);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,78);

        $output = curl_exec($ch);
        $info = curl_getinfo($ch);

        //dd($output,$info);

        if ($output === false || $info['http_code'] != 200) {
            $output = "No cURL data returned for $url [" . $info['http_code'] . "]";
            if (curl_error($ch)) {
                $output .= "\n" . curl_error($ch);
            }
        }
        curl_close($ch);
        return $output;
    }
}
