<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('list_students',[StudentController::class,'list']);

Route::get('save_students',[StudentController::class,'save']);