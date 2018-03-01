<?php
use Illuminate\Support\Facades\Input;
?>

@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::model($group, [
			'route' => ['group.addmember', $group->id],
			'class' => 'form-horizontal'
		]) !!}
		<div class="text-center">
			<h2>Add Member</h2>
			<h3>Group Name: {{$group->name}}</h3>
		</div>
		<div class="form-group row">
			<div class="col-sm-9">
			</div>
		</div>
		<div class="form-group">
			<table class="table table-striped task-table">
				<thead>
					<th>Membership_no</th>
					<th>Name</th>
					<th>Select</th>
				</thead>
				<tbody>
					@foreach($members as $member)
					<tr>
						<td>{{ $member->membership_no }}</td>
						<td>{{ $member->name }}</td>
						<td>
							{!! Form::checkbox('member_id[]', $member->id, in_array($member->id, $existsMembers)) !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="form-group row text-center">
			<div class="col-sm-offset-3 col-sm-6">
				{!!Form::button('Save', [
					'type' => 'submit',
					'class'=> 'btn btn-primary',
				]) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection