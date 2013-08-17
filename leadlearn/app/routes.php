<?php

Route::get('/', function()
{
    return View::make('landing_page');
});

Route::get('tables', function() {
	return View::make('tables');
});

Route::get('attendance', function() {
	return View::make('attendance');
});