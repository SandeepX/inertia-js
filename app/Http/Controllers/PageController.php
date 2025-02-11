<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home(): \Inertia\Response
    {
        $data = [
            'message' => 'Welcome to the Home Page!',
            'userCount' => 1200
        ];

        return Inertia::render('Home', $data);
    }

    public function about(): \Inertia\Response
    {
        $data = [
            'companyName' => 'Awesome Company',
            'established' => 2010
        ];

        return Inertia::render('About', $data);
    }

    public function create()
    {
        //return Inertia::render('About/Create');
    }

    public function storeAboutPageData(Request $request)
    {
//        dd($request->all());
    }
}
