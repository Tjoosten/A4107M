<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaseValidator;
use App\Lease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $this->middleware('lang'); // Language middleware.
        $this->middleware();

        $this->lease = $lease;
    }

    /**
     * Get the front-index page for the front-end.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('lease.index');
    }

    /**
     * Lease request page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function leaseRequest()
    {
        return view('lease.request');
    }

    /**
     * Store a new lease request in the system.
     *
     * @param  LeaseValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function leaseStore(LeaseValidator $input)
    {
        $create = $this->lease->create($input->all(['_token']));

        if (! auth()->check() && $create) { // There is no user authencated.
            Mail::to()->queue();
            Mail::to($input->email)->queue();
        } elseif(auth()->check() && $create) { // There is an authencated user
            // TODO: Implement notification.
        }

        return back();
    }

    public function calendar()
    {
        return view();
    }

    /**
     * Get the domain access page in the website.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function domainAccess()
    {
        return view('lease.access');
    }
}
