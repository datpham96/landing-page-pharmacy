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
//login
Route::get('/login', 'User\LoginCtrl@getLogin')->name('login')->middleware('guest');
Route::post('/login', 'User\LoginCtrl@postLogin')->name('postLogin')->middleware('guest');
Route::get('/logout', 'User\LoginCtrl@logout')->name('logout');

//admin
Route::group(['prefix' => '/admin', 'middleware'=> ['web', 'auth']], function () {

	//user
	Route::get("/userInfo", "Backend\User\UserCtrl@userInfo")->name('userInfo');

	//category
	Route::get("/categorys", "Backend\Category\CategoryCtrl@categorys")->name('categorys');

	//link
	Route::get("/links", "Backend\Links\LinksCtrl@links")->name('links');

	//post
	Route::get("/posts", "Backend\Posts\PostsCtrl@main")->name('posts');
	Route::get("/mainPosts", "Backend\Posts\PostsCtrl@posts")->name('mainPosts');
	Route::get("/postDetail", "Backend\Posts\PostsCtrl@postDetail")->name('postDetail');

	//baner
	Route::get("/banner", "Backend\Banner\BannerCtrl@banner")->name('banner');

	//layer
	Route::get("/layer/one", "Backend\Layer\LayerCtrl@layerOne")->name('layerOne');
	Route::get("/layer/two", "Backend\Layer\LayerCtrl@layerTwo")->name('layerTwo');
	Route::get("/layer/three", "Backend\Layer\LayerCtrl@layerThree")->name('layerThree');
	Route::get("/layer/four", "Backend\Layer\LayerCtrl@layerFour")->name('layerFour');
	Route::get("/layer/five", "Backend\Layer\LayerCtrl@layerFive")->name('layerFive');
	Route::get("/layer/six", "Backend\Layer\LayerCtrl@layerSix")->name('layerSix');

	//footer
	Route::get("/footer", "Backend\Footer\FooterCtrl@footer")->name('footer');

});

//Rest backend
Route::group(['prefix' => 'backend/rest', 'middleware'=> 'auth'], function () {
	//user
	Route::get('/user/auth/info', 'Backend\Rest\UserCtrl@authUser');
	Route::post('/userInfo', 'Backend\Rest\UserCtrl@updateUserSelf');
	Route::put('/userInfo/password', 'Backend\Rest\UserCtrl@updatePasswordSelf');

	//links
	Route::get('/link', 'Backend\Rest\LinkCtrl@listLink');
	Route::post('/link', 'Backend\Rest\LinkCtrl@insert');
	Route::post('/link/{id}', 'Backend\Rest\LinkCtrl@update');
	Route::delete('/link/{id}', 'Backend\Rest\LinkCtrl@delete');

	//category
	Route::get('/category', 'Backend\Rest\CategoryCtrl@listCategory');
	Route::delete('/category/{id}', 'Backend\Rest\CategoryCtrl@delete');

	//post
	Route::get('/post', 'Backend\Rest\PostCtrl@list');
	Route::get('/post/{id}', 'Backend\Rest\PostCtrl@info');
	Route::post('/post', 'Backend\Rest\PostCtrl@insert');
	Route::post('/post/{id}', 'Backend\Rest\PostCtrl@update');
	Route::delete('/post/{id}', 'Backend\Rest\PostCtrl@delete');

	//banner
	Route::get('/banner', 'Backend\Rest\BannerCtrl@info');
	Route::post('/banner', 'Backend\Rest\BannerCtrl@update');

	//footer
	Route::get('/footer', 'Backend\Rest\FooterCtrl@info');
	Route::post('/footer', 'Backend\Rest\FooterCtrl@update');

	//layer
	Route::get('/layer', 'Backend\Rest\LayerCtrl@info');
	Route::post('/layer', 'Backend\Rest\LayerCtrl@update');
});

//Rest frontend
Route::group(['prefix' => 'frontend/rest'], function () {
	//send email
	Route::post("/contact", "Frontend\Rest\ContactCtrl@insert")->name('sendMail');
	Route::get("/refereshcapcha", "Frontend\Rest\ContactCtrl@refereshcapcha")->name('refereshcapcha');
});

//Home
Route::get("/", "Frontend\Home\HomeCtrl@getHome")->name('home');

// //Category
// Route::get("/category/{id}", "Frontend\Category\CategoryCtrl@getCategoryDetail")->name('getCategoryDetail');

// //Product
// Route::get("/product", "Frontend\Product\ProductCtrl@getProduct")->name('product');
// Route::get("/product/{id}", "Frontend\Product\ProductCtrl@getProductDetail")->name('getProductDetail');
// Route::get("/product/{cateId}/{id}", "Frontend\Product\ProductCtrl@getCateProductDetail")->name('getCateProductDetail');

// //Post
// Route::get("/post", "Frontend\Post\PostCtrl@getPost")->name('postF');
// Route::get("/post/{id}", "Frontend\Post\PostCtrl@getPostDetail")->name('postDetailF');

// //Contact
// Route::get("/contact", "Frontend\Contact\ContactCtrl@getContact")->name('contactF');

// //Introduce
// Route::get("/introduce", "Frontend\Introduce\IntroduceCtrl@getIntroduce")->name('introduceF');

// //Search
// Route::get("/search", "Frontend\Search\SearchCtrl@getSearch")->name('getSearchF');

//Modal
Route::get('modal/{modalName}', 'ModalCtrl@index')->name('viewModal');

//file
Route::get('/file/avatar', 'File\FileCtrl@avatar');

//test captcha