<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\LibroReclamacionesController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\AuthMiddleware;

// Búsqueda global
Route::get('/buscar', [SearchController::class, 'redirectSearch'])->name('buscar');

// Registro de usuarios
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Rutas de contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Ruta de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');
// Ruta para obtener las marcas y modelos
Route::get('/getMarcasYModelos', [HomeController::class, 'getMarcasYModelos']);
Route::get('/getModelos', [HomeController::class, 'getModelos']);
Route::get('/getAñosYPrecios', [HomeController::class, 'getAñosYPrecios']);

// Servicios
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

// **Autos - Sección con rutas para nuevos y usados**
Route::prefix('autos')->group(function () {
    Route::get('/', [AutoController::class, 'index'])->name('autos.index'); // Muestra todos los autos
    Route::get('/nuevos', [AutoController::class, 'indexNuevos'])->name('autos.nuevos'); // Autos nuevos
    Route::get('/usados', [AutoController::class, 'indexUsados'])->name('autos.usados'); // Autos usados
    Route::get('?tipo={tipo}', [AutoController::class, 'filterByType'])->name('autos.filterByType');
    Route::get('?marca={marca}', [AutoController::class, 'filterByBrand'])->name('autos.filterByBrand');
    Route::get('/{id}', [AutoController::class, 'show'])->name('autos.show'); // Detalles de un auto
});

// **Motos**
Route::prefix('motos')->group(function () {
    Route::get('/', [MotoController::class, 'index'])->name('motos.index');
    Route::get('/{id}', [MotoController::class, 'show'])->name('motos.show');
});

// **Noticias**
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias');

// **Contacto**
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact_messages.store');

// **Login y Logout**
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// **Perfil del usuario**
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil')->middleware(AuthMiddleware::class);
Route::get('/perfil/editar', [PerfilController::class, 'edit'])->name('perfil.edit')->middleware(AuthMiddleware::class);
Route::put('/perfil/actualizar', [PerfilController::class, 'update'])->name('perfil.update');

// **Ayuda y Secciones Legales**
Route::get('/ayuda/terminos-y-condiciones', [AyudaController::class, 'terminosYCondiciones'])->name('ayuda.terminos');
Route::get('/ayuda/politicas-publicacion', [AyudaController::class, 'politicasPublicacion'])->name('ayuda.politicas_publicacion');
Route::get('/ayuda/politicas-privacidad', [AyudaController::class, 'politicasPrivacidad'])->name('ayuda.politicas_privacidad');
Route::get('/ayuda/politica-cookies', [AyudaController::class, 'politicaCookies'])->name('ayuda.politica_cookies');
Route::get('/ayuda/legales', [AyudaController::class, 'legales'])->name('ayuda.legales');
Route::get('/ayuda/libro-reclamaciones', [AyudaController::class, 'libroReclamaciones'])->name('ayuda.libro_reclamaciones');
Route::post('/ayuda/libro-reclamaciones/submit', [LibroReclamacionesController::class, 'store'])->name('libro.reclamaciones.submit');
Route::get('/ayuda/tips-y-guias', [AyudaController::class, 'tipsYGuias'])->name('ayuda.tips_y_guias');
