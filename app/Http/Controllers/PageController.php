<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return "About Us Page";
    }

    public function contact()
    {
        return "Contact Page";
    }

    public function submitContact()
    {
        return "Submitted Contact";
    }

    public function index()
    {
        return view('web.index');
    }
}