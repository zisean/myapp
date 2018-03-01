<?php
use App\Common;
?>

@extends('layouts/app')

@section('content')

	<div class="container">
		@if (count($members) > 0)

		<table class="table table-striped task-table">
			<thead>
				<th>No.</th>
				<th>Membership No.</th>
				<th>Name</th>
				<th>Address</th>
				<th>Actions</th>
			</thead>

			<tbody>
				@foreach ($members as $i => $member)
				<tr class="table-text">
					<td>{{ $i+1					 	}}</td>
					<td>{!! link_to_route(
							'member.show',
							$title =  $member->membership_no, $parameters = [
								'id' => $member->id,
							]
						)!!}</td>
					<td>{{ $member->name 			}}</td>
					<td>{{ $member->address 	}}</td>
					<td>
						{!! link_to_route(
							'member.edit',
							$title = "Edit",
							$parameters = ['id' => $member->id]
						) !!}
						|
						{!! link_to_route(
							'member.edit',
							$title = "Join Group",
							$parameters = ['id' => $member->id]
						) !!}
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
		@endif 
	</div>


@endsection