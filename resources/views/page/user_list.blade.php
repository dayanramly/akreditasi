@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">

	<table class="responsive-table striped">
		<thead>
			<tr>
				{{-- <th data-field="id" class="center">Id</th> --}}
				<th data-field="name">Username</th>
				<th data-field="price" class="center">Role</th>
				<th data-field="price" class="right"></th>
			</tr>
		</thead>

		<tbody>
			@foreach($userAll as $u)
			@if ($u->group_id == $idAll)
			<tr>
				{{-- <td class="center">{!! $u->id !!}</td> --}}

				<td>{!! $u->uname !!}</td>
				<td class="center">
					
					@if( $u->group_id ===2)
					Asesor
					@elseif( $u->group_id ===3 )
					Public
					@endif
					
				</td>
				<td class="right" style="padding-right:25px;">
					<a href="{!! url('user').'/edit/'.$u->id .'/'.$idAll!!}" class="waves-effect waves-light btn orange darken-1 z-depth-0"><i class="material-icons right">assignment</i>Edit</a>
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>

</div>
@stop