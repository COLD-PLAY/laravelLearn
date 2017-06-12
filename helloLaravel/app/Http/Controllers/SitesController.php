<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        $first = 'liao';
        $last = 'zhou';
        return view('sites.about', compact('first', 'last'));
    }

    public function contact() {
//        $people = ['liaozhou', 'zhoujielun', 'linjunjie', 'yangtao', 'zhaoyiqi'];
        $people = [];
        return view('sites.contact', compact('people'));
    }
}
