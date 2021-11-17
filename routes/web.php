<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventManagement;

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/register-member', 'HomeController@registerMember')->name('register.member');
Route::get('/calendar-gdsc', 'HomeController@calendargdsc')->name('calendar.gdsc');
Route::prefix('events')->group(function () {
	Route::get('/qep', 'EventManagementController@qep')->name('event.qep');
	Route::post('/qep', 'EventManagementController@qepStore')->name('event.qep.store');
});
Route::prefix('ascore')->group(function () {
	Route::get('/faculty', 'HomeController@faculty')->name('faculty');
	Route::get('/media-creative', 'HomeController@media')->name('media');
	Route::get('/partnership', 'HomeController@partnership')->name('partnership');
	Route::get('/technical', 'HomeController@technical')->name('technical');
});


Route::get('/home', function () {
	if (session('status')) {
		return redirect()->route('admin.home')->with('status', session('status'));
	}

	return redirect()->route('admin.home');
});

Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'HomeController@index')->name('home');
	// Permissions
	Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
	Route::resource('permissions', 'PermissionsController');

	// Roles
	Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
	Route::resource('roles', 'RolesController');

	// Users
	Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
	Route::resource('users', 'UsersController');

	// Venues
	Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
	Route::resource('venues', 'VenuesController');

	// Events
	Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
	Route::resource('events', 'EventsController');

	// Meetings
	Route::delete('meetings/destroy', 'MeetingsController@massDestroy')->name('meetings.massDestroy');
	Route::resource('meetings', 'EventManagement');

	// Meetings
	Route::delete('event-management/destroy/{event_management}', 'EventManagementAdmin@destroy')->name('eventmanagement.destroy');
	Route::resource('event-management', 'EventManagementAdmin');

	Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
});
