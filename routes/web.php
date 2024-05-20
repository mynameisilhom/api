<?php

use App\Http\Controllers\HemisController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/models', function () {
    $modelDirectory = app_path('Models');

    // Получаем все файлы в каталоге моделей
    $modelFiles = File::files($modelDirectory);

    $models = [];

    // Перебираем каждый файл
    foreach ($modelFiles as $modelFile) {
        // Получаем имя файла без расширения
        $fileName = pathinfo($modelFile, PATHINFO_FILENAME);

        // Добавляем имя модели в массив
        $models[] = $fileName;
    }

    // Возвращаем список имен моделей
    return $models;
});


Route::get('/controllers', function () {
    // Получаем каталог контроллеров
    $controllerDirectory = app_path('Http/Controllers');

    // Получаем все файлы в каталоге контроллеров
    $controllerFiles = File::files($controllerDirectory);

    $controllers = [];

    // Перебираем каждый файл
    foreach ($controllerFiles as $controllerFile) {
        // Получаем имя файла без расширения
        $fileName = pathinfo($controllerFile, PATHINFO_FILENAME);

        // Добавляем имя контроллера в массив
        $controllers[] = $fileName;
    }

    // Возвращаем список имен контроллеров
    return $controllers;
});


Route::get('hemis', [HemisController::class, 'store'])->name('hemis');
