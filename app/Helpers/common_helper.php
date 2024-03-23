<?php

use App\Models\{Setting, SocialMediaLink};

if (!function_exists('getSettings')) {
    function getSettings(){
        return Setting::first();
    }
}

if (!function_exists('getSocialMediaLink')) {
    function getSocialMediaLink(){
        return SocialMediaLink::first();
    }
}

if (!function_exists('public_asset')) {
    function public_asset($path = ''){
        return asset('public/'.$path);
    }
}
?>
