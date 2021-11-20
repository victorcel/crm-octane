<?php

    use Illuminate\Support\Facades\Route;
    use Laravel\Octane\Facades\Octane;
    use Symfony\Component\HttpFoundation\Response;

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

    Octane::route("GET", "/prueba", fn() => new Response("COn golang")
    );
