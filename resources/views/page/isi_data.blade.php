@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">
	{{-- {{$pertanyasan}} --}}
	<h3>Data Identitas Program Keahlian</h3>

	<ol>
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="programkeahlian" type="text" class="validate">
					<label for="programkeahlian">Program Keahlian</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="sekolah" type="text" class="validate">
					<label for="sekolah">Sekolah/Madrasah</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="nssm" type="text" class="validate">
					<label for="nssm">Nomor Statistik Sekolah/Madrasah (NSS/M)</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="alamat" type="text" class="validate">
					<label for="alamat">Alamat Sekolah/Madrasah</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="kecamatan" type="text" class="validate">
					<label for="kecamatan">Kecamatan</label>
				</div>				
				<div class="input-field col s6">
					<input id="kabupaten" type="text" class="validate">
					<label for="kabupaten">Kabupaten/Kota</label>
				</div>
			</div>			
			<div class="row">
				<div class="input-field col s6">
					<input id="provinsi" type="text" class="validate">
					<label for="provinsi">Provinsi</label>
				</div>				
				<div class="input-field col s6">
					<input id="kodepos" type="text" class="validate">
					<label for="kodepos">Kode Pos</label>
				</div>
			</div>			
			<div class="row">
				<div class="input-field col s6">
					<input id="telepon" type="tel" class="validate">
					<label for="telepon">Telepon dan Faksimil</label>
				</div>				
				<div class="input-field col s6">
					<input id="email" type="email" class="validate">
					<label for="email">E-Mail</label>
				</div>
			</div>
		</li>
		<li>
			Status Sekolah/Madrasah
			<p>
				<input name="group1" type="radio" id="negeri" />
				<label for="negeri">Negeri</label>
			</p>
			<p>
				<input name="group1" type="radio" id="swasta" />
				<label for="swasta">Swasta</label>
			</p>
		</li>
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="namayayasan" type="text" class="validate">
					<label for="namayayasan">Nama Yayasan *)</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="noakte" type="text" class="validate">
					<label for="noakte">No Akte Pendirian/Kelembagaan</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="tahunberdiri" type="text" class="validate">
					<label for="tahunberdiri">Tahun Berdiri Sekolah/Madrasah</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<input id="statusakreditasi" type="text" class="validate">
					<label for="statusakreditasi">Status Akreditasi/Tahun</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="visisekolah" class="materialize-textarea"></textarea>
					<label for="visisekolah">Visi Sekolah/Madrasah</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="misisekolah" class="materialize-textarea"></textarea>
					<label for="misisekolah">Misi Sekolah/Madrasah</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="tujuansekolah" class="materialize-textarea"></textarea>
					<label for="tujuansekolah">Tujuan Sekolah/Madrasah</label>
				</div>
			</div>
		</li>		
		<li>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="tujuanprogram" class="materialize-textarea"></textarea>
					<label for="tujuanprogram">Tujuan Program Keahlian</label>
				</div>
			</div>
		</li>
	</ol>

	<div class="col s12 center">
		<a href="{!! URL::to('/pertanyaan') !!}" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">send</i>Lanjut ke Pertanyaan</a>
	</div>

</div>
@stop