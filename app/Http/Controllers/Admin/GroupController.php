<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::all();
        return view('admin.groups.index', compact('group'));
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(Request $request)
    {
        GROUP::create($request->all());
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $group = Group::find($id);
        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
        Group::find($id)->update($request->all());
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        Group::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
