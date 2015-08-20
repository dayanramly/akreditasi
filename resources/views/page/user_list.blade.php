@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">

	<table class="responsive-table striped">
		<thead>
			<tr>
				{{-- <th data-field="id" class="center">Id</th> --}}
				<th data-field="name">Username</th>
				<th data-field="price" class="center">Group ID</th>
				<th data-field="price" class="right"></th>
			</tr>
		</thead>

		<tbody>
			@foreach($userAll as $u)
			<tr>
				{{-- <td class="center">{!! $u->id !!}</td> --}}
				<td>{!! $u->uname !!}</td>
				<td class="center">{!! $u->group_id !!}</td>
				<td class="right" style="padding-right:25px;">
					<a href="{!! url('user').'/edit/'.$u->id !!}" class="waves-effect waves-light btn orange darken-1 z-depth-0"><i class="material-icons right">assignment</i>Edit</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@stop