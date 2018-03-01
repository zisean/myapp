@extends('layouts.app')

@section('content')

	<div class="container">
		<table class="table table-striped task-table">
			<thead>
				<tr>
					<th>Attributes</th>
					<th>Values</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Code</td>
					<td>{{ $group->code }}</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>{{ $group->name }}</td>
				</tr>
				<tr>
					<td>Description</td>
					<td>{{ $group->description }}</td>
				</tr>
				<tr>
					<td>Members</td>
					@if (count($group->members) > 0)
					<td>
					@foreach ($group->members as $member)
						<p>{{ $member->name }}</p>
					@endforeach
					</td>
					@else
					<td>No Member was found.</td>
					@endif
				</tr>

			</tbody>
		</table>
	</div>

@endsection