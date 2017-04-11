<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Groups database model.
     *
     * @var Groups
     */
    private $groups;

    /**
     * Create a new controller instance.
     *
     * @param Groups $groups
     */
    public function __construct(Groups $groups)
    {
        $this->groups = $groups;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
