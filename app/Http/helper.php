<?php
    function total_contact(){
        return App\Models\Contact::all()->count();

    }
    function total_unread_contat(){
        return App\Models\Contact::where('mail_status', 0)->count();

    }
    function theme_setting(){
        return \App\Models\ThemeSetting::where('setting_name', 'themeBackgroud')->first();
    }
?>
