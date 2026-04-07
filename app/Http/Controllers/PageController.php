<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'programme' => config('kisrp.programme'),
            'phases' => config('kisrp.phases'),
            'pilots' => config('kisrp.pilots'),
            'pillars' => config('kisrp.activity_pillars'),
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'programme' => config('kisrp.programme'),
        ]);
    }

    public function approach(): View
    {
        return view('pages.approach', [
            'phases' => config('kisrp.phases'),
        ]);
    }

    public function activities(): View
    {
        return view('pages.activities', [
            'pillars' => config('kisrp.activity_pillars'),
        ]);
    }

    public function partners(): View
    {
        return view('pages.partners', [
            'county_seals' => config('kisrp.county_seals'),
        ]);
    }

    public function pilotsIndex(): View
    {
        return view('pages.pilots.index', [
            'pilots' => config('kisrp.pilots'),
        ]);
    }

    public function pilotShow(string $slug): View
    {
        $pilots = collect(config('kisrp.pilots'));
        $pilot = $pilots->firstWhere('slug', $slug);

        abort_unless($pilot, 404);

        return view('pages.pilots.show', [
            'pilot' => $pilot,
        ]);
    }

    public function updates(): View
    {
        return view('pages.updates');
    }

    public function gisMaps(): View
    {
        return view('pages.maps', [
            'gis' => config('kisrp.gis_maps'),
        ]);
    }
}
