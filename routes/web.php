<?php

#Font-End Panel

Route::get('/','GeneralController@index');
Route::get('/about-us','GeneralController@about_us');
Route::get('/contact-us','GeneralController@contact_us');
Route::get('/our-clients','GeneralController@our_client');
Route::get('/our-partners','GeneralController@our_partner');
Route::get('/products','GeneralController@products');
Route::get('/services','GeneralController@services');
//Route::get('/commercial','GeneralController@commercial');
//Route::get('/residential','GeneralController@residential');



Auth::routes();

#Admin Panel
Route::get('/home', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::post('/login-check', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');
Route::get('/admin-home', 'HomeController@index');

# Category panel
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/show', 'CategoryController@show');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/update', 'CategoryController@update');
Route::get('/category/destroy/{id}', 'CategoryController@destroy');

# Product Panel
Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');
Route::get('/product/show', 'ProductController@show');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update', 'ProductController@update');
Route::get('/product/destroy/{id}', 'ProductController@destroy');

# Feature Panel
Route::get('/feature/create', 'FeatureController@create');
Route::post('/feature/store', 'FeatureController@store');
Route::get('/feature/show', 'FeatureController@show');
Route::get('/feature/edit/{id}', 'FeatureController@edit');
Route::post('/feature/update', 'FeatureController@update');
Route::get('/feature/destroy/{id}', 'FeatureController@destroy');

# About Info Panel
Route::get('/about-info/create', 'AboutUsController@create');
Route::post('/about-info/store', 'AboutUsController@store');
Route::get('/about-info/show', 'AboutUsController@show');
Route::get('/about-info/edit/{id}', 'AboutUsController@edit');
Route::post('/about-info/update', 'AboutUsController@update');
Route::get('/about-info/destroy/{id}', 'AboutUsController@destroy');

# Service panel
Route::get('/service/create', 'ServiceController@create');
Route::post('/service/store', 'ServiceController@store');
Route::get('/service/show', 'ServiceController@show');
Route::get('/service/edit/{id}', 'ServiceController@edit');
Route::post('/service/update', 'ServiceController@update');
Route::get('/service/destroy/{id}', 'ServiceController@destroy');

# Company Info Panel
Route::get('/company-info/create', 'CompanyController@create');
Route::post('/company-info/store', 'CompanyController@store');
Route::get('/company-info/show', 'CompanyController@show');
Route::get('/company-info/edit/{id}', 'CompanyController@edit');
Route::post('/company-info/update', 'CompanyController@update');
Route::get('/company-info/destroy/{id}', 'CompanyController@destroy');

# summernote
Route::get('/index', 'SummernoteController@index');
Route::get('/summernote', 'SummernoteController@index');

Route::post('/summernote', 'SummernoteController@store')->name('summernotePostSave');
Route::get('/summernote_display', 'SummernoteController@show')->name('summernoteDispay');

//Settings
Route::get('/settings', 'SettingsController@show');
Route::post('/setting/update', 'SettingsController@update');

//User
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/show', 'UserController@show');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update', 'UserController@update');
Route::get('/user/destroy/{id}', 'UserController@destroy');
