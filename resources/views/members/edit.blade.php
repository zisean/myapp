<?php
use App\Common;
?>

@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::model($member, [
			'route' => ['member.update', $member->id],
			'class' => 'form-horizontal'
		]) !!}

		<div class="text-center" style="padding-bottom: 10px">
			<h2>Edit Member</h2>
		</div>

			<!-- Membership no. -->
		<div class="form-group row">
			{!! Form::label('member-membership_no', 'Membership No.', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('membership_no', $member->membership_no, [
					'id'		=> 'member-membership_no',
					'class'		=> 'form-control',
					'maxlength' => 10,
				]) !!}
			</div>
		</div>

		<!-- NRIC -->
		<div class="form-group row">
			{!! Form::label('member-nric', 'NRIC', [
				'class' => 'control-label col-sm-3'
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('nric', $member->nric, [
					'id' 		=> 'member-nric',
					'class'		=> 'form-control',
					'maxlength' =>	12,  
				]) !!}
			</div>
		</div>

		<!-- Name -->
		<div class="form-group row">
			{!!Form::label('member-name', 'Name', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('name', $member->name, [
					'id'		=> 'member-name',
					'class'		=> 'form-control',
					'maxlength' => 100, 
				]) !!}
			</div>
		</div>

		<!-- Gender -->
		<div class="form-group row">
			{!! Form::label('member-gender', 'Gender', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::label('member-gender', 'Male', [
					'class' => 'control-label'
				]) !!}
				{!! Form::radio('gender', 'm', [
					'id'		=> 'member-gender',
					'class'		=> 'form-control'
				]) !!}

				{!! Form::label('member-gender', 'Female', [
					'class' => 'control-label'
				]) !!}
				{!! Form::radio('gender', 'f', [
					'id'		=> 'member-gender',
					'class'		=> 'form-control'
				]) !!}

			</div>
		</div>

		<!-- Address -->
		<div class="form-group row">
			{!! Form::label('member-address', 'Address', [
				'class' => 'control-label col-sm-3',
			]) !!}
			<div class="col-sm-9">
				{!! Form::textarea('address', $member->address, [
					'id' 	=> 'member-address',
					'class' => 'form-control',
				]) !!}
			</div>
		</div>

		<!-- Postcode -->
		<div class="form-group row">
			{!! Form::label('member-postcode', 'Postcode', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('postcode', $member->postcode, [
					'id'		=> 'member-postcode',
					'class'		=> 'form-control',
					'maxlength'	=> 5
				]) !!}
			</div>
		</div>

		<!-- City -->
		<div class="form-group row">
			{!! Form::label('member-city', 'City', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('city', $member->city, [
					'id'		=> 'member-city',
					'class'		=> 'form-control',
					'maxlength'	=> 50,
				]) !!}
			</div>
		</div>

		<!-- State -->
		<div class="form-group row">
			{!! Form::label('member-state', 'State', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::select('state', Common::$states, $member->state, [
					'class'			=> 	'form-control',
					'placeholder'	=>	'- Select State -',		
				]) !!}
			</div>
		</div>

		<!-- Phone -->
		<div class="form-group row">
			{!! Form::label('member-phone', 'Phone No.', [
				'class' => 'control-label col-sm-3'
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('phone', $member->phone, [
					'id'		=> 	'member-phone',
					'class'		=>	'form-control',
					'maxlength'	=> 	20,
				]) !!}
			</div>
		</div>

		<!-- Division ID -->
		<div class="form-group row">
			{!! Form::label('member-division', 'Division', [
				'class'	=> 'control-label col-sm-3'
			]) !!}

			<div class="col-sm-9">

				{!! Form::select('division_id', $divisions, $member->division_id, [
					'class'			=>	'form-control',
					'placeholder'	=>	'- Select Division -'
				]) !!}

			</div>
		</div>


		<!-- Submit Button -->
		<div class="form-group row text-center">
			<div class="col-sm-offset-3 col-sm-6">
				{!! Form::button('Update', [
					'type'	=> 'submit',
					'class'	=> 'btn btn-primary',
				]) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection