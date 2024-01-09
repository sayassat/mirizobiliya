<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\IndexController;
use App\Models\Category;
use App\Models\Product;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'index'])->name('index');

// Route::get('/catalogue', function () {
//     return view('catalogue');
// });

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');

// Route::get('/product/{id}', function () {
//     return view('product');
// });

Route::get('/product/{id}', [ItemController::class, 'index'])->name('product');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.admin');
    // Add more routes for specific admin functionalities
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/products', [ProductController::class, 'index'])->name('products.products');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/create', function(){
        $product = new Product();
        $product->name = request('name');
        $product->categories_id = request('category');
        $product->description = request('description');
        $product->price = request('price');
        $product->qty = request('quantity');
        $product->save();
        return redirect('admin/products');
    });

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.categories');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/create', function(){
        $category = new Category();
        $category->name = request('name');
        $category->save();
        return redirect('admin/categories');
    });
});

Route::get('/logout', 'LoginController@logout')->name('logout');








Route::get('/dashboard', function () {
    return redirect('admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
