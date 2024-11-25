<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HomeController extends Controller
{
    function index(): View
    {

        $seoData = new SEOData(
            title: 'Selamat datang di Estatia',
        );

        $properties = Property::where('publication_status', 'published')
            ->orderBy('created_at')
            ->with([
                'user',
                'location',
                'category',
                'condition',
                'type'
            ])
            ->skip(0)
            ->take(12)
            ->get();

        return view('home.index', [
            'seoData' => $seoData,
            'properties' => $properties
        ]);
    }
}
