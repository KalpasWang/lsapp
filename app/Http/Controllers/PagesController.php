<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravek';
        return view('pages.index').with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about');
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Programming', 'Web Design', 'SEO']
        ];
        return view('pages.services').with($data);
    }
}
