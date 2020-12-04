<?php

use Illuminate\Http\Request;
use App\Models\Job;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/user/{id}', ['middleware' => 'auth', function (Request $request, $id) {
//     return 'User: ' . $request->user();
// }]);

$router->get('/jobs', [function (Request $request) {
    return Job::all();
}]);

$router->post('jobs', 'JobController@store');
