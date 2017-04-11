<?php

namespace App\Http\Controllers;

use App\Lease;
use Cornford\Googlmapper\Mapper as Mapper;
use Illuminate\Http\Request;

/**
 * Class LeaseController
 *
 * @package App\Http\Controllers
 */
class LeaseController extends Controller
{
    /**
     * The lease database model.
     *
     * @var Lease
     */
    private $lease;

    /**
     * LeaseController constructor.
     *
     * @param Lease $lease
     */
    public function __construct(Lease $lease)
    {
        $this->lease = $lease;
    }

    public function index()
    {
        return view('lease.index');
    }

    public function leaseRequest()
    {
        return view('lease.request');
    }

    public function domainAccess()
    {
        return view('lease.access');
    }
}
