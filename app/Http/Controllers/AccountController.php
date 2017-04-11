<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordValidator;
use App\Http\Requests\SettingsValidator;
use App\Traits\FlashMessage;
use App\User;
use Illuminate\Http\Request;

/**
 * Class AccountController
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{
    use FlashMessage; // Used for setting flash messages.

    /**
     * The usr model.
     *
     * @var User
     */
    private $users;

    /**
     * AccountController constructor.
     *
     * @param User $users
     */
    public function __construct(User $users)
    {
        $this->middleware('auth'); // Authencation middleware
        $this->middleware('lang'); // Translation  middleware

        $this->users = $users;
    }

    /**
     * Show the information for the user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // TODO: Register route. 

        $data['title'] = trans('account.title-settings', ['name' => auth()->user()->name]);
        return view('account.settings', $data);
    }

    /**
     * Update the account password.
     * 
     * @param  PasswordValidator $input      The given user input.
     * @param  int               $userId     The id in the database for the user.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(PasswordValidator $input, $userId)
    {
        // TODO: Register route. 

        if ((int) $userId === auth()->user()->id) { // The user is the same then the given user.
            if ($this->users->find($userId)->update($input->all(['_token']))) { // The user has been updated.
                $this->flashMessage(trans('account.password-update'), 'success');
            }
        }

        return back();
    }

    /**
     * Update the account settings. 
     *
     * @param  SettingsValidator $input     The given user input. 
     * @param  int $userId                  The id in the database for the user. 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSettings(SettingsValidator $input, $userId)
    {
        // TODO: Register route.

        if ((int) $userId === auth()->user()->id) { // The user is the same then the given user. 
            if ($this->users->find($userId)->update($input->all(['_token']))) { // The user has been updated.
                $this->flashMessage(trans('account.settings-update'), 'success');
            }
        }

        return back();
    }
}
