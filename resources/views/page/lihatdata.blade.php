@extends('layouts.default')
@section('title', 'Lihat Data')
@section('content')

@if(!empty($identitas))
<div class="col s12">
	<h5>Detail Identitas Sekolah</h5>
	<hr />
	<br />
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="progli">Program Keahlian</label>
		</div>
		<div class="col s6">
			{{{$identitas->progli}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="sekolah">Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->sekolah}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="nss">Nomor Statistik Sekolah/Madrasah (NSS/M)</label>
		</div>
		<div class="col s6">
			{{{$identitas->nss}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="alamat">Alamat Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->alamat}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="kec">Kecamatan</label>
		</div>
		<div class="col s6">
			{{{$identitas->kec}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="kab">Kabupaten/Kota</label>
		</div>
		<div class="col s6">
			{{{$identitas->kab}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="provinsi">Provinsi</label>
		</div>
		<div class="col s6">
			{{{$identitas->provinsi}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="kodepos">Kode Pos</label>
		</div>
		<div class="col s6">
			{{{$identitas->kodepos}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="telp">Telepon dan Faksimil</label>
		</div>
		<div class="col s6">
			{{{$identitas->telp}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="email">E-Mail</label>
		</div>
		<div class="col s6">
			{{{$identitas->email}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="statusa">Status Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->status}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="yayasan">Nama Yayasan *)</label>
		</div>
		<div class="col s6">
			{{{$identitas->yayasan}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="akte">No Akte Pendirian/Kelembagaan</label>
		</div>
		<div class="col s6">
			{{{$identitas->akte}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="tahunb">Tahun Berdiri Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->tahunb}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="statusa">Status Akreditasi/Tahun</label>
		</div>
		<div class="col s6">
			{{{$identitas->statusa}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="visi">Visi Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->visi}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="misi">Misi Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->misi}}}

		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="tujuans">Tujuan Sekolah/Madrasah</label>
		</div>
		<div class="col s6">
			{{{$identitas->tujuans}}}
		</div>
	</div>	
	<div class="row">
		<div class="col s4 offset-s1">
			<label for="tujuanp">Tujuan Program Keahlian</label>
		</div>
		<div class="col s6">	
			{{{$identitas->tujuanp}}}
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col s12 center">
			<a href="/asesorhasil/{{{$identitas->user_id}}}" class="btn teal">Kembali</a>
		</div>
	</div>

</div>
@endif
@stop