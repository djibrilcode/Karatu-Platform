<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\ListCoursController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SousCategorieController;
use App\Livewire\Cart;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|--------------------------------------------------------------------------
*/

// Pages statiques
Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/about', fn () => view('pages.about'));
Route::get('/contact', fn () => view('pages.contact'));

// Panier
Route::get('cart', Cart::class)->name('cart.index');

// Étudiant
Route::get('/etudiant/dasboard/home', fn () => view('pages.etudiant-home'))->name('etudiant-home');

//progress
Route::get('/etudiant/dashboard/progress', fn () =>
    view('progress.index'))->name('progress');

// Recherche
Route::get('search', [SearchController::class, 'search'])->name('search');

// Cours
Route::get('/cours', [ListCoursController::class, 'index'])->name('listCours');
Route::resource('course', CoursesController::class);

// Sous-catégories
Route::resource('sous-categorie', SousCategorieController::class)->parameters([
    'sous-categorie' => 'slug'
]);

// Catégories
Route::resource('categorie', CategoriesController::class);

// Utilisateurs
Route::resource('user', UserController::class);

// Inscriptions
Route::resource('enrollment', EnrollmentsController::class);

// Progression
Route::resource('progress', ProgressController::class);

// Quizz
Route::resource('quizz', QuizzController::class);

// Leçons
Route::resource('lesson', LessonsController::class);


// Routes protégées par middleware
Route::middleware('auth')->group(function () {
    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


 // Dashboards
    Route::get('/admin/dashboard', fn () => view('dashboards.admin'))->name('admin.dashboard');
    Route::get('/enseignant/dashboard', fn () => view('dashboards.enseignant'))->name('enseignant.dashboard');
    Route::get('/etudiant/dashboard', fn () => view('dashboards.etudiant'))->name('etudiant.dashboard');


    // Liste des cours pour l'admin
    Route::get('admin/dasboard/cours', [CoursesController::class, 'list_cour'])->name('cours-list');

    // Liste des leçons pour l'admin
    Route::get('/admin/dashboar/lesson', fn () => view('lesson.list-lesson-admin'))->name('lesson-list');
});

// Authentification
require __DIR__.'/auth.php';
