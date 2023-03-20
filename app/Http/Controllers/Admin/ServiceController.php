<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\services;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('Services.index');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }
    public function updated(Request $request, $id)
    {
        Service::find($id)->update($request->all());
        return redirect()->route('Services.index');
    }
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('Services.index');
    }
}
