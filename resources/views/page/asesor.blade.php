@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">

	<table class="responsive-table striped">
		<thead>
			<tr>
				<th data-field="id">Nama</th>
				<th data-field="name">Sekolah/Madrasah</th>
				<th data-field="price">Program Keahlian</th>
				<th data-field="price">Status</th>
				<th data-field="price"></th>
			</tr>
		</thead>

		<tbody>
			@if (!empty($dataUser))
			<tr>
				<td>{{{Auth::user()->uname}}}</td>
				<td>{{{$dataUser->sekolah}}}</td>
				<td>{{{$dataUser->progli}}}</td>
				<td class="status-jawaban complete"><p>Lengkap</p></td>
				<td>
					<a href="#" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">assignment</i>Hasil</a>
				</td>
			</tr>
			@else
			<tr><td>Belum ada data</td></tr>
			@endif
{{-- 			<tr>
				<td>Dayan Ramly Ramadhan</td>
				<td>SMK N 1 Purbalingga</td>
				<td>Teknik Komputer dan Jaringan</td>
				<td class="status-jawaban uncomplete"><p>Belum Lengkap</p></td>
				<td>
					<a href="#" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">assignment</i>Hasil</a>
				</td>
			</tr> --}}
		</tbody>
	</table>

</div>
@stop