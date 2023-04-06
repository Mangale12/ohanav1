<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeBannerController;

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
Auth::routes([
    'register' => false, // Registration Routes...
    'verify' => false, // Email Verification Routes...
    'reset' => false
]);

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Session::flush();

});
Route::post('/suscribe','App\Http\Controllers\frontend\siteController@suscribe');
Route::get('admin/change-password','App\Http\Controllers\Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password','App\Http\Controllers\Auth\ChangePasswordController@changepassword')->name('password.update');


//FontEnd Routes
Route::get('canvas', function () {
    dd('canvas');
    return view('frontend.canvas_animation');
});
Route::get('/', 'App\Http\Controllers\frontend\siteController@index')->name('home');
Route::get('/contact','App\Http\Controllers\frontend\siteController@contact')->name('contact');
Route::get('/service','App\Http\Controllers\frontend\siteController@service')->name('contact');
Route::get('/error', 'App\Http\Controllers\frontend\siteController@error')->name('error');
Route::get('/about', 'App\Http\Controllers\frontend\siteController@about')->name('about');
Route::get('/convert', 'App\Http\Controllers\frontend\siteController@convert')->name('convert');
Route::get('/projects', 'App\Http\Controllers\frontend\siteController@project')->name('project');
Route::get('/projectdetail/{id}', 'App\Http\Controllers\frontend\siteController@projectdetail')->name('projectdetail');
Route::post('/message/create','App\Http\Controllers\MessageController@store');
Route::get('/portfolio', 'App\Http\Controllers\frontend\siteController@portfolio')->name('portfolio');
Route::get('/blog', 'App\Http\Controllers\frontend\siteController@blog')->name('blog');
Route::get('/blog/cat/{id}', 'App\Http\Controllers\frontend\siteController@blogcat')->name('blogcat');
Route::get('/blog/{id}', 'App\Http\Controllers\fronend\siteController@readblog')->name('readblog');
Route::get('/history', 'App\Http\Controllers\frontend\siteController@history')->name('history');
Route::get('/career', 'App\Http\Controllers\frontend\siteController@career')->name('career');
Route::get('/faq', 'App\Http\Controllers\frontend\siteController@faq')->name('faq');
Route::get('/termsandcondition', 'App\Http\Controllers\frontend\siteController@termsandcondition')->name('termsandcondition');
Route::get('/partnership', 'App\Http\Controllers\frontend\siteController@partnership')->name('partnership');
Route::get('/viewpartner/{id}', 'App\Http\Controllers\frontend\siteController@viewpartner')->name('viewpartner');
Route::get('/leadership', 'App\Http\Controllers\frontend\siteController@leadership')->name('leadership');


Route::get('/home', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@index'])->name('home');
Route::get('/admin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@index'])->name('admin');

Route::get('/register', ['middleware' => 'auth', 'uses'=>'App\Http\Controllers\adminController@register'])->name('register');

Route::get('/login', [App\Http\Controllers\adminController::class,'login'])->name('login');

Route::get('/logout', ['middleware' => 'auth', 'uses'=>'App\Http\Controllers\adminController@logout'])->name('logout');

Route::post('/addadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@addadmin']);


//Projects Routes
Route::post('admin/addproject', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@store'])->name('storeproject');
Route::get('admin/addProject', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@addproject'])->name('addproject');
Route::get('admin/allProjects', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@index'])->name('viewproject');
Route::get('admin/viewprojectid/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@viewprojectid'])->name('viewprojectid');
Route::get('admin/editproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@editproject'])->name('editproject');
Route::post('admin/updateproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@updateproject'])->name('updateproject');
Route::delete('admin/deleteproject/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\projectController@deleteproject'])->name('deleteproject');



Route::get('/viewusers', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@viewusers']);



//Team Members/Users Routes
Route::get('admin/viewTeams', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@index'])->name('viewteams');
Route::get('admin/addTeam', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@addteam'])->name('addteam');
Route::post('admin/addteammember',['middleware' => 'auth', 'uses'=>'App\Http\Controllers\teamController@store'])->name('addteammember');
Route::get('admin/editteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@editteam'])->name('editteam');
Route::post('admin/updateteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@updateteam'])->name('updateteam');
Route::delete('admin/deleteteam/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\teamController@deleteteam'])->name('deleteteam');



//Message Routes
Route::get('admin/viewMails', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@index'])->name('viewmessages');
Route::post('admin/createMails','App\Http\Controllers\messageController@store')->name('createmessage');
Route::delete('admin/deleteMails/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@deletemessage'])->name('deletemessage');
Route::get('admin/viewMails/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\messageController@viewamessage'])->name('viewamessage');



//Partner Routes
Route::get('admin/viewPartners', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@index'])->name('viewpartners');
Route::get('admin/addPartners', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@create']);
Route::post('admin/storepartner', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@store'])->name('storepartner');
Route::get('admin/editpartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@editpartner'])->name('editpartner');
Route::post('admin/updatepartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@update'])->name('updatepartner');
Route::delete('admin/deletepartner/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\partnerController@deletepartner'])->name('deletepartner');


//Admin Routes
Route::get('admin/viewAdmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@viewadmin'])->name('viewadmin');
Route::get('admin/addAdmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@addadmin']);
Route::post('admin/addadmin', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@storeadmin'])->name('storeadmin');
Route::delete('admin/deleteAdmin/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@deleteadmin'])->name('deleteadmin');



