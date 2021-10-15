<?php

namespace App\Http\Controllers;


use App\Helpers\Helper;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public static function getCategory()
    {
        $response_jon = Helper::sendCurl(config('app.API_LINK').config('app.CATEGORY_LINK'));
        $response = json_decode($response_jon);

        dd($response_jon,$response);
        return $response;
    }

    public static function getProduct()
    {
        $response_jon = Helper::sendCurl(config('app.API_LINK').config('app.PRODUCT_LINK'));
        $response = json_decode($response_jon);

        dd($response_jon,$response);
        return $response;
    }
}
