<?php

namespace Database\Seeders;

use App\Models\generalSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new generalSetting();

        $setting->logo              = 'logo.png';
        $setting->fav_icon          = 'fav_icon.png';
        $setting->email_frist       = 'demo@gmail.com';
        $setting->email_second      = 'demo135@gmail.com';
        $setting->address_frist     = 'Dhaka, Bangladesh';
        $setting->address_second    = 'Feni, Bangladesh';
        $setting->phone_frist       = '01879285037';
        $setting->phone_second      = '01646004800';
        $setting->copy_right        = '<p><span style="background-color: rgb(248, 248, 248);">COPYRIGHT © 2020 </span><a href="www.customwebs.com" target="_blank" style="background-color: rgb(248, 248, 248);">CustomWebs360</a><span style="background-color: rgb(248, 248, 248);">, All rights Reserved</span></p>';

        $setting->save();
    }
}
