<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $task1 = Task::create([
        'title' => 'Tasca 1',
        'description' => 'lorem bla bla',
        'completed' => 0
    ]);
    $task2 = Task::create([
        'title' => 'Tasca 2',
        'description' => 'lorem bla bla',
        'completed' => 0
    ]);
    $task3 = Task::create([
        'title' => 'Tasca 3',
        'description' => 'lorem bla bla',
        'completed' => 1
    ]);

    $tasks = [
        $task1,
        $task2,
        $task3
    ];

    return view('tasks',[
        'tasks' => $tasks
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
