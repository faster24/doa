<?php

namespace App\Http\Controllers;

use App\Http\Requests\CropRequest;
use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        return view('crop.index');
    }

    public function show() {
        return view('crop.create');
    }

    public function create(CropRequest $request)
    {
        $crop = Crop::create($request->validated());

        return redirect()->route('crop.index')->with('success' , 'Crop Created Successfully!');
    }
}
