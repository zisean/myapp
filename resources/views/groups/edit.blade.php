<?php
use App\Common;
?>

@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::model($group, [
			'route'	=> ['group.update', $group->id],
			'method'=> 'put',
			'class' => 'form-horizontal' 
		]) !!}

		<div class="text-center" style="padding-bottom: 10px">
			<h2>Update <span style="font-weight: bold;">{{ $group->name }}</span> Group</h2>
		</div>

		<!-- Code -->
		<div class="form-group row">
			{!! Form::label('group-code', 'Code', [
				'class' => 'control-label col-sm-3'
			])!!}

			<div class="col-sm-9">
				{!! Form::text('code', $group->code, [
					'id'		=> 'group-code',
					'class'		=> 'form-control',
					'maxlength'	=> 3,
				]) !!}
			</div>
		</div>

		<!-- Name -->
		<div class="form-group row">
			{!! Form::label('group-name', 'Name', [
				'class' => 'control-label col-sm-3'
			]) !!}

			<div class="col-sm-9">
				{!! Form::text('name', $group->name, [
					'id'		=> 'group-name',
					'class'		=> 'form-control',
					'maxlength'	=> 100
				]) !!}
			</div>
		</div>

		<!-- Description -->
		<div class="form-group row">
			{!! Form::label('group-description', 'Description',[
				'class' => 'control-label col-sm-3'
			]) !!}

			<div class="col-sm-9">
				{!! Form::textarea('description', $group->description, [
					'id'		=> 'group-description',
					'class'		=> 'form-control',
				]) !!}
			</div>
		</div>

		<div class="form-group row text-center">
			<div class="col-sm-offset-3 col-sm-6">
				{!! Form::button('Save', [
					'type'	=> 'submit',
					'class'	=> 'btn btn-primary',
				]) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@endsection