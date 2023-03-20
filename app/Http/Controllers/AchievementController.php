<?php
/* o'rganish uchun */
namespace App\Http\Controllers;

use App\Http\Requests\AchievementStoreRequest;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{

    public function index()
    {
        $achievement = Achievement::orderBy('id', 'DESC')->paginate(3);
        return view('admin.achievements.index', compact('achievement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AchievementStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) 
        {
            $file = $request->file('img');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }
        Achievement::create($requestData);
        return redirect()->route('admin.achievements.index')->with('success', 'Ma`lumot qo`shildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $achievement = Achievement::find($id);
        return view('admin.achievements.show', compact('achievement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achievement = Achievement::find($id);
        return view('admin.achievements.edit', compact('achievement'));
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

        if ($request->hasFile('img')) 
        {
            
            $achievement = Achievement::find($id);

            if (isset($achievement->img) and file_exists(public_path('/images/'.$achievement->img))) {
                unlink(public_path('/images/' . $achievement->img));

                $file = $request->file('img');
                $imageName = time().'-'.$file->getClientOriginalName();
                $file->move('images/', $imageName);
                $requestData['img'] = $imageName;
            }

        }

        Achievement::find($id)->update($requestData);

        return redirect()->route('admin.achievements.index')->with('success', 'Ma`lumot o`zgartirildi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement = Achievement::find($id);
        if (isset($achievement->img) and file_exists(public_path('/images/' . $achievement->img))) {
            unlink(public_path('images/' . $achievement->img));
        Achievement::find($id)->delete();        

        }
        return redirect()->route('admin.achievements.index');

    }
}
