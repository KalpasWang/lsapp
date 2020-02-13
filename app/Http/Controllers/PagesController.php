<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        return view('pages.about', ['title' => 'About Us']);
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Programming', 'Web Design', 'SEO']
        ];
        return view('pages.services', $data);
    }
}
