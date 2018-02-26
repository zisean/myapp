<?php
?>

@extends('layouts.app')

@section('content')

	<div class="container">
		
		@if(count($groups) > 0)
		<table class="table table-striped task-table">
			<thead>
				<th>No.</th>
				<th>Code</th>
				<th>Name</th>
				<th>Description</th>
				<th>Actions</th>
			</thead>

			<tbody>
				@foreach ($groups as $i => $group)
				<tr>
					<td>{{ $i+1 }}</td>
					<td>{{ $group->code }}</td>
					<td>{{ $group->name }}</td>
					<td>{{ $group->description }}</td>
					<td>
						{!! link_to_route(
							'group.edit',
							$title = "Edit Group",
							$parameter = ['id' => $group->id]
						) !!}
						|
						{!! link_to_route(
							'group.showMember',
							$title = "Add Member",
							$parameter = ['id' => $group->id]
						) !!}
					</td> 
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>

@endsection