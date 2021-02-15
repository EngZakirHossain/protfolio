<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\PersonalInformation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function index(){
        $information = PersonalInformation::orderBy('id','desc')->get();
        return view('backend.PersonalInformation.index',compact('information'));
//        return view('backend.PersonalInformation.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'language' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'experience' => 'required',
            'photo' => 'required',
        ]);

        $current_id = PersonalInformation::insertGetId([
            'name' => $request->name,
            'country' => $request->country,
            'language' => $request->language,
            'address' => $request->address,
            'profession' => $request->profession,
            'experience' => $request->experience,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {
            //upload profile photo start
            $image = $request->file('photo');
            $name = 'photo'."$current_id".".".$image->getClientOriginalExtension();
            $destination = ('uploads/personal/');
            $image->move($destination,$name);
            PersonalInformation::findOrFail($current_id)->update([
                'photo' => $name,
            ]);
        }

        return back()->with('message','Personal Information Added Successfully');

    }

    public function destroy(Request $request)
    {
        $name = PersonalInformation::findOrFail($request->id)->photo;
        $old_photo_location = ('uploads/personal/').$name;
        unlink($old_photo_location);

        $slider_delete = PersonalInformation::findOrFail($request->id);
        $slider_delete->delete();

        return back()->with('message','Resume Delete Successfully');

    }
}
