<?php


use App\Http\Controllers\Admin\Loan\PersonalLoneController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PrivacyPolicyControlle;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchpageController;
use App\Http\Controllers\SingleBlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/test', function () {
    return view('test');
});

Route::get('/',[HomepageController::class,'index'])->name('homepage');
Route::get('/blogs',[BlogpageController::class,'blogPage'])->name('blogpage');
Route::get('/blogs/{slug}',[BlogpageController::class,'categoryBlogPage'])->name('blogpage.category');
Route::get('/blog/{slug}',[SingleBlogController::class,'singleBlog'])->name('single.blog');
Route::get('/about',[ AboutpageController::class,'AboutPage'])->name('about.page');

Route::get('/personal-loan-calculator',[PersonalLoneController::class,'personalLoan'])->name('personal.loan');
Route::post('/personal-loan/calculate', [PersonalLoneController::class, 'calculate'])->name('lone.store');
Route::get('search',[SearchpageController::class,'search'])->name('search');



Route::get('/privacy-policy', [PrivacyPolicyController::class, 'privacyPolicy'])->name('privacy-policy');


Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
