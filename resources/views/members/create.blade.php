<?php

use App\Common;

?>

@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::model($member,[
			'route' => ['member.store'],
			'class' => 'form-horizontal'
		])!!}

			<!-- Membership no. -->
		<div class="form-group row">
			{!! Form::label('member-membership_no', 'Membership No.', [
				'class' => 'control-label col-sm-3',
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('membership_no', null, [
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
				{!! Form::text('nric', null, [
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
				{!! Form::text('name', null, [
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
				{!! Form::radio('gender', 'g', [
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
				{!! Form::textarea('address', null, [
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
				{!! Form::text('postcode', null, [
					'id'		=> 'member-postcode',
					'class'		=> 'form-control',
					'maxlength'	=> 5
				]) !!}
			</div>
		</div>
	</div>



@endsection