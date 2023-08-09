<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "INI BUKAN TOKO SOALNYA SAYA NGARANG";
        $viewData["author"] = "Developed by: @Aufalkhlq";
        return view('home.about')->with("viewData", $viewData);
    }
}
