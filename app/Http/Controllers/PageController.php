<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Test;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $users = Test::get();

        return view('home',[
            "users" => $users
        ]);
    }

    public function contactPage() {
        return view("contact.index");
    }

}
