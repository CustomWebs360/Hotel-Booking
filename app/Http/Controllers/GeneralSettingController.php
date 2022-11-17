<?php

namespace App\Http\Controllers;

use App\Models\generalSetting;
use Carbon\Carbon;
use Database\Seeders\GeneralSettingSeeder;
use Illuminate\Http\Request;
use Toastr;

class GeneralSettingController extends Controller
{
    public function index(){
        return view('admin.general_setting.index', ['setting' => generalSetting::first()]);
    }

    public function index_update(Request $request, $id){
       $rules = [
            'email_frist'   =>   'required',
            'phone_frist'   =>   'required',
            'address_frist' =>   'required',
            'copy_right'    =>   'required',
        ];
        $message = [
            'required' => 'This Frield Is Required!',
        ];
        
        $request->validate($rules, $message);

        $setting = generalSetting::find($id);
        $setting->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->hasFile('logo')){
            $image = $request->file('logo');
             $name  = 'logo'.'-'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/generalsetting/');
            $image->move($location, $name);
            $setting->logo = $name;
        }
        if($request->hasFile('fav_icon')){
            $image = $request->file('fav_icon');
             $name  = 'fav_icon'.'-'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/generalsetting/');
            $image->move($location, $name);
            $setting->fav_icon = $name;
        }

        $setting->save();
        return back()->with('success', 'Successfully Update!');
    }
}
