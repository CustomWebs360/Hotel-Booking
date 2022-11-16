<?php

namespace App\Http\Controllers;

use App\Models\ThemeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemeSettingController extends Controller
{
    public function themesetting(Request $request)
    {
       DB::table('theme_settings')->where('setting_name', 'themeBackgroud')->update([
            'setting_value' => $request->value,
        ]);
        return response()->json(['success' => 'ok']);
    }
}
