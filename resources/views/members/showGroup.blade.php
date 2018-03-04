@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::model($member, [
			'route' => ['member.joinGroup', $member->id],
			'class' => 'form-horizontal'
		]) !!}

		<div class="text-center">
			<h2>Join Group</h2>
			<h3>Member's Name: {{ $member->name }}</h3>
		</div>

		<div class="form-group row">
			<table class="table table-striped task-table">
				<thead>
					<th>Group code</th>
					<th>Group Name</th>
					<th>Select</th>
				</thead>
				<tbody>
					@foreach($groups as $group)
					<tr>
						<td>{{ $group->code }}</td>
						<td>{{ $group->name }}</td>
						<td>
							{!! Form::checkbox('group_id[]', $group->id, in_array($group->id, $existedGroups)) !!}
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