<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->paginate(3);
        return view('admin.teachers.index', compact('teachers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
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
        Teacher::create($requestData);

        return redirect()->route('admin.teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.edit', compact('teacher'));
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
            $teacher = Teacher::find($id);

            if (isset($teacher->img) and file_exists(public_path('/images/'.$teacher->img))) {
                unlink(public_path('images/' . $teacher->img));

                $file = $request->file('img');
                $imageName = time() . '-' . $file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }
        }
        Teacher::find($id)->update($requestData);

        return redirect()->route('admin.teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        if (isset($teacher->img) and file_exists(public_path('/images/' . $teacher->img))) {
            unlink(public_path('images/' . $teacher->img));
        }
        Teacher::find($id)->delete();
        return redirect()->route('admin.teachers.index');

    }
}
