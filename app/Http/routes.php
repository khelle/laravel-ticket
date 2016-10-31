<?php

Route::get('/login', 'Auth\AuthController@showLoginForm');
Route::post('/login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/', 'TicketsController@showTicketsForm');

Route::group([ 'prefix' => 'api' ], function()
{
    Route::post('/tickets', 'TicketsController@storeTicket');
    Route::post('/tickets/redeem', 'TicketsController@redeemTicket');
});
