<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::latest()->get();
        return response()->json($sections);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'class_id' => 'required',
            'section_name' => 'required|unique:sections|max:25'
        ]);

        Section::insert([
            'class_id' => $request->class_id,
            'section_name' => $request->section_name,
            
        ]);

        return response('Student Section inserted!!');
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return response()->json($section);
    }

    public function update(Request $request, $id)
    {
        Section::findOrFail($id)->update([
            'class_id' => $request->class_id,
            'section_name' => $request->section_name,
            
        ]);

        return response('Student Section updated!');
    }

    public function delete($id)
    {
        Section::findOrFail($id)->delete();
        return response('Section removed!');
    }
}
