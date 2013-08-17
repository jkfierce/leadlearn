@extends('layouts.base')

@section('content')
<div class="row-fluid">
	<div class="span8">
		<h3>Class Attendance</h3>
		{{ Form::open(array('url'=> 'attendance')); }}
		<div class="checkboxes">
			{{ Form::label('Child1', 'Child1'); }}
			{{ Form::checkbox('Child1', 'Yes'); }}
		</div>
		<div class="checkboxes">
			{{ Form::label('Child2', 'Child2'); }}
		{{ Form::checkbox('Child2', 'Yes'); }}
		</div>
		<div class="checkboxes">
			{{ Form::label('Child3', 'Child3'); }}
		{{ Form::checkbox('Child3', 'Yes'); }}
		</div>
		{{ Form::submit('Submit Attendance'); }}
		{{ Form::close(); }}
	</div>
	<div class="span4">
		<h3>Sidebar</h3>
		<p>For Links and Information</p>
	</div>
</div>
@stop