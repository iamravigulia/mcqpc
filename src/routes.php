<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! Mcqpc';
// });

// Route::get('picmatch/test', 'EdgeWizz\Picmatch\Controllers\PicmatchController@test')->name('test');

Route::post('fmt/mcqpc/store', 'EdgeWizz\Mcqpc\Controllers\McqpcController@store')->name('fmt.mcqpc.store');

Route::post('fmt/mcqpc/update/{id}', 'EdgeWizz\Mcqpc\Controllers\McqpcController@update')->name('fmt.mcqpc.update');

Route::any('fmt/mcqpc/delete/{id}', 'EdgeWizz\Mcqpc\Controllers\McqpcController@delete')->name('fmt.mcqpc.delete');

Route::post('fmt/mcqpc/csv', 'EdgeWizz\Mcqpc\Controllers\McqpcController@csv')->name('fmt.mcqpc.csv');

Route::any('fmt/mcqpc/inactive/{id}',  'EdgeWizz\Mcqpc\Controllers\McqpcController@inactive')->name('fmt.mcqpc.inactive');
Route::any('fmt/mcqpc/active/{id}',  'EdgeWizz\Mcqpc\Controllers\McqpcController@active')->name('fmt.mcqpc.active');