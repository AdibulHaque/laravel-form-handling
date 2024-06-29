<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/loginform", "forms.login");
Route::view("/contact", "forms.contact");
Route::view("/form", "forms.form")->name("form.get");

Route::post("/handleform", [FormController::class, "handleFormSubmission"])->name("form.post");