//Blog Post Routes
Route::get('admin/viewBlogs',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@index'])->name('viewblogs');
Route::get('admin/addBlog',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@add'])->name('addblog');
Route::post('admin/storeBlog',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@store'])->name('storeblog');
Route::get('admin/editBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@edit'])->name('editblog');
Route::post('admin/updateBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@update'])->name('updateblog');
Route::delete('admin/deleteBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@delete'])->name('deleteblog');


//Blog Category Routes
Route::get('admin/blogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@allcategory'])->name('blogcategory');
Route::get('admin/addBlogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@addblogcategory'])->name('addblogcategory');
Route::get('admin/blogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@editcategory'])->name('editcategory');
Route::delete('admin/deleteBlogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@deletecategory'])->name('deleteblogcategory');
Route::post('admin/storeBlogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@storecategory'])->name('storeblogcategory');
Route::post('admin/updateBlogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\blogController@updatecategory'])->name('updateblogcategory');


//Settings Routes
Route::get('admin/settings', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@getSettings'])->name('adminSettings');
Route::post('admin/updateSettings',['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@updateSettings'])->name('updateSettings');

//suscribe
Route::get('/suscribe/view', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@suscriveview']);


//About page Routes
Route::get('admin/about', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@getAbout'])->name('adminAbout');
Route::get('admin/editAbout', ['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@editAbout'])->name('editAbout');
Route::post('admin/updateAbout',['middleware' => 'auth','uses'=>'App\Http\Controllers\adminController@updateAbout'])->name('updateAbout');


//Sliders Routes
Route::get('admin/sliders', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@index'])->name('slider');
Route::get('admin/addsliders', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@addslider'])->name('addslider');
Route::post('admin/storeslider', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@store'])->name('storeslider');
Route::delete('admin/deleteslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@deleteslider'])->name('deleteslider');
Route::get('admin/editslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@editslider'])->name('editslider');
Route::post('admin/updateslider/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\sliderController@updateslider'])->name('updateslider');



//Advisor Routes
Route::get('admin/advisor', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@index'])->name('advisor');
Route::get('admin/addAdvisor', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@addAdvisor'])->name('addAdvisor');
Route::post('admin/storeAdvisor', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@storeAdvisor'])->name('storeAdvisor');
Route::delete('admin/deleteAdvisor/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@deleteAdvisor'])->name('deleteAdvisor');
Route::get('admin/editAdvisor/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@editAdvisor'])->name('editAdvisor');
Route::post('admin/updateAdvisor/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\advisorController@updateAdvisor'])->name('updateAdvisor');


//Service Routes
Route::get('admin/services', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@index'])->name('services');
Route::get('admin/addService', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@addService'])->name('addService');
Route::post('admin/storeService', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@storeService'])->name('storeService');
Route::delete('admin/deleteService/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@deleteService'])->name('deleteService');
Route::get('admin/editService/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@editService'])->name('editService');
Route::post('admin/updateService/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\serviceController@updateService'])->name('updateService');


//Board Of Directors
Route::get('admin/boardOfDirectors', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@index'])->name('boardOfDirectors');
Route::get('admin/addBoardOfDirector', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@addBoardOfDirector'])->name('addBoardOfDirector');
Route::post('admin/storeBoardOfDirector', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@storeBoardOfDirector'])->name('storeBoardOfDirector');
Route::delete('admin/deleteBoardOfDirector/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@deleteBoardOfDirector'])->name('deleteBoardOfDirector');
Route::get('admin/editBoardOfDirector/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@editBoardOfDirector'])->name('editBoardOfDirector');
Route::post('admin/updateBoardOfDirector/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\boardController@updateBoardOfDirector'])->name('updateBoardOfDirector');


//Portfolio Routes
Route::get('admin/managePortfolio', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@index'])->name('managePortfolio');
Route::get('admin/addPortfolio', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@addPortfolio'])->name('addPortfolio');
Route::post('admin/storePortfolio', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@storePortfolio'])->name('storePortfolio');
Route::delete('admin/deletePortfolio/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@deletePortfolio'])->name('deletePortfolio');
Route::get('admin/editPortfolio/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@editPortfolio'])->name('editPortfolio');
Route::post('admin/updatePortfolio/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@updatePortfolio'])->name('updatePortfolio');


//Objective Routes
Route::get('admin/viewObjective', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@objectives'])->name('objectives');
Route::get('admin/addObjective', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@addObjective'])->name('addObjective');
Route::post('admin/storeObjective', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@storeObjective'])->name('storeObjective');
Route::delete('admin/deleteObjective/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@deleteObjective'])->name('deleteObjective');
Route::get('admin/editObjective/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@editObjective'])->name('editObjective');
Route::post('admin/updateObjective/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\portfolioController@updateObjective'])->name('updateObjective');


//History Routes
Route::get('admin/companyHistory', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@index'])->name('companyHistory');
Route::get('admin/addHistory', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@addHistory'])->name('addHistory');
Route::post('admin/storeHistory', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@storeHistory'])->name('storeHistory');
Route::delete('admin/deleteHistory/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@deleteHistory'])->name('deleteHistory');
Route::get('admin/editHistory/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@editHistory'])->name('editHistory');
Route::post('admin/updateHistory/{id}', ['middleware' => 'auth','uses'=>'App\Http\Controllers\historyController@updateHistory'])->name('updateHistory');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    //Home banner
    Route::get('homebanner/index',[HomeBannerController::class,'index'])->name('homebanner.index');
    Route::patch('homebanner/index',[HomeBannerController::class,'update'])->name('homebanner.update');

    // Our Service
    Route::resource('our-services', OurServiceController::class);
    Route::get('our-service/status',[OurServiceController::class, 'status'])->name('our-service.status');
});


