<?php

use App\Livewire\AboutUs;
use App\Livewire\AddCategory;
use App\Livewire\AddProductForm;
use App\Livewire\AdminDashboard;

use App\Livewire\AllProducts;
use App\Livewire\Contacts;
use App\Livewire\EditProduct;
use App\Livewire\ManageCategories;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\ShoppingCartComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetails;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{product_id}/details', ProductDetails::class);

Route::get('/shopping-cart', ShoppingCartComponent::class)->name('shopping-cart');
Route::get('/all/products', AllProducts::class);

Route::get('/about', AboutUs::class);

Route::get('/contacts', Contacts::class);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');

    Route::get('/products', ManageProduct::class)->name('products');

    Route::get('/orders', ManageOrders::class)->name('orders');

    Route::get('/add/product', AddProductForm::class);

    Route::get('/manage/categories', ManageCategories::class);
    // adding category form
    Route::get('/add/category', AddCategory::class);
    //editing products
    Route::get('/edit/{id}/product', EditProduct::class);
});
