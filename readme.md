#Custom paginate
replace link on directory vendor/laravel/framework/src/illuminate/pagination/BootstrapThreePresenter

protected function getAvailablePageWrapper($url, $page, $rel = null)
{
	$rel = is_null($rel) ? '' : ' rel="'.$rel.'"';

	return '<li><input type="submit" name="page" value='.$page.'></li>';
}