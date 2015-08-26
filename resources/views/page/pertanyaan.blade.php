@extends('layouts.default')
@section('title', 'Home Page')
@section('content')

<div class="col s12" style="font-size:12pt;">

	@foreach ($pertanyaan as $list_pertanyaan) 
	{!! Form::open(array('method'=>'POST', 'files'=>true, "enctype"=>"multipart/form-data")) !!}
	<input name="f[no]" type="hidden" value="{{$list_pertanyaan->id}}">
	{{-- {{{$list_pertanyaan}}} --}}
	{{{$list_pertanyaan->id}}}. {{{$list_pertanyaan->pertanyaan}}}
	<?php 
	$j = 0;
	?>	
	<ul style="margin-left: 12px;">
		@foreach (json_decode($list_pertanyaan->pilihan) as $pilihan)
		<li style="line-height:2.4;">
			<input name="f[jawaban]" value="{{$j}}" type="radio" id="n{{{$list_pertanyaan->id}}}j{{$j}}" /> 
			<label for="n{{{$list_pertanyaan->id}}}j{{$j++}}" style="color:#555;">{{{ $pilihan }}}</label>
		</li>
		@endforeach
		<div class="file-field input-field">
			<input class="file-path validate" type="text" style="width: 80% !important;margin-left: 1%;" />
			<div class="btn">
				<span>Upload</span>
				<input name="f[file]" type="file" />
				{{-- link file upload --}}
			</div>
		</div>
		@if (!empty($jawaban["file"]))
		<a href="{!!url($jawaban["file"])!!}" download target="_blank">Download Image</a>
		@endif
	</ul>
	@endforeach
	{!! $pertanyaan->render() !!}
	{!! Form::close() !!}

</div>
@stop
@section('js')
@if (!empty($jawaban["jawaban"]))
<script type="text/javascript">
$(document).ready(function() {

	$('#n{!!$jawaban["no"]!!}j{!!$jawaban["jawaban"]!!}').prop('checked',true);

})
</script>
@endif
@endsection