@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12 center" style="margin-bottom:15px;">
	Status Asesor = @if(!empty($jawaban->selesai))
	<span class="home-status light-green accent-4">Sudah Lengkap</span>
	@else
	<span class="home-status red">Belum Lengkap</span>
	@endif
</div>

@if (!empty($identitas))
<div class="row">
	<div class="col s12">
		<div class="card-panel teal">
			<div class="row" style="margin:0; padding:0;">
				<div class="col s10">
					<ul class="white-text list-panel">
						<li><p>Sekolah</p><span>{{{$identitas->sekolah}}}</span></li>
						<li><p>Program Keahlian</p><span>{{{$identitas->progli}}}</span></li>
						<li><p>Yayasan</p><span>{{{$identitas->yayasan}}}</span></li>
						<li><p>Alamat</p><span>{{{$identitas->alamat}}}</span></li>
					</ul>
				</div>
				<div class="col s2">
					<a href="/lihatdata/{{{$identitas->user_id}}}" class="btn waves-effect waves-light orange darken-1" type="submit" name="action">Lihat Data
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
@endif

<div class="col s12">
	<form method="POST">
		{!! csrf_field() !!}
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
				<?php 
				$jawaban = json_decode($hasil->jawaban, true);
				?>

				@for($i=1;$i<186;$i++)

				@if(!empty($jawaban[$i]))
				<tr>
					<td>{{{$jawaban[$i]['no']}}}</td>
					<td>{{{$jawaban[$i]['jawaban']}}}</td>
					<td class="fileupload">
						@if(!empty($jawaban[$i]['file']))
						{{{$jawaban[$i]['file']}}}
						@else
						Belum Upload Foto
						@endif
					</td>

					@if((!empty($jawaban[$i]['jawaban']))&&(!empty($jawaban[$i]['file'])))
					<td class="status-jawaban complete">
						<p>Lengkap</p>
						@else
						<td class="status-jawaban uncomplete">
							<p>Belum Lengkap</p>
							@endif
						</td>
						<td><a class="waves-effect waves-light btn light-green lighten-2" href="/pertanyaan/{{{$hasil->user_id}}}?page={{{$i}}}">Lihat</a></td>
					</tr>
					@else
					<tr>
						<td>{{{$i}}}</td>
						<td colspan="4">
							Belum Diisi
						</td>
						{{-- <td><a class="waves-effect waves-light btn" href="/pertanyaan?page={{{$i}}}">Isi</a></td> --}}
					</tr>
					@endif
					@endfor
				</tbody>
			</table>

			<div class="row" style="margin-top:50px;">
				<div class="col s6 offset-s3 center">
					<button type="submit" name="updatehasil" class="btn teal" value="0">Belum Lengkap</button>
					<button type="submit" name="updatehasil" class="btn orange darken-4" value="1">Lengkap</button>
				</div>
			</div>
		</form>
	</div>
	@stop