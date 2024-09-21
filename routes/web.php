<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/test", [\App\Http\Controllers\TestController::class, 'index']);
// Route::get("/test", \App\Http\Controllers\TestController::class);
// Route::get("/showUser", [\App\Http\Controllers\UserController::class, 'showUser']);
// Route::get("/users", \App\Http\Controllers\UserController::class);
// Route::post("/store-user", [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');
// Route::get("/hello", [\App\Http\Controllers\UserController::class, 'hello']);

    // Route::get('/test_database', function () {
    //     // Создаем новый экземпляр модели Employee
    //     $employee = new Employee();
    //     // Устанавливаем значения для полей модели
    //     $employee->name = 'Иван Иванов';
    //     $employee->position = 'Разработчик';
    //     $employee->salary = 50000;
    //     // Сохраняем модель в базу данных
    //     $employee->save();
    //     return 'Сотрудник успешно добавлен!';
    // });

    Route::get('/', function () {
        return view('home', [
            'name' => 'Иван',
            'age' => 30,
            'position' => 'Разработчик',
            'address' => 'Москва, ул. Примерная, д. 1'
        ]);
    });

    Route::get('/contacts', function () {
        return view('contacts', [
            'address' => 'Москва, ул. Контактная, д. 5',
            'post_code' => '101000',
            'email' => 'example@example.com',
            'phone' => '+7 (999) 123-45-67'
        ]);
    });
