<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    //TODO
    // CRUD ->
    // CREATE -> create (formulari) -> store POST
    // RETRIEVE -> LIST (index) i SHOW (mostra un item)
    // UPDATE -> edit (formulari) -> update -> POST del formulari edició
    // DELETE -> destroy

    public function index()
    {
        return view('tasks',[
            'tasks' => Task::all()
        ]);
    }
}
