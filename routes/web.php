<?php

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
})->name('top');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::get('orderInputForm', 'OrderController@orderInputForm')->name('orderInputForm.get');
    Route::post('orderInputConfirm', 'OrderController@orderInputConfirm')->name('orderInputConfirm.post');
    Route::post('orderInputStore', 'OrderController@store')->name('orderInputStore.post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('myResipes', 'OrderController@index')->name('myResipes.get');
    Route::get('myOrderShow/{id}', 'OrderController@show')->name('myOrderShow.get');
    Route::get('allOrderList', 'OrderController@orderIndex')->name('allOrderList.get');
    Route::get('allOrderShow/{id}', 'OrderController@orderShow')->name('allOrderShow.get');
});

Route::group(['middleware' => 'auth'],function () {
    Route::get('recipeInputForm/{id}', 'ProvideController@recipeInputForm')->name('recipeInputForm.get');
    Route::post('recipeInputConfirm/{id}','ProvideController@recipeInputConfirm')->name('recipeInputConfirm.post');
    Route::post('recipeInputStore/{id}', 'ProvideController@store')->name('recipeInputStore.post');
    Route::get('myResipesShow/{id}', 'ProvideController@myResipesShow')->name('myResipesShow.get');
    Route::get("myRecipeList/{id}", 'ProvideController@myRecipesIndex')->name('myRecipeList.get');
    Route::get('myRecipeShow/{id}', 'ProvideController@myRecipeShow')->name('myRecipeListShow.get');
    Route::get('myFavoriteResipesShow/{id}', 'ProvideController@myFavoriteResipesShow')->name('myFavoriteResipesShow.get');
});

Route::get("recipeList", 'ProvideController@recipesIndex')->name('recipeList.get');
Route::get('recipeListShow/{id}', 'ProvideController@recipeShow')->name('recipeListShow.get');

Route::group(['prefix' => 'recipes/{id}'], function () {
    Route::post('favorite', 'FavoriteController@store')->name('favorites.favorite');
    Route::delete('unfavorite', 'FavoriteController@destroy')->name('favorites.unfavorite');
    Route::get('favorites', 'UserController@favorites_list')->name('users.favorites');
});
