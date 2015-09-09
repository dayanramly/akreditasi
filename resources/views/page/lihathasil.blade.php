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
			<?php $jawaban = json_decode($hasil->jawaban, true);
			// print_r($jawaban);
			// die();
			?>
			
			@for($i=1;$i<186;$i++)
			<?php 
				// print_r($jawaban[$i]);
				// die();
			?>

			@if(!empty($jawaban[$i]))
			<tr>
				<td>{{{$jawaban[$i]['no']}}}</td>
				<td>{{{$jawaban[$i]['jawaban']}}}</td>
				<td>
					@if(!empty($jawaban[$i]['file']))
					{{{$jawaban[$i]['file']}}}
					@else
					Belum diisi
					@endif
				</td>
				<td>
					@if((!empty($jawaban[$i]['jawaban']))&&(!empty($jawaban[$i]['file'])))
						Lengkap
					@else
						Belum Lengkap
					@endif
				</td>
				<td><a class="waves-effect waves-light btn orange" href="pertanyaan?page={{{$i}}}">Lihat</a></td>
			</tr>
			@else
			<tr>
				<td>{{{$i}}}</td>
				<td colspan="3">
					Belum diisi
				</td>
				<td><a class="waves-effect waves-light btn" href="pertanyaan?page={{{$i}}}">Isi</a></td>
			</tr>
			@endif
			@endfor
			{{-- @else --}}

			{{-- @endif --}}

			{{-- @endfor --}}
{{-- 					@if()
					@else

					@endif --}}
					
					{{-- {{{print_r(json_decode($hasil))}}} --}}
					{{-- {{{$hasil->jawaban}}} --}}
{{-- 			@foreach($hasil as $hasilList)
				{{{$hasilList}}}
				@endforeach --}}
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