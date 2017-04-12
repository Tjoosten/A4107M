<?php

namespace Sijot\Http\Controllers;

use Sijot\Groups;
use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * @package Sijot\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
       $this->middleware('lang');
       $this->middleware('forbid-banned-user')->only(['backend']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = trans('home.title-front');
        return view('home', $data);
    }

    /**
     * Get the backend page for the application.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function backend()
    {
        $data['title'] = trans('home.title-backend');
        return view('', $data);
    }
}
