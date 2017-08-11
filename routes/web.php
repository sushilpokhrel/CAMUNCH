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
    $content = \App\Homepage::first();
    $articles = \App\Article::where('isApproved','1')->latest()->limit(10)->get();
    $news = \App\News::limit(10)->get();
    $forum = \App\Question::limit(10)->get();
    return view('frontend.index',compact('content','articles','news','forum'));
});

Route::get('/incometax','IncomeTaxController@show');

Route::get('/finance','FinanceController@show');

Route::get('/vat','VatController@show');

Route::get('/law','LawController@show');

Route::get('/miscellaneous','MiscellaneousController@show');

Route::get('/news',function(){
    return view('content.news');
});

Route::get('/forum','FourmController@index');

Route::get('/audit','AuditController@index');

Route::resource('/index','IndexController');

Route::get('/qualified','QualifiedController@show');

Route::get('/vacancydetails/{id}','VacancyDetailsController@show')->middleware(['auth']);
Route::get('/vacancy/applicants/{id}','VacancyDetailsController@showApplicants')->middleware(['auth','admin']);
Route::get('/show/{id}','VacancyDetailsController@showr')->middleware(['auth','admin']);
Route::get('/showc/{id}','VacancyDetailsController@showc')->middleware(['auth','admin']);

Route::get('/articledetails/{id}','ArticleDetailsController@show');
Route::get('/new',function(){
    $news = \App\News::paginate(4);
    return view('content.news',compact('news'));
});

Route::get('/newsdetails/{id}','NewsDetailsController@show');

Route::get('/forum/{id}','FourmController@show');

//Route::get('/postarticle','PostArticleController@show');

//Route::get('/postnews','PostNewsController@show');

//Route::get('/postvacancy','PostVacancyController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articles/approve/{id}','ArticleController@approve')->middleware(['auth','admin']);
Route::group(['middleware' => 'auth','admin'], function()
{
    Route::resource('/articles','ArticleController');
    Route::resource('/news','NewsController');
    Route::resource('/vacancy','VacancyController');
    Route::get('/admin/question','FourmController@showQuestion');
    Route::get('/question/approve/{id}','FourmController@approve');
    Route::get('/answer/{id}','FourmController@createAnswer');
    Route::post('/answer/{id}','FourmController@answer');
    Route::get('/caadmin',function(){
        return view('adminpanel.admin');
    });
    Route::get('/cover',function(){
        return view('adminpanel.home.home');
    });
    Route::get('/addcover',function(){
        return view('adminpanel.home.addcover');
    });

});

Route::post('/question','FourmController@ask');

Route::get('/blank',function(){
   return view('adminpanel.blank');
});

Route::get('/apply/{id}','AuditController@apply');

Route::post('/apply','AuditController@upload');