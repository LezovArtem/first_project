<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $hobbies = Hobby::all();
        return view('hobby.hobbies', compact('hobbies'));
    }

    public function create(){
        return view('hobby.create');
    }

    public function store(){
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string',
            'hours_spent' => 'integer'
        ]);
        Hobby::create($data);
        return redirect()->route('hobbies.index');
    }

    public function show(Hobby $hobby){
        return view('hobby.show', compact('hobby'));
    }

    public function edit(Hobby $hobby){
        return view('hobby.edit', compact('hobby'));
    }

    public function update(Hobby $hobby){
        $data = \request()->validate([
            'name' => 'string',
            'description' => 'string',
            'hours_spent' => 'integer'
        ]);
        $hobby->update($data);
        return redirect()->route('hobbies.show', $hobby->id);
    }

    public function destroy(Hobby $hobby){
        $hobby->delete();
        return redirect()->route('hobbies.index');
    }
}
