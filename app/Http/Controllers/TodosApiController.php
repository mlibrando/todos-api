<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosApiController extends Controller
{
    public function index() {
        return Todos::all();
    }

    public function store() {
        return Todos::create([
            'title' => request('title'),
            'completed' => request('completed'),
        ]);
    }

    public function update(Todos $todo) {
        $todo->update([
            'title' => request('title'),
            'completed' => request('completed'),
        ]);
    }

    public function destroy(Todos $todo) {
        $todo->delete();
    }
}
