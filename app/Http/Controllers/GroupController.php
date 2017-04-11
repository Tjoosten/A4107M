<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data['kapoenen']         = '';
        $data['welpen']           = '';
        $data['jong-jong-givers'] = '';
        $data['givers']           = '';

        return view('', $data);
    }

    public function show()
    {
        return view('groups.show');
    }
}
