<?php

use App\Common;

?>

@extends('layouts.app')

@section('content')

	<div class="container">
		@if (count($divisions) > 0)
		<table class="table table-striped task-table">
			<thead>
				<th>No.</th>
				<th>Code</th>
				<th>Name</th>
				<th>City</th>
				<th>State</th>
				<th>Create</th>
				<th>Actions</th>
			</thead>

			<tbody>
				@foreach ($divisions as $i => $division)
				<tr>
					<td class="table-text">
						<div>{{ $i + 1 }}</div>
					</td>
					<td class="table-text">
						<div>
							{!! link_to_route(
								'division.show',
								$title = $division->code,
									$parameters = [
										'id' => $division->id,
									]
							) !!}
						</div>	
					</td>
					<td class="table-text">
						{{ $division->name }}
					</td>
					<td class="table-text">
						{{ $division->city }}
					</td>
					<td class="table-text">
						{{ Common::$states[$division->state] }}
					</td>
					<td class="table-text">
						{{ $division->created_at }}
					</td>
					<td class="table-text">
						<div>
							{!! link_to_route(
								'division.edit',
								$title = 'Edit',
								$parameters = [
									'id' => $division->id,
								]
							) !!}
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else
		<div>
			No Records Found!
		</div>

		@endif
	</div>




@endsection

