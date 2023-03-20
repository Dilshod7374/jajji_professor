<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Achievements;
use App\Models\achievement;

class AchievementControlller extends Controller
{
/* echo salom */

    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        Achievement::create($request->all());

        return redirect()->route('achievements.index');
    }

    public function edit($id)
    {
        $achievements = Achievement::find($id);
        return view('admin.achievements.edit', compact('achievements'));
    }

    public function update(Request $request, $id)
    {
        Achievement::find($id)->update($request->all());
        return redirect()->route('achievements.index');

    }

    public function destroy($id)
    {
        Achievement::find($id)->delete();
        return redirect()->route('achievements.index');
    }
}
