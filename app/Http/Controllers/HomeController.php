<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function changeLang(Request $request)
    {
        $language = config('app.locale');
        $lang = $request->language;
        if ($lang == 'en') {
            $language = 'en';
        }
        if($lang == 'vi') {
            $language = 'vi';
        }
        Session::put('lang', $language);
        return redirect()->back();
    }
}
