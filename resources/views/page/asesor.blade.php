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
			@if (!empty($dataUser))
			<tr>
				<td>{{{Auth::user()->uname}}}</td>
				<td>{{{$dataUser->sekolah}}}</td>
				<td>{{{$dataUser->progli}}}</td>
				<td>
					@if(!empty($jawaban->selesai))
					Sudah Lengkap
					@else
					Belum Lengkap
					@endif
				</td>
				<td>
					<a href="{!! URL::to('/asesorhasil') !!}" class="waves-effect waves-light btn"><i class="material-icons right">assignment</i>Hasil</a>
				</td>
			</tr>
			@else
			<tr><td>Belum ada data</td></tr>
			@endif
		</tbody>
	</table>

</div>
@stop