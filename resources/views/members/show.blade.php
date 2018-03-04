<?php
use App\Common;
?>

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
					<td>Membership No.</td>
					<td>{{ $member->membership_no }}</td>
				</tr>
				<tr>
					<td>NRIC</td>
					<td>{{ $member->nric }}</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>{{ $member->name }}</td>
				</tr>

				<tr>
					<td>Gender</td>
					<td>{{ Common::$gender[$member->gender] }}</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>{{ $member->address }}</td>
				</tr>
				<tr>
					<td>Postcode</td>
					<td>{{ $member->postcode }}</td>
				</tr>
				<tr>
					<td>City</td>
					<td>{{ $member->city }}</td>
				</tr>
				<tr>
					<td>State</td>
					<td>{{ Common::$states[$member->state] }}</td>
				</tr>
				<tr>
					<td>Division</td>
					<td>
						{!! link_to_route(
							'division.show',
							$title = $member->division->name,
							$parameters = ['id' => $member->division_id]
						)!!}
					</td>
				</tr>

				<tr>
					<td>Joined Group
					({!! link_to_route(
							'member.showGroup',
							$title = "Join Group",
							$parameters = ['id' => $member->id]
						) !!})</td>
					@if (count($member->groups) > 0)
					<td>
					@foreach ($member->groups as $group)
						<p>{{ $group->name }}</p>	
					@endforeach
					</td>
					@else
					<td>No Group Found</td>
					@endif
				</tr>
			</tbody>
		</table>
	</div>

@endsection