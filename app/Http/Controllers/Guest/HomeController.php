<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HomeController extends Controller
{
    function index() : View {

        $seoData = new SEOData(
            title: 'Selamat datang di Estatia',
        );

        return view('home.index',[
            'seoData' => $seoData 
        ]);
    }
}
