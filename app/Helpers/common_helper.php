<?php

use App\Models\{Setting, SocialMediaLink};
use Illuminate\Support\Facades\{Route};

/**
 * Retrieve the application settings.
 *
 * @return \App\Models\Setting|null The first instance of the Setting model, or null if none found.
 */
if (!function_exists('getSettings')) {
    function getSettings()
    {
        return Setting::first();
    }
}

/**
 * Retrieve the first social media link from the database.
 *
 * @return \App\Models\SocialMediaLink|null
 */
if (!function_exists('getSocialMediaLink')) {
    function getSocialMediaLink()
    {
        return SocialMediaLink::first();
    }
}

if (!function_exists('deletePublicPathFiles')) {
    function deletePublicPathFiles($path){
        // Delete the image file from the public/uploads directory
        if (file_exists($path)) {
            unlink($path);
        }
    }
}

/**
 * Generate a URL for an asset using the public directory.
 *
 * @param  string  $path
 * @return string
 */
if (!function_exists('public_asset')) {
    function public_asset($path = '')
    {
        return asset('public/' . $path);
    }
}

/**
 * printArray function
 *
 * This function takes any number of arguments and prints their contents using print_r within a <pre> tag.
 * It is intended to be used for debugging purposes to display the structure of variables or arrays.
 *
 * @param mixed ...$params Any number of parameters to be printed using print_r.
 * @return void This function does not return anything. It simply outputs the content to the browser.
 */
if (!function_exists('printArray')) {
    function printArray()
    {
        $params = func_get_args();

        echo "<pre>";
        foreach ($params as $p) {
            print_r($p);
        }
        echo "</pre>";
        die;
    }
}

/**
 * Return a standardized web response.
 *
 * @param string $status   The status of the response ('error', 'success', etc.).
 * @param string $message  A message accompanying the response.
 * @param mixed  $data     Additional data to be included in the response.
 *
 * @return array           An array representing the web response.
 */
if (!function_exists('returnWebResponse')) {
    function returnWebResponse($status = 'error', $message = null, $data = null)
    {
        return array(
            'status' => $status,
            'message' => $message,
            'data' => $data
        );
    }
}

/**
 * Check if the current route matches the given route(s) and return the specified output if true.
 *
 * @param string|array $route The route name or array of route names to check against.
 * @param string $output The output to return if the route matches (default: 'active').
 * @return string|null Returns the specified output if the route matches, otherwise null.
 */
if (!function_exists('isActiveRoute')) {
    function isActiveRoute($route, $output = 'active')
    {
        // Check if the provided route parameter is an array
        if (is_array($route)) {
            // If it's an array, check if the current route name exists in the array
            if (in_array(Route::currentRouteName(), $route)) {
                return $output; // Return the specified output if the route matches
            }
        } else {
            // If the provided route parameter is a string, check if the current route name matches
            if (Route::currentRouteName() == $route) {
                return $output; // Return the specified output if the route matches
            }
        }
        // Return null if the current route doesn't match the provided route(s)
        return null;
    }
}

/**
 * Delete public files or an array of public files.
 *
 * @param string|array $paths The file path or an array of file paths to delete.
 *
 * @return void
 */
function deletePublicFiles($paths)
{
    if (is_array($paths)) {
        // If $paths is an array, delete each file
        foreach ($paths as $path) {
            $fileToDelete = public_path($path);
            if (file_exists($fileToDelete)) {
                unlink($fileToDelete);
            }
        }
    } else {
        // If $paths is a string, delete the single file
        $fileToDelete = public_path($paths);
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
        }
    }
}
