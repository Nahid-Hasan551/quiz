<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AppQuestionController;
use App\Http\Controllers\clasicController;
use App\Providers\RouteServiceProvider;


use App\Http\Controllers\QuestionController;
use Faker\Guesser\Name;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('homepage');
});
Route::get('homepage',function(){
    return view('homepage');
});
Route::get('index',function(){
    return view('index');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('about',function(){
    return view('about');
});
Route::get('login',function(){
    return view('login');
});
Route::get('registration',function(){
    return view('registration');
});

// Route::get('freequiz',function(){
//     return view('freequiz');
// });


Route::get('subjects-ssc',function(){
    return view('subjects-ssc');
});
Route::get('subjects-hsc',function(){
    return view('subjects-hsc');
});
Route::get('level',function(){
    return view('level');
});
Route::get('dashboard',function(){
    return view('dashboard');
});
// Route::get('create-quiz',function(){
//     return view('create-quiz');
// });
Route::get('manage-quiz',function(){

    return view('manage-quiz');

});

//Route::get('create_quiz_test',[QuizController::class, 'create_quiz_test'])->name('free_quz');

//Route::post('create_quiz_test/post',[QuizController::class, 'create_quiz_test_post'])->name('create_quiz_test_post');

//Route::get('quiz/start',[QuizController::class, 'quiz_start'])->name('quiz_start');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     //return view('dashboard');
 //})->name('dashboard');
Route::get('homepage',function(){
    return view('homepage');
})->Name('homepage');


Route::get('testing',function(){
    return view('other_quiz');
});



Route::get('create-quiz',[QuestionController::class, 'create'])->name('create-quiz');

Route::post('quiz/save',[QuestionController::class, 'store'])->name('quiz_save');

Route::get('freequiz',[QuestionController::class, 'index'])->name('freequiz');

Route::get('freequiz/{lavel_one}',[QuestionController::class, 'index'])->name('freequiz_lavel');

Route::get('freequiz/other/{lavel}',[QuestionController::class, 'lavel_data'])->name('freequiz_other_lavel');

Route::post('freequiz/result',[QuestionController::class, 'result_store'])->name('result_store');

Route::get('quiz/view',[QuizController::class, 'quiz_view'])->name('quiz_view');

Route::post('quiz/update',[QuizController::class, 'quiz_update'])->name('update_quiz');



Route::get('/classicquiz',[clasicController::class,'index'])->name('classicquiz');


// Route::resource('question', 'QuestionController');

// Route::resource('quiz', 'QuizController');
