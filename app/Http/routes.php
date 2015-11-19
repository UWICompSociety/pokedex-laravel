<?php

use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	// 1. Publish event with Redis
	
	$data = [
		'event' => 'UserSignedUp',
		'data' => [
			'username' => 'JohnDoe'
		]
	];

	// channel built in on redis
	Redis::publish('test-channel', json_encode($data));

	reu
	// 2. Node.js + Redis subscribes to the event
	// 3. Use socket.io to emit to all clients
	// Redis::set('name', 'shane');
	// return Redis::get('name');
    // return view('welcome');
});


