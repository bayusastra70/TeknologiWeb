<?php
use Illuminate\Support\Facades\Route;
//memanggil file controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AritmatikaController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

//route dasar/home
Route::get('/bonsai', function () {return view('frontpage.landingpage');});
Route::get('home',[HomeController::class,'index'])->name('landing');
Route::get("/detail/{id}",[HomeController::class,'detail']);
Route::get("search",[HomeController::class,'search']);
//Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/', function () {return view('frontpage.landingpage');});
//Route::get('/pesanikan', function () {return view('frontpage.pemesananikan');});
Route::get('/booking', function () {return view('frontpage.booking');});
//route cart
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');



//route login
Route::get('/logi', function () {
    return view('home1', ['title' => 'Home']);
})->name('home1');

Route::get('register1', [UserController::class, 'register'])->name('register1');
Route::post('register1', [UserController::class, 'register_action'])->name('register.action');
Route::get('login1', [UserController::class, 'login'])->name('login1');
Route::post('login1', [UserController::class, 'login_action'])->name('login.action');
Route::get('password1', [UserController::class, 'password'])->name('password1');
Route::post('password1', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout1', [UserController::class, 'logout'])->name('logout1');


//route latihan aritmatika
//Route::get('/looping', function () { return view('looping');});
//Route::post('/looping', [AritmatikaController::class, 'index']);
//Route::post('/Aritmatika', [AritmatikaController::class, 'Aritmatika']);

//route products
Route::resource('products', ProductsController::class);





//route package
Route::get('/', function () {return view('welcome');});
//Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('bonsai', [HomeController::class,'index'])->name('home');
// Route::group(['middleware'=>'auth:sanctum'], function () {Route::resource('package', PackagesController::class);});


//routetugasstatistik
Route::get('/statistik', function () {return view('tugasstatistik');});

   
   


require __DIR__.'/auth.php';
