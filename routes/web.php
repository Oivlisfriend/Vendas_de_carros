 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarroController;
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
Auth::routes();
Route::get('/',[UsuarioController::class,'show'])->name('home');
Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::get('/login-admin',[UsuarioController::class,'loginadmin'])->name('login.admin');
Route::get('/create',[UsuarioController::class,'createacount'])->name('create');
Route::get('/carro/{cat}',[CarroController::class,'index'])->name('carros');
Route::get('/gestao-marca/{marca}',[CarroController::class,'marca'])->name('gestao.marca');
Route::get('/gestao-modelo/{modelo}',[CarroController::class,'modelo'])->name('gestao.modelo');
Route::get('/gestao/{car}',[CarroController::class,'gestao'])->name('gestao');
Route::get('/infor/{carro}',[CarroController::class,'infor'])->name('infor');
Route::get('/home', [UsuarioController::class, 'index']);
Route::get('/gestao-user', [CarroController::class, 'gestao_user'])->name('gestao.user');
Route::post('/gestao-store', [CarroController::class,'store'])->name('gestao.store');
Route::post('/gestao-marca-store', [CarroController::class,'marca_store'])->name('gestao.marca.store');
Route::post('/gestao-modelo-store', [CarroController::class,'modelo_store'])->name('gestao.modelo.store');
Route::post('/create',[UsuarioController::class,'store'])->name('create.store');
Route::post('/login-store',[UsuarioController::class,'login_store'])->name('login.store');
Route::post('/login-admin-store',[UsuarioController::class,'login_admin_store'])->name('login.admin.store');
Route::post('/information',[UsuarioController::class,'infor_store'])->name('infor.store');
Route::put('/gestao-marca-edit/{marca}', [CarroController::class,'marca_edit'])->name('gestao.marca.edit');
Route::put('/gestao-modelo-edit/{modelo}', [CarroController::class,'modelo_edit'])->name('gestao.modelo.edit');
Route::put('/gestao-edit/{carro}', [CarroController::class,'edit'])->name('gestao.edit');
Route::delete('/gestao-delete/{carro}', [CarroController::class,'destroy'])->name('gestao.delete');
Route::delete('/gestao-user.delete/{interesse}', [UsuarioController::class,'destroy'])->name('gestao.user.delete');
