<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{


    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Todo::create([
            'title' => $request->title,
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }

    public function destroy(Todo $todo)
    {
        if (Auth::id() !== $todo->user_id) abort(403);
        $todo->delete();
        return redirect()->back();
    }

    public function toggle(Todo $todo)
    {
        if (Auth::id() !== $todo->user_id) abort(403);
        $todo->update(['is_done' => !$todo->is_done]);
        return redirect()->back();
    }
}
