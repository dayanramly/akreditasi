@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">

	<table class="responsive-table bordered table-list">
		<thead>
			<tr>
				<th data-field="id">No Soal</th>
				<th data-field="name">Jawaban</th>
				<th data-field="price">Upload Hasil</th>
				<th data-field="price">Status</th>
				<th data-field="price"></th>
			</tr>
		</thead>

		<tbody>
			{{-- {{{json_encode($hasil->jawaban)}}} --}}
			{{-- @foreach (json_encode($hasil->jawaban) as $hasilList) --}}
			{{-- {{{$hasilList}}} --}}
{{-- 			<tr>
				<td>1</td>
				<td>a</td>
				<td>C:\xampp\htdocs\akreditasi\resources\views\page</td>
				<td class="status-jawaban complete"><p>Lengkap</p></td>
				<td>
					<a class="waves-effect waves-light btn btn-flat">Lihat</a>
				</td>
			</tr>	 --}}
			{{-- @endforeach		 --}}
{{-- 			<tr>
				<td>2</td>
				<td>c</td>
				<td>C:\xampp\htdocs\akreditasi\resources\views\now</td>
				<td class="status-jawaban complete"><p>Lengkap</p></td>
				<td>
					<a class="waves-effect waves-light btn btn-flat">Lihat</a>
				</td>
			</tr> --}}
{{-- 			<tr>
				<td>3</td>
				<td>-</td>
				<td>-</td>
				<td class="status-jawaban uncomplete"><p>Belum Lengkap</p></td>
				<td>
					<a href="#" class="waves-effect waves-light btn orange" style="color:#fff"><i class="material-icons right">trending_flat</i>Lanjut</a>
				</td>
			</tr> --}}
		</tbody>
	</table>

</div>
@stop