<?php

namespace App\Http\Controllers;

use App\Http\Requests\BanValidator;
use App\Traits\FlashMessage;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    use FlashMessage;

	/**
	 * The users model for the database.
	 *
	 * @var User
	 */
	private $users;

	/**
     * UsersController constructor.
     *
     * @param User $users
     */
    public function __construct(User $users) 
    {
        $this->middleware('lang');
        $this->middleware('forbid-banned-user');

    	$this->users = $users;
    }

    /**
     * Get an overview off all the users in the system.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['title'] = trans('users.title-index');
        $data['users'] = $this->users->paginate(15);

        return view('users.index', $data);
    }

    /**
     * Block a user in the system.
     *
     * @param  BanValidator $input  The user given input.
     * @param  int          $userId The user id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function block(BanValidator $input, $userId)
    {
        // TODO: register the route.

        try {
            $user = $this->users->findOrfail($userId);

            if ($user->isNotBanned()) {
                $user->bans()->create([
                    'comment'    => $input->comment,
                    'expired_at' => $input->expire,
                ]);
            }
        } catch (ModelNotFoundException $exception) {
            $this->flashMessage(trans('users.no-user'), 'danger');
        }

        return back();
    }

    /**
     * Unblock a user in the system.
     *
     * @param  int $userId The user id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unblock($userId)
    {
        // TODO: register the route.

        try { // Try to find the user.
            $user = $this->users->findOrFail($userId);

            if ($user->isBanned()) { // The if the user is banned.
                $user->unban();
                $this->flashMessage('users.unban', ['name' => $user->name], 'success');
            }
        } catch (ModelNotFoundException $exception) { // The user is not found. So set flash message and redirect back.
            $this->flashMessage(trans('users.no-user'), 'danger');
        }

        return back();
    }

    /**
     * Delete a user from the application.
     *
     * @param  int $userId The user id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($userId)
    {
        // TODO: Register the route.

        try {
            $user = $this->users->findOrFail($userId);

            if ($user->delete()) { // The user has been deleted.
                $this->flashMessage(trans('users.delete', ['name' => $user->name]), 'danger');
            }

        } catch (ModelNotFoundException $exceptiopn) {
            $this->flashMessage(trans('users.no-user'), 'danger');
        }

        return back();
    }
}
