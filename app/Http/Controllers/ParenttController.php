<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Http\Request;

class ParenttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = Parents::query()->orderByDesc('id')->paginate(3);
        return view('admin.parents.index', compact('parent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parents.create');
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

        Parents::create($requestData);
        return redirect()->route('admin.parents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parent = Parents::find($id);
        return view('admin.parents.show', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent = Parents::find($id);

        return view('admin.parents.edit', compact('parent'));
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
            $parent = Parents::find($id);

            if (isset($parent->img) and file_exists(public_path('/images/'.$parent->img))) {
                unlink(public_path('images/' . $parent->img));

                $file = $request->file('img');
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }
        }

        Parents::find($id)->update($requestData);
        return redirect()->route('admin.parents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $parent = Parents::find($id);
        if (isset($parent->img) and file_exists(public_path('/images/' . $parent->img))) {
            unlink(public_path('images/' . $parent->img));

            Parents::find($id)->delete();

        }
        return redirect()->route('admin.parents.index');
    }
}
