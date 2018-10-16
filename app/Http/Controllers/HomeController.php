<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Image;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function daily_sheet()
    {
        return view('daily-sheet');
    }

    public function member_list()
    {
        $members = Member::orderBy('id', 'desc')->get();
        return view ('member-list', compact('members'));
    }

    public function store_member(Request $request)
    {
        $member = new Member();

        $member->licence        = $request->licence;
        $member->driver_name    = $request->driver_name;
        $member->owner_name     = $request->owner_name;
        $member->driver_mobile  = $request->driver_mobile;
        $member->owner_mobile   = $request->owner_mobile;
        $member->driver_address = $request->driver_address;
        $member->owner_address  = $request->owner_address;
        $member->auto_type      = $request->auto_type;
        $member->charge_rate    = $request->charge_rate;
        $member->due_money      = $request->due_money;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('images/uploads/' . $file->getClientOriginalName()));

            if ($image) {
                $member->photo = $file->getClientOriginalName();
            }
        }

        $member->status = 1;

        $member->save();

        return redirect('/home')->with('successMsg', 'The Member Inserted Successfully!');
    }


    public function member_edit($id)
    {
        $member = Member::find($id);
        return view ('member-edit',compact('member'));

    }


    public function member_update(Request $request, $id)
    {

        $member                 = Member::find($id);

        $member->licence        = $request->licence;
        $member->driver_name    = $request->driver_name;
        $member->owner_name     = $request->owner_name;
        $member->driver_mobile  = $request->driver_mobile;
        $member->owner_mobile   = $request->owner_mobile;
        $member->driver_address = $request->driver_address;
        $member->owner_address  = $request->owner_address;
        $member->auto_type      = $request->auto_type;
        $member->charge_rate    = $request->charge_rate;
        $member->due_money      = $request->due_money;

        if ($request->hasFile('photo'))
        {
            $file = $request->photo;
            $image = Image::make($file)->resize(200, null, function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path(config('appconfig.imagePath') . $file->getClientOriginalName()));

            if ($image){
                $member->photo   = $file->getClientOriginalName();
            }
        }

        $member->status = $request->status;

        $member->save();

        return redirect('member-list')->with('successMsg', 'The Member Updated Successfully!');

    }


    public function member_destroy($id)
    {
        Member::destroy($id);
        return redirect('member-list')->with('successMsg', 'The Member Permanently Deleted Successfully!');
    }

}
