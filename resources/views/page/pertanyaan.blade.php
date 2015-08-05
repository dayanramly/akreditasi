@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12">
	{{-- {{$pertanyasan}} --}}
	@foreach ($pertanyaan as $list_pertanyaan) 

	{{{$list_pertanyaan->id}}}. {{{$list_pertanyaan->pertanyaan}}}
	<?php 
	$j = 0;
	?>	
	<ul style="margin-left: 12px;">
		@foreach (json_decode($list_pertanyaan->pilihan) as $pilihan)
		<li>
			<input name="jawaban[{{{$list_pertanyaan->id}}}]" type="radio" id="n{{{$list_pertanyaan->id}}}j{{$j}}" /> 
			<label for="n{{{$list_pertanyaan->id}}}j{{$j++}}">{{{ $pilihan }}}</label>
		</li>
		@endforeach
		<div class="file-field input-field">
			<input class="file-path validate" type="text" style="width: 80% !important;margin-left: 1%;" />
			<div class="btn">
				<span>Upload</span>
				<input type="file" />
			</div>
		</div>
	</ul>


	@endforeach
	{!! $pertanyaan->render() !!}

</div>
@stop