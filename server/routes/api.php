<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all employees
Route::get('employees', '\App\Http\Controllers\EmployeeController@getEmployee');

// Get detailed information about a specific employee
Route::get('employee/{id}', '\App\Http\Controllers\EmployeeController@getEmployeeById');

// Add Employee
Route::post('addEmployee', '\App\Http\Controllers\EmployeeController@addEmployee');

// Update Employee
Route::put('updateEmployee/{id}', '\App\Http\Controllers\EmployeeController@updateEmployee');

// Delete Employee
Route::delete('deleteEmployee/{id}', '\App\Http\Controllers\EmployeeController@deleteEmployee');
