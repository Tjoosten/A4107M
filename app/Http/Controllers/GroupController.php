<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Http\Requests\GroupValidator;
use Illuminate\Http\Request;

/**
 * Class GroupController
 * @package App\Http\Controllers
 */
class GroupController extends Controller
{
    /**
     * @var Groups
     */
    private $group;

    /**
     * GroupController constructor.
     *
     * @param Groups $group
     */
    public function __construct(Groups $group)
    {
        $this->middleware('auth')->only(['edit', 'update']);
        $this->middleware('lang');

        $this->group = $group;
    }

    public function index()
    {
        $data['kapoenen']         = $this->group->getGroup('kapoenen');
        $data['welpen']           = $this->group->getGroup('welpen');
        $data['jong-jong-givers'] = $this->group->getGroup('jong-givers');
        $data['givers']           = $this->group->getGroup('givers');
        $data['jins']             = $this->group->getGroup('jins');
        $data['leiding']          = $this->group->getGroup('leiding');

        $data['title'] = trans('groups.title-index');

        return view('groups.index', $data);
    }

    /**
     * Show a specific group in the website.
     *
     * @param  int $groupId The group id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($groupId)
    {
        $data['group'] = $this->group->find($groupId);
        $data['title'] = trans('groups.title-show', ['name' => $data->title]);

        return view('groups.show', $data);
    }

    /**
     * The update view for the group.
     *
     * @param  int $groupId The group id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($groupId)
    {
        $data['group'] = $this->group->find($groupId);
        $data['title'] = trans('groups.edit', ['name' => $data['group']->title]);

        return view('groups.update', $data);
    }

    /**
     * The group update in the database.
     *
     * @param  GroupValidator $input
     * @param  int            $groupId The group id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(GroupValidator $input, $groupId)
    {
        $group = $this->group->find($groupId);

        if ($group->update($input->except(['_token']))) {
            session()->flash('class', 'alert alert-success');
            session()->flash('message', trans('groups.update', ['name' => $group->title]));
        }

        return back();
    }
}
