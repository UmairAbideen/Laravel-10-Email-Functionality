<?php

use App\Http\Controllers\AttechmentController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;



// mail1
Route::get('/mail1',[MailController::class,'mail1']);


// mail2
Route::get('/mail2',[MailController::class,'mail2'])->name('mail2');


// mail3
Route::get('/form1', function () {
return view('form1');
});
Route::post('/mail3',[MailController::class,'mail3'])->name('mail3');


// mail4
Route::get('/form2', function () {
    return view('form2');
    });
    Route::post('/mail4',[MailController::class,'mail4'])->name('mail4');

