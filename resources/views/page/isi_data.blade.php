@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">
	{{-- {{$pertanyasan}} --}}
	<h4>Data Identitas Program Keahlian</h4>
	<div class="divider"></div>
	<form method="POST">
		{!! csrf_field() !!}
		<ol>
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="progli" id="progli" type="text" class="validate" required="">
						<label for="progli">Program Keahlian</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="sekolah" id="sekolah" type="text" class="validate" required="">
						<label for="sekolah">Sekolah/Madrasah</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="nss" id="nss" type="text" class="validate" required="">
						<label for="nss">Nomor Statistik Sekolah/Madrasah (NSS/M)</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="alamat" id="alamat" type="text" class="validate" required="">
						<label for="alamat">Alamat Sekolah/Madrasah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input name="kec" id="kec" type="text" class="validate" required="">
						<label for="kec">Kecamatan</label>
					</div>				
					<div class="input-field col s6">
						<input name="kab" id="kab" type="text" class="validate" required="">
						<label for="kab">Kabupaten/Kota</label>
					</div>
				</div>			
				<div class="row">
					<div class="input-field col s6">
						<input name="provinsi" id="provinsi" type="text" class="validate" required="">
						<label for="provinsi">Provinsi</label>
					</div>				
					<div class="input-field col s6">
						<input name="kodepos" id="kodepos" type="text" class="validate" required="">
						<label for="kodepos">Kode Pos</label>
					</div>
				</div>			
				<div class="row">
					<div class="input-field col s6">
						<input name="telp" id="telp" type="tel" class="validate" required="">
						<label for="telp">Telepon dan Faksimil</label>
					</div>				
					<div class="input-field col s6">
						<input name="email" id="email" type="email" class="validate" required="">
						<label for="email">E-Mail</label>
					</div>
				</div>
			</li>
			<li>
				Status Sekolah/Madrasah
				<p>
					<input name="status" required="" value="1" type="radio" id="1" />
					<label for="1">Negeri</label>
				</p>
				<p>
					<input name="status" required="" value="2" type="radio" id="2" />
					<label for="2">Swasta</label>
				</p>
			</li>
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="yayasan" id="yayasan" type="text" class="validate" required="">
						<label for="yayasan">Nama Yayasan *)</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="akte" id="akte" type="text" class="validate" required="">
						<label for="akte">No Akte Pendirian/Kelembagaan</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="tahunb" id="tahunb" type="text" class="validate" required="">
						<label for="tahunb">Tahun Berdiri Sekolah/Madrasah</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<input name="statusa" id="statusa" type="text" class="validate" required="">
						<label for="statusa">Status Akreditasi/Tahun</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<textarea name="visi" id="visi" class="materialize-textarea" required=""></textarea>
						<label for="visi">Visi Sekolah/Madrasah</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<textarea name="misi" id="misi" class="materialize-textarea" required=""></textarea>
						<label for="misi">Misi Sekolah/Madrasah</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<textarea name="tujuans" id="tujuans" class="materialize-textarea" required=""></textarea>
						<label for="tujuans">Tujuan Sekolah/Madrasah</label>
					</div>
				</div>
			</li>		
			<li>
				<div class="row">
					<div class="input-field col s12">
						<textarea name="tujuanp" id="tujuanp" class="materialize-textarea" required=""></textarea>
						<label for="tujuanp">Tujuan Program Keahlian</label>
					</div>
				</div>
			</li>
		</ol>

		<div class="col s12 center">
			<button type="submit" class="waves-effect waves-light btn orange darken-1"><i class="material-icons right">send</i>Lanjut ke Pertanyaan</a>
			</div>
		</form>
	</div>
	@stop