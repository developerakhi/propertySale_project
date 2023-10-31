<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BackendControllers\BusinessSettingController;
use App\Http\Controllers\BackendControllers\CategoryController;
use App\Http\Controllers\BackendControllers\LocationController;
use App\Http\Controllers\BackendControllers\SizeController;
use App\Http\Controllers\BackendControllers\PropertyController;
use App\Http\Controllers\BackendControllers\CustomerQueryContoller;
use App\Http\Controllers\BackendControllers\PostAdController;
use App\Http\Controllers\BackendControllers\PlotVisitScheduleController;




Route::get('/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');

// Route::get('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'admin_logout'])->name('admin.logout');

Route::group(['namespace'=>'App\Http\Controllers\BackendControllers','middleware'=>'is_admin'], function(){
    Route::get('/admin/home', 'AdminController@dashboard')->name('admin.home');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

    //Business Settings
    Route::get('/admin/setting', 'BusinessSettingController@index')->name('business.index');
    Route::post('/admin/update', 'BusinessSettingController@update')->name('business.update');

    //Category
        Route::group(['prefix'=>'category'], function(){

            Route::get('/', 'CategoryController@index')->name('category.index');

            Route::post('/store', 'CategoryController@store')->name('category.store');

            Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit');

            Route::post('/update', 'CategoryController@update')->name('category.update');

            Route::get('/destory/{id}', 'CategoryController@destory')->name('category.destory');

        });

        //Location
        Route::group(['prefix'=>'location'], function(){

            Route::get('/', 'LocationController@index')->name('location.index');

            Route::post('/store', 'LocationController@store')->name('location.store');

            Route::get('/edit/{id}', 'LocationController@edit')->name('location.edit');

            Route::post('/update', 'LocationController@update')->name('location.update');

            Route::get('/destory/{id}', 'LocationController@destory')->name('location.destory');
            
            //Location Type
            Route::get('/type', 'LocationController@locationType')->name('type.index');
            Route::post('/store/type', 'LocationController@storeType')->name('storeType.store');
            Route::get('/editType/{id}', 'LocationController@editType')->name('editType.edit');
            Route::post('/update/type', 'LocationController@updateType')->name('updateType.update');
            Route::get('/destory/type/{id}', 'LocationController@destoryType')->name('destoryType.destory');
            
        });
        
        //Size
        Route::group(['prefix'=>'size'], function(){

            Route::get('/', 'SizeController@index')->name('size.index');

            Route::post('/store', 'SizeController@store')->name('size.store');

            Route::get('/edit/{id}', 'SizeController@edit')->name('size.edit');

            Route::post('/update', 'SizeController@update')->name('size.update');

            Route::get('/destory/{id}', 'SizeController@destory')->name('size.destory');
            
        });


        //Properties
        Route::group(['prefix'=>'property'], function(){

            Route::get('/', 'PropertyController@index')->name('property.index');

            Route::get('/create', 'PropertyController@create')->name('property.create');
            
            Route::post('/store', 'PropertyController@store')->name('property.store');

            Route::get('/edit/{id}', 'PropertyController@edit')->name('property.edit');
            
            Route::post('/update', 'PropertyController@update')->name('property.update');

            Route::get('/destory/{id}', 'PropertyController@destory')->name('property.destory');
            
        });
        
        //Customer Queries
        Route::group(['prefix'=>'customerqueries'], function(){

            Route::get('/', 'CustomerQueryContoller@index')->name('CustomerQuery.index');

            Route::get('/edit/{id}', 'CustomerQueryContoller@edit')->name('CustomerQuery.edit');
            
            Route::post('/update', 'CustomerQueryContoller@update')->name('CustomerQuery.update');

            Route::get('/destory/{id}', 'CustomerQueryContoller@destory')->name('CustomerQuery.destory');
            
        });
        
        //Post Ads
        Route::group(['prefix'=>'postads'], function(){

            Route::get('/', 'PostAdController@index')->name('postad.index');

            Route::get('/edit/{id}', 'PostAdController@edit')->name('AdQuery.edit');
            
            Route::get('/show-post-ad/{id}', 'PostAdController@show')->name('all_post_ad.show');
            
            Route::post('/update', 'PostAdController@update')->name('AdQuery.update');

            Route::get('/destory/{id}', 'PostAdController@destory')->name('AdQuery.destory');
            
        });
        
        //Plot Visit Schedule
        Route::group(['prefix'=>'plotvisit'], function(){

            Route::get('/', 'PlotVisitScheduleController@index')->name('plotvisit.index');

            Route::get('/edit/{id}', 'PlotVisitScheduleController@edit')->name('plotvisit.edit');
            
            Route::post('/update/{id}', 'PlotVisitScheduleController@update')->name('plotvisit.update');

            Route::get('/destory/{id}', 'PlotVisitScheduleController@destory')->name('plotvisit.destory');
            
        });
        
        
        
        //Global Route
        Route::get('/get-child-category/{id}','PropertyController@getChildCategory');
    
    });

        