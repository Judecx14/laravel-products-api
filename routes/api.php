<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    include 'api/v1/user.php';
    include 'api/v1/products.php';
});