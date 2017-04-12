<?php

namespace Sijot\Http\Controllers;

use Sijot\Http\Requests\LeaseNotificationValidator;
use Sijot\Http\Requests\LeaseValidator;
use Sijot\Lease;
use Sijot\LeaseChanges;
use Sijot\LeaseStatus;
use Sijot\Traits\FlashMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class LeaseController
 *
 * @package Sijot\Http\Controllers
 */
class LeaseController extends Controller
{
    use FlashMessage;

    /**
     * The lease database model.
     *
     * @var Lease
     */
    private $lease;

    /**
     * Lease Notitions model.
     *
     * @var LeaseChanges
     */
    private $notition;

    /**
     * The lease status model.
     *
     * @var LeaseStatus
     */
    private $status;

    /**
     * LeaseController constructor.
     *
     * @param Lease        $lease
     * @param LeaseStatus  $status
     * @param LeaseChanges $notition
     */
    public function __construct(Lease $lease, LeaseStatus $status, LeaseChanges $notition)
    {
        $this->middleware('lang');
        $this->middleware('forbid-banned-user')->only([
            'status', 'addNotition', 'editNotition', 'removeNotition'
        ]);

        $this->lease    = $lease;
        $this->notition = $notition;
        $this->status   = $status;
    }

    /**
     * Get the front-index page for the front-end.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['title'] = trans('lease.title-index');
        return view('lease.index', $data);
    }

    /**
     * Lease request page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function leaseRequest()
    {
        $data['title'] = trans('lease.title-request');
        return view('lease.request', $data);
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
        } elseif (auth()->check() && $create) { // There is an authencated user
            // TODO: Implement notification.
        }

        return back();
    }

    /**
     * Get the lease calendar.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calendar()
    {
        $data['title'] = trans('lease.title-calendar');
        return view('lease.calendar', $data);
    }

    /**
     * Change the status for a lease.
     *
     * @param  int $leaseId Thelease request id in the database.
     * @param  int $statusId The status id for the lease.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function status($leaseId, $statusId)
    {
        // TODO: Register route.

        switch ($statusId) {
            case 1; // New request
                $db['status'] = $this->status->where('name', trans('lease.status-new'))->first()->get();
                break;
            case 2: // Option.
                $db['status'] = $this->status->where('name', trans('lease.status-option'))->first()->get();
                break;
            case 3: // Confirmed.
                $db['status'] = $this->status->find('name', trans('lease.status-confirmed'))->first()->get();
                break;
            default:
                $this->flashMessage(trans('lease.status-error'), 'danger');
                return back();
        }

        if ($this->lease->find($leaseId)->update(['status_id' => $db['status']->id])) { // The record has been updated.
            $this->flashMessage(trans('lease.status-success', ['success' => $db['status']->name]), 'success');
        }

        return back();
    }

    /**
     * Add a lease notition in the database.
     *
     * @param  LeaseNotificationValidator $input
     * @param  int $notitionId The notition id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addNotition(LeaseNotificationValidator $input, $notitionId)
    {
        if ($this->notition->create($input->except(['_token']))) { // Notification has been added.
            $this->flashMessage(trans('lease.notition-create'), 'success');
        }

        return back();
    }

    /**
     * Edit a lease notition in the database.
     *
     * @param  LeaseNotificationValidator $input
     * @param  int $notitionId The notition in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editNotition(LeaseNotificationValidator $input, $notitionId)
    {
        $notification = $this->notition->find($notitionId);

        if ($notification->update($input->except(['_token']))) {
            $this->flashMessage(trans('lease.notition-edit'), 'success');
        }

        return back();
    }

    /**
     * Remove a lease notition in the database.
     *
     * @param  int $notitionId The notition in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeNotition($notitionId)
    {
        if ($this->notition->find($notitionId)->delete()) {
            $this->flashMessage(trans('lease.notition-remove'), 'info');
        }

        return back();
    }

    /**
     * Get the domain access page in the website.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function domainAccess()
    {
        $data['title'] = trans('lease.title-access');
        return view('lease.access', $data);
    }
}
