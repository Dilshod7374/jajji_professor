<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\parents_idea;
use App\Models\Parents;

class ParentsController extends Controller
{
    public function index()
    {
        $parents = Parents::all();
        return view('admin.parents_idea.index', compact('parents'));
    }

    public function create()
    {
        return view('admin.parents_idea.create');
    }

    public function store(Request $request)
    {
        Parents::create($request->all());
        return redirect()->route('parents_idea.index');
    }

    public function edit($id)
    {
        $parents = Parents::find($id);
        return view('admin.parents_idea.edit', compact('parents'));
    }

    public function update(Request $request, $id)
    {
        Parents::find($id)->update($request->all());
        return redirect()->route('parents_idea.index');
    }

    public function destroy($id)
    {
        Parents::find($id)->delete();
        return redirect()->route('parents_idea.index');
    }
}
