<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::get('/gallery', function () {
  return view('gallery', ['img_url' => 'img/foto bersama.jpg']);
});

// Route::get('/', function () {
//   return view('home');
// });
