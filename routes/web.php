<?php

use App\Http\Controllers\ProjectController;
use App\Models\category;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;
use App\Models\projects;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\tpqController;
use App\Http\Controllers\guruController;

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

Route::get('/', [ProjectController::class, 'home']);

Route::get('/tentang', function () {
    return view('tentang', [
        "Nama" => "BMPG - TPQ Kabupaten Karimun",
        "active" => 'tentang',
    ]);
});


Route::get('/projects', [ProjectController::class, 'index']);

Route::get('projects/{project:slug}', [ProjectController::class, 'show']);

Route::get('/categories/{category:slug}', function (category $category) {
    return view(
        'projects',
        [
            'title' => "Postingan di Kategori : $category ->name",
            "projects" => $category->projects->load('category', 'author')


        ]
    );
});

Route::get('/authors/{author:username}', function (User $author) {
    return view(
        'projects',
        [
            'title' => "Postingan oleh : $author ->name",
            "projects" => $author->projects->load('category', 'author')


        ]
    );
});

Route::get('/login', [Logincontroller::class, 'index']);

Route::get('/tpqs', [tpqController::class, 'index']);

Route::get('tpqs/{tpq:slug}', [tpqController::class, 'show']);

Route::get('/gurus', [guruController::class, 'guru']);
