<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\UserRequest;
use Illuminate\Support\Facades\Auth;

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

Route::get("/users", function() {
    $users = User::with(["requests"])->get();
    $userReqs = UserRequest::all();

    $data = [];
    $data["users"] = $users;
    $data["userReqs"] = $userReqs;
    $data["temp"] = "";
    //return $users;
    return view("users")->with("zzz", $data);
    //return view("users");
});

Route::get("/sandbox", [
    "uses" => "SandboxController@index"
]);

Route::get("/login", function() {
return view("login");
})->name("login");

Route::post("/authenticate", ["uses" => "LoginController@authenticate"]);

Route::get("/secretview", function() {
    echo(Auth::user());
})->middleware("auth");
