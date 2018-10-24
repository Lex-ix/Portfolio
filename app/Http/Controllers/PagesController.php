<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function showWelcome() {
        $aboutMe = \App\Text::where('title', 'about_me')->get();
        if (isset($aboutMe[0])) {
            $aboutMeContent = $aboutMe[0]->content;
        } else {
            $aboutMeContent = 'Standard Text';
        }

        $contactMe = \App\Text::where('title', 'contact_me')->get();
        if (isset($contactMe[0])) {
            $contactMeContent = $contactMe[0]->content;
        } else {
            $contactMeContent = 'Standard Text';
        }

        return view('welcome', [
            'aboutMeContent' => $aboutMeContent,
            'contactMeContent' => $contactMeContent,
        ]);
    }

    public function showAdmin()
    {
        // Return admin page with texts
        $texts = \App\Text::All();

        return view('admin', [
            'texts' => $texts,
        ]);
    }
}
