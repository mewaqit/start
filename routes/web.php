<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\UserController;
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
use \Barryvdh\Debugbar\Facades\Debugbar;
Route::get('/', function () {
    /*
    dd(config('services.mailgun.domain'));
    Debugbar::info("Hello!");

    Debugbar::startMeasure('render','Time for rendering');
    Debugbar::stopMeasure('render');
    Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
    Debugbar::measure('My long operation', function() {
        // Do something…
    });
*/
    return view('welcome');
});

// ROUTE START

// How to send and catch one parameter in route!
Route::get("/posts/{id}", function($id){
    return "This is Post: ". $id;
});

// How to send and catch multiple parameters in route!
Route::get("/posts/{id}/{name}", function($id, $name){
    return "This is Post: " . $id . " with Name: ". $name ;
});

// Naming the route - later checking by php artisan route:list
Route::get("/admin/posts/example", array("as"=>"admin.home",function(){
    $url = route("admin.home");
    return $url;
}));

// [Another Way][Recommended Way] Naming the route - later checking by php artisan route:list
Route::get('/sys/profile', function () {
    return "This is system Profile!";
})->name('profile');

// Optional Parameter with Default NULL
Route::get('/user/{name?}', function ($name = null) {
    return "Sent Name was: ". $name;
});

// Optional Parameter with Default Value
Route::get('/user/{name?}', function ($name = 'John') {
    return "Sent Name was: ". $name;
});

// Regular Expression Constraints
Route::get('/users/{name}', function ($name) {
    return "Sent Name was: ". $name;
})->where('name', '[A-Za-z]+');

// Regular Expression Constraints
Route::get('/users/{id}', function ($id) {
    return "Sent ID was: ". $id;
})->where('id', '[0-9]+');

// Regular Expression Constraints
Route::get('/users/{id}/{name}', function ($id, $name) {
    return "Sent Name was: ". $name . " and ID was: ". $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Regular Expression Constraints
Route::get('/userr/{id}/{name}', function ($id, $name) {
    return "Sent Name was: ". $name . " and ID was: ". $id;
})->whereNumber('id')->whereAlpha('name');

// Regular Expression Constraints
Route::get('/userr/{name}', function ($name) {
    return "Sent Name was: ". $name;
})->whereAlphaNumeric('name');

// Regular Expression Constraints
Route::get('/userr/{id}', function ($id) {
    return "Sent ID was: ". $id;
})->whereUuid('id');

// Regular Expression Constraints
Route::get('/category/{category}', function ($category) {
    return "Sent Category was: ". $category;
})->whereIn('category', ['movie', 'song', 'painting']);


/**
 *
 * Global Constraints
 * If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method.
 * You should define these patterns in the boot method of your App\Providers\RouteServiceProvider class:
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void

public function boot()
{
    Route::pattern('id', '[0-9]+');
}

// Once the pattern has been defined, it is automatically applied to all routes using that parameter name:

Route::get('/userd/{id}', function ($id) {
    return "Sent ID was: ". $id;
});
 */

/*

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');

return to_route('profile');

 */

//Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "This is Prefix example, put as many routes here to prefix as you like!";
    });
});

// Fallback Route
Route::fallback(function () {
    return "404";
});

//FOR DETAILS
//https://laravel.com/docs/9.x/routing

// ROUTE END



// ROUTE & CONTROLLERS START


// Calling controller function from the Routes
Route::get("/posts","\App\Http\Controllers\SecondController@index");

// Passing parameters to controller from the route
Route::get("/posts/{id}","\App\Http\Controllers\SecondController@show");

// Resource method in routes for Controller
Route::resource("/reposts", "\App\Http\Controllers\SecondController");


// OR USE CONTROLLER NAMESPACE & CALL ITS FUNCTION
use App\Http\Controllers\SecondController;
Route::get('/check', [SecondController::class, 'index']);

// ROUTE & CONTROLLERS END


// ROUTE & CONTROLLERS & Views START
Route::get("/contact",[SecondController::class, 'contact']);

Route::get("/channels",[ChannelController::class, 'list']);

Route::get("/posts", [PostController::class, 'options']);

// ROUTE & CONTROLLERS & Views END

// ELOQUENT RELATIONSHIPS START

Route::get("/showemp",[EmployeeController::class,'index']);

Route::get("/showemp_projects",[EmployeeController::class,'show_projects']);

Route::get("/showuser_projects",[UserController::class,'index']);

// ELOQUENT RELATIONSHIPS END

//New Work
