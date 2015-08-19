<!--Import jQuery before materialize.js-->
{!! HTML::script('assets/js/jquery.min.js') !!}
{!! HTML::script('assets/js/materialize.min.js') !!}
<script type="text/javascript">
$( document ).ready(function(){
	$(".button-collapse").sideNav();
	$(".dropdown-button").dropdown();	
	$('select').material_select();
})
</script>