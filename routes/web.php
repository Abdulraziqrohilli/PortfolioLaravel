<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\profile;
use App\Models\servies;
use App\Models\skills;
use App\Models\portfolio;
use App\Models\blog;






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




Route::get('/', function () {
  $users= DB::table('profiles')->where('id', 1)->first();
  $services = servies::All();
  $skills = skills::All();
  $portfolio = portfolio::All();
  $blog = blog::All();
  return view('layouts.index', compact('users','services','skills','portfolio','blog'));
  });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/user/admin/editprofile', [UserController::class, 'editeprofile'])->name('editeprofile');
Route::post('/user/admin/updateprofile', [UserController::class, 'updateprofile'])->name('updateprofile');
Route::get('services/edite/{id}', [UserController::class, 'editeservices']);
Route::get('services/delet/{id}', [UserController::class, 'deleteservices']);
Route::post('services/update/{id}', [UserController::class, 'updateservices'])->name('updateservices');
Route::get('/user/admin/services', function () {
  $services = servies::All();
  return view('admin.profile.services',compact('services'));
})->name('services');

Route::get('/admin/addservices', function () {
  return view('admin.profile.addservices');
  })->name('addservices');
Route::post('services/addservices/', [UserController::class, 'servicesadd'])->name('servicesadd');

Route::get('/user/admin/skills', function () {
  $skills = skills::All();
  return view('admin.profile.skill',compact('skills'));
})->name('skills');

Route::get('/admin/addskills', function () {
  return view('admin.profile.addskills');
  })->name('addskills');

Route::post('skills/addskills/', [UserController::class, 'skillsadd'])->name('skillsadd');
Route::get('skills/edite/{id}', [UserController::class, 'editeskills']);
Route::get('skills/delete/{id}', [UserController::class, 'deletskills']);
Route::post('skills/update/{id}', [UserController::class, 'updateskills']);

Route::get('/admin/portfolios', function () {
  $portfolio = portfolio::All();
  return view('admin.profile.portfolio',compact('portfolio'));
  })->name('portfolio');

Route::get('/portfolio/addportfolio', function () {
  return view('admin.profile.addportfolio');
  })->name('addportfolio');

Route::post('portfolios/portfolioadd', [UserController::class, 'portfolioadd'])->name('portfolioadd');
Route::get('portfolioes/edite/{id}', [UserController::class, 'editeportfolioes']);
Route::post('portfolio/update/{id}', [UserController::class, 'updateportfolioes']);
Route::get('portfolioes/delete/{id}', [UserController::class, 'deleteportfolioes']);

Route::get('/user/admin/blog', function () {
  $blog = blog::All();
  return view('admin.profile.ablog',compact('blog'));
})->name('blog');
Route::get('/user/blog/addblog', function () {
  return view('admin.profile.addblog');
  })->name('addblog');
Route::post('blog/blogadd', [UserController::class, 'blogadd'])->name('blogadd');
Route::get('blogs/delete/{id}', [UserController::class, 'deleteblogs']);
Route::get('blogs/edite/{id}', [UserController::class, 'editeblogs']);
Route::post('blogs/update/{id}', [UserController::class, 'updateblogs']);
// Route::get('/blog/full_detail/{id}', function () {
//   $blogs = blog::find($id);
//   return view('layouts.blog',compact('blogs'));
//   });

Route::get('/blog/full_detail/{id}', [UserController::class, 'blogdetail']);














