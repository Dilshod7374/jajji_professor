<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\teachers;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return view('admin.teachers.index', compact('teacher'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        Teacher::find($id)->update($request->all());
        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect()->route('teachers.index');
    }
}
