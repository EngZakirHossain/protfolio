<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Resume;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $resumes = Resume::orderBy('id','desc')->get();
        return view('backend.cv.index',compact('resumes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required',
        ]);

        $current_id = Resume::insertGetId([
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('pdf')) {
            //upload profile photo start
            $image = $request->file('pdf');
            $name = 'Resume_of_ZakirHossain'.".".$image->getClientOriginalExtension();
            $destination = ('uploads/Resume/');
            $image->move($destination,$name);
            Resume::findOrFail($current_id)->update([
                'cv' => $name,
            ]);
        }

        return back()->with('message','Resume Added Successfully');

    }

    public function destroy(Request $request)
    {
        $name = Resume::findOrFail($request->id)->cv;
        $old_photo_location = ('uploads/Resume/').$name;
        unlink($old_photo_location);

        $slider_delete = Resume::findOrFail($request->id);
        $slider_delete->delete();

        return back()->with('message','Resume Delete Successfully');

    }
}
