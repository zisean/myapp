<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemberController extends Controller
{
    //
    public function index() {

    	return view('members.index',[]);
    }

    public function create() {
    	
    	$member = new Member();

    	return view('members.create', ['member' => $member]);
    }
}
