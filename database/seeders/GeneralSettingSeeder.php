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
        $setting->logo  = 'logo.png';
        $setting->fav_icon = 'fav_icon.png';
        $setting->email = 'tanvir@gmail.com';
        $setting->location = 'Dhaka, Bangladesh';
        $setting->phone  = '01879285037';
        $setting->copy_right = 'All right reserved by Tanvir';
        $setting->save();
    }
}
