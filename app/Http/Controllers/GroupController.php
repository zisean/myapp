<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Member;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderBy('name', 'asc')->get();
        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = new Group();

        return view('groups.create', ['group' => $group]);
    }

    public function addmember($id, Request $request) {
        $group = Group::find($id);
        $groups = Group::orderBy('name', 'asc')->get();
        $selectedMember = $request->input('member_id');
        
        $group->members()->sync($selectedMember);

        return view('groups.index', ['groups' => $groups]);
    }

    public function showMember($id) {
        $checked = false;
        $group = Group::find($id);
        $members = Member::orderBy('name','asc')->get();

        if(!$group) throw new ModelNotFoundException;
        
        $existsMembers = $group->members()->pluck('id')->toArray();

        return view('groups.showMember', ['group' => $group, 'members' => $members, 'existsMembers' => $existsMembers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Group;
        $group->fill($request->all());
        $group->save();

        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);

        if(!$group) throw new ModelNotFoundException;

        return view('groups.show', ['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
