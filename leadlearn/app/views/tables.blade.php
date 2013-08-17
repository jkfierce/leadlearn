@extends('layouts.base')

@section('content')
<div class="row-fluid">
	<div class="span8">
		<div class="scroll">
			<table class="table">
				<tr>
					<th>Child ID</th>
					<th>Child</th>
					<th>Classroom</th>
					<th>Program</th>
					<th>Missed Days</th>
				</tr>
				<tr>
					<td>847204</td>
					<td>John Smith</td>
					<td>#202</td>
					<td>Program 2</td>
					<td>3 days</td>
				</tr>
				<tr>
					<td>847204</td>
					<td>John Smith</td>
					<td>#202</td>
					<td>Program 2</td>
					<td>3 days</td>
				</tr>
				<tr>
					<td>847204</td>
					<td>John Smith</td>
					<td>#202</td>
					<td>Program 2</td>
					<td>3 days</td>
				</tr>
				<tr>
					<td>847204</td>
					<td>John Smith</td>
					<td>#202</td>
					<td>Program 2</td>
					<td>3 days</td>
				</tr>
			</table>
		</div>
		<ul class="nav nav-pills">
			<li>
				<a href="#">General Table</a>
			</li>
			<li>
				<a href="#">Absences</a>
			</li>
			<li>
				<a href="#">Attendance Patterns</a>
			</li>
		</ul>
	</div>
	<div class="span4">
		<h3>Sidebar</h3>
		<p>For Links and Information</p>
	</div>
</div>
@stop