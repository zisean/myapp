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

    	return view('members.index',[]);
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


}
