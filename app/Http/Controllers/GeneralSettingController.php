<?php

namespace App\Http\Controllers;

use App\Models\generalSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){
        return view('admin.general_setting.index', ['setting' => generalSetting::first()]);
    }

    public function index_update(Request $request, $id){
        $request->validate([
            'email' => 'required',
            'image' => 'required',
            'frist_name' => 'required',
        ]);
    }
}
