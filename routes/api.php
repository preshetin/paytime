<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/paytime', function (Request $request) {

    $string = $request->text;
    $username = $request->user_name;

    $all = json_encode($request->all());

    return [
        'text' => "Parsing string: '$string' from $username",
        'attachments' => [
            [
                'image_url' => 'https://www.dropbox.com/s/t6aq46a2y1a68rw/payout-delay.png?dl=0&raw=1'
            ]
        ]
    ];
});
