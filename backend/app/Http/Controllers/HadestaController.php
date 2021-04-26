<?php

namespace App\Http\Controllers;

use Browser;
use Illuminate\Http\Request;

class HadestaController extends Controller
{
    public function homepage_v()
    {
        if(Browser::isMobile())
        {
            return 'Tampilan mobile sedang dalam pengembangan!';
        }else{
            return view('pages.app.homepage');
        }
    }
}
