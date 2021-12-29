<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function (Request $request) {
//    $ch = curl_init ( $request->url );
//    curl_setopt( $ch , CURLOPT_HEADER, 0);
//    curl_setopt( $ch , CURLOPT_RETURNTRANSFER, 1);
//    $raw=curl_exec( $ch );
//    curl_close ( $ch );

//     Load the file contents into a variable.
    $contents = file_get_contents($request->url);

// Save the variable as `google.html` file onto
// your local drive, most probably at `your_laravel_project/storage/app/`
// path (as per default Laravel storage config)
    Storage::disk('local')->put('blah.pdf', $contents);
//
// -- Here your have saved the file from the URL
// -- to your local Laravel storage folder on your server.
// -- By default this is `your-laravel-project/storage/app` folder.
//
// Now, if desired, and if you are doing this within a web application's
// HTTP request (as opposite to CLI application)
// the file can be sent to the browser (client) with the response
// that instructs the browser to download the file at client side:
//
// Get the file path within you local filesystem
    $path = storage_path('app/blah.pdf');

// Return HTTP response to a client that initiates the file download
    return response()->download($path);
//    return $request->url;
//    $output_filename = storage_path("test_file.pdf");
//
//    $host = $request->url;
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, $host);
//    curl_setopt($ch, CURLOPT_VERBOSE, 1);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_AUTOREFERER, false);
//    curl_setopt($ch, CURLOPT_REFERER, "");
//    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
////    curl_setopt($ch, CURLOPT_FOLLOWLOCATION , true);
//    $result = curl_exec($ch);
//    curl_close($ch);
//
//    print_r($result); // prints the contents of the collected file before writing..
//
//
//    // the following lines write the contents to a file in the same directory (provided permissions etc)
//    $fp = fopen($output_filename, 'w');
//    fwrite($fp, $result);
//    fclose($fp);
//
//    return response()->download($result);
});

