@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12 center" style="padding-top: 20px;">

	<h3>SELAMAT DATANG</h3>
	<h6>INSTRUMEN AKREDITASI SEKOLAH MENENGAH KEJURUAN/MADRASAH ALIYAH KEJURUAN(SMK/MAK)</h6>
	<div class="divider" style="margin:40px 0px;"></div>
	<div class="row">
		<div class="col s12" style="background:#fafafa;margin-bottom:15px;padding:15px;">
			<table class="responsive-table">
				<thead>
					<tr>
						<th data-field="id">Nama</th>
						<th data-field="name">Sekolah/Madrasah</th>
						<th data-field="price">Program Keahlian</th>
						<th data-field="price"></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Dayan Ramly Ramadhan</td>
						<td>SMK N 1 Purbalingga</td>
						<td>Teknik Komputer dan Jaringan</td>
						<td>
							<a href="{!! URL::to('/lihathasil') !!}" class="waves-effect waves-light btn"><i class="material-icons right">assignment</i>Hasil</a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="divider"></div>
			<p>Anda belum mengisi data, silakan isi data terlebih dahulu.</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
			<a href="{!! URL::to('/isidata') !!}" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">send</i>Mulai Pengisian Data</a>
		</div>
	</div>
</div>
@stop