<?php

namespace App\Http\Controllers;
use App\Models\Group;


use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::orderBy('id', 'DESC')->paginate(5);

        return view('admin.groups.index', compact('group'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }
        Group::create($requestData);

        return redirect()->route('admin.groups.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        return view('admin.groups.show', compact('group'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('admin.groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $groups = Group::find($id);

            if (isset($groups->img) and file_exists(public_path('/images/'.$groups->img))) {
                unlink(public_path('images/' . $groups->img));

                $file = $request->file('img');
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }
        }
        Group::find($id)->update($requestData);

        return redirect()->route('admin.groups.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::find($id)->delete();
        return redirect()->route('admin.groups.index');
    }
}
