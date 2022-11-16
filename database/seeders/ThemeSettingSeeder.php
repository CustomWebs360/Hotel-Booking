<?php

namespace Database\Seeders;

use App\Models\Theme_setting;
use App\Models\ThemeSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ThemeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme_setting::insert([
            'setting_name' => 'themeBackgroud',
            'setting_value' => 'dark-layout',
        ]);
    }
}
