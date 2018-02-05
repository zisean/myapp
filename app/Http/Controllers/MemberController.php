<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Division;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberController extends Controller
{
    //
    public function index() {

        $members = Member::orderBy('name', 'asc')->get(); 

    	return view('members.index',['members' => $members]);
    }

    public function create() {
    	
    	$member = new Member();
    	$divisions = Division::pluck('name', 'id');

    	return view('members.create', ['member' => $member, 'divisions' => $divisions]);
    }

    public function store(Request $request) {

    	$member = new Member;
    	$member->fill($request->all());
    	$member->save();

    	return redirect()->route('member.index');
    }

    public function edit($id) {
        $member = Member::find($id);
        $divisions = Division::pluck('name', 'id');

        if(!$member) throw new ModelNotFoundException;

        return view('members.edit', ['member' => $member, 'divisions' => $divisions]);
        
    }

    public function update(Request $request, $id){
        $member = Member::find($id);

        if (!$member) throw new ModelNotFoundException;

        $member->fill($request->all());

        $member->save();

        return redirect()->route('member.index');
        
    }

    public function show($id) {
        $member = Member::find($id);

        if(!$member) throw new ModelNotFoundException;

        return view('members.show', ['member' => $member]);
        
    }

}
