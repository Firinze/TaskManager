<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')
->controller(UserController::class)
->name('admin.users.')
->middleware('can:admin')
->group(function(){
    Route::get('/users', 'index')->name('index');
    Route::get('/users/create', 'create')->name('create');
    Route::post('/users', 'store')->name('store');
    Route::get('/users/edit/{user}', 'edit')->name('edit');
    Route::post('/users/edit/{user}', 'update')->name('update');
    Route::delete('/users/delete/{user}', 'destroy')->name('destroy'); 
});

Route::prefix('task')
->controller(TaskController::class)
->name('tasks.')
->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/assigned', 'MyTask')->name('MyTask');
    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store')->middleware('can:tecanCreateTask');
    Route::get('/edit/{teTask}', 'edit')->name('edit')->middleware('can:tecanCreateTask');
    Route::post('/edit/{teTask}', 'update')->name('update')->middleware('can:tecanCreateTask');
    Route::get('/delete/{teTask}', 'remove')->name('remove')->middleware('can:tecanCreateTask');
    
    Route::get('/assign/{teTask}', 'assignView')->name('assignView');
    Route::post('/assign/{teTask}', 'assign')->name('assign');
    
    Route::get('/{teTask}', 'show')->name('show');
    Route::post('/update-status/{teTask}', 'updateStatus')->name('updateStatus');
}); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';