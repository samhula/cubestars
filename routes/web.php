<?php

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

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'products' => [
            (object) ['id' => '1', 'name' => 'GAN 15 Maglev 3x3', 'price' => 59.99, 'description' => 'Description for product 1. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 0, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '2', 'name' => 'Product 2', 'price' => 29.99, 'description' => 'Description for product 2. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 2, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '3', 'name' => 'Product 3', 'price' => 39.99, 'description' => 'Description for product 3. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 3, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '4', 'name' => 'Product 4', 'price' => 49.99, 'description' => 'Description for product 4. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 1, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '5', 'name' => 'Product 5', 'price' => 59.99, 'description' => 'Description for product 5. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 2, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '6', 'name' => 'Product 6', 'price' => 69.99, 'description' => 'Description for product 6. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 0, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '7', 'name' => 'Product 7', 'price' => 79.99, 'description' => 'Description for product 7. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 4, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '8', 'name' => 'Product 8', 'price' => 89.99, 'description' => 'Description for product 8. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 1, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
            (object) ['id' => '9', 'name' => 'Product 9', 'price' => 99.99, 'description' => 'Description for product 9. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 5, 'image' => 'gan.webp' , 'rating' => rand(0, 5)],
        ],
        'messages' => [
            (object) ['message' => 'This is a message'],
            (object) ['message' => 'This is another message']
        ]
    ]);
});

Route::get('/users', function() {
    return view('users.index');
});

Route::get('/', function () {
    return view('welcome', [
        'products' => [
            (object) ['id' => '1', 'name' => 'GAN 15 Maglev 3x3', 'price' => 59.99, 'description' => 'Description for product 1. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 0, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '2', 'name' => 'Product 2', 'price' => 29.99, 'description' => 'Description for product 2. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 2, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '3', 'name' => 'Product 3', 'price' => 39.99, 'description' => 'Description for product 3. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 3, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '4', 'name' => 'Product 4', 'price' => 49.99, 'description' => 'Description for product 4. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 1, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '5', 'name' => 'Product 5', 'price' => 59.99, 'description' => 'Description for product 5. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 2, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '6', 'name' => 'Product 6', 'price' => 69.99, 'description' => 'Description for product 6. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 0, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '7', 'name' => 'Product 7', 'price' => 79.99, 'description' => 'Description for product 7. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 4, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '8', 'name' => 'Product 8', 'price' => 89.99, 'description' => 'Description for product 8. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 1, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
            (object) ['id' => '9', 'name' => 'Product 9', 'price' => 99.99, 'description' => 'Description for product 9. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 5, 'image' => 'gan.webp', 'rating' => rand(0, 5)],

        ],
        'messages' => [
            (object) ['message' => 'This is a message'],
            (object) ['message' => 'This is another message']
        ]
    ]);
});

Route::get('/products/{products:id}', function ($id) {
    $products = [
        (object) ['id' => '1', 'name' => 'GAN 15 Maglev 3x3', 'price' => 59.99, 'description' => 'Description for product 1. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 0, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
        (object) ['id' => '2', 'name' => 'Product 2', 'price' => 29.99, 'description' => 'Description for product 2. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 2, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
        (object) ['id' => '3', 'name' => 'Product 3', 'price' => 39.99, 'description' => 'Description for product 3. Hello everyone this is a product description. After a certain number of characters it gets cut off', 'stock_quantity' => 3, 'image' => 'gan.webp', 'rating' => rand(0, 5)],
    ];

    $product = collect($products)->firstWhere('id', $id);

    if (!$product) {
        abort(404);
    }

    return view('products.show', compact('product'));
});