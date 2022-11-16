<?php

use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\ThemeSettingController;
use App\Models\ThemeSetting;
use Database\Seeders\GeneralSettingSeeder;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('test-url', function(){
    return "hello jahin";
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    //Contact
    Route::resource('contact', ContactController::class);
    Route::get('contact-date-filter', [ContactController::class, 'date_filter'])->name('contact.date.filter');
    Route::get('contact/{page}', [ContactController::class, 'pagination'])->name('contact.pagination');
    Route::get('contact-search', [ContactController::class, 'search'])->name('contact.search');

    //Mail
    Route::get('mail',[MailController::class, 'index'])->name('mail.index');
    Route::get('mail/inbox',[MailController::class, 'inbox'])->name('mail.inbox');
    Route::get('mail/mail_details',[MailController::class, 'mail_details'])->name('mail.details');
    Route::post('mail/compose', [MailController::class, 'mail_compose'])->name('mail.compose');


    //General Setting
    Route::get('general-settings', [GeneralSettingController::class, 'index'])->name('general.setting.index');
    Route::post('general-settings/update/{id}', [GeneralSettingController::class, 'index_update'])->name('general.setting.update');

    //Theme Settings
    Route::get('theme/setting', [ThemeSettingController::class, 'themesetting'])->name('theme.setting');
    Route::get('theme/setting', [ThemeSettingController::class, 'themesetting'])->name('theme.setting');
});
