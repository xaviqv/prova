<?php
Route::get('/prova/ruta', function(){
	echo "Ruta Prova";
});
Route::get('/prova/vista', function(){
	return view('prova::vista');
});
?>