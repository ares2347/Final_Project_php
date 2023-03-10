<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("admin.pages.{$page}")) {
            return view("admin.pages.{$page}");
        }

        return abort(404);
    }

    public function vr()
    {
        return view("admin.pages.virtual-reality");
    }

    public function rtl()
    {
        return view("admin.pages.rtl");
    }

    public function profile()
    {
        return view("admin.pages.profile-static");
    }

    public function signin()
    {
        return view("admin.pages.sign-in-static");
    }

    public function signup()
    {
        return view("admin.pages.sign-up-static");
    }
}
