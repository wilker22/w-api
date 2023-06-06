<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    public function index()
    {
        $subjects = Subject::latest()->get();
        //dd($subjects);
        return response()->json($subjects);

        
    }
    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'class_id' => 'required',
            'subject_name' => 'required|unique:subjects|max:25'
        ]);

        Subject::insert([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code
        ]);

        return response('Student Subject inserted!!');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return response()->json($subject);
    }

    public function update(Request $request, $id)
    {
         Subject::findOrFail($id)->update([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code,
         ]);

         return response('Student Subject updated!');
    }

    public function delete($id)
    {
        Subject::findOrFail($id)->delete();

        return response('Subject removed!');

    }
}
