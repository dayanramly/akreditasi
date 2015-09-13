@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">

	<table class="responsive-table striped">
		<thead>
			<tr>
				<th data-field="id">Nama</th>
				<th data-field="name">Sekolah/Madrasah</th>
				<th data-field="prodi">Program Keahlian</th>
				<th data-field="status">Status</th>
				<th data-field="act"></th>
			</tr>
		</thead>

		<tbody>
			<?php 
			// print_r(count($dataUser));
			// die();
			?>
			@if (!empty($dataUser))
			@for($i=0;$i<count($dataUser);$i++)
			{{-- @foreach($dataUser as $asesorData) --}}
			<tr>
				<td>{{{$dataUser[$i]->progli}}}</td>
				<td>{{{$dataUser[$i]->sekolah}}}</td>
				<td>{{{$dataUser[$i]->progli}}}</td>
				<td>
					@if(!empty($dataUser[$i]->selesai))
					<span class="home-status light-green accent-4">Sudah Lengkap</span>
					@else
					<span class="home-status red">Belum Lengkap</span>
					@endif
				</td>
				<td>
					<a href="/asesorhasil/{{{$dataUser[$i]->user_id}}}" class="waves-effect waves-light btn"><i class="material-icons right">assignment</i>Hasil</a>
				</td>
			</tr>
			@endfor
			@else
			<tr><td>Belum ada data</td></tr>
			@endif
		</tbody>
	</table>

</div>
@stop