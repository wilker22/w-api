<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sclass;
use Illuminate\Http\Request;

class SclassController extends Controller
{
    public function index()
    {
        $sclass = Sclass::latest()->get();
        return response()->json($sclass);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'
        ]);

        Sclass::insert([
            'class_name' => $request->class_name
        ]);

        return response('Student Class Inserted!');
    }


    public function edit($id)
    {
        $sclass = Sclass::findOrFail($id);
        return response()->json($sclass);
    }

    public function update(Request $request, $id)
    {
         Sclass::findOrFail($id)->update([
            'class_name' => $request->class_name
         ]);

         return response('Student class updated!');
    }

    public function delete($id)
    {
        Sclass::findOrFail($id)->delete();

        return response('Class removed!');

    }
}
