<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	session_start();
	if(isset($_SESSION['podometre'])) {
		$podometre = $_SESSION['podometre'];
	}
	else {
		$_SESSION['podometre'] = 0;
		$podometre = 0;
	}	
    return view('index', ['podometre' => $podometre]);
});

Route::get('incrementer', function () {
	session_start();
	if(isset($_SESSION['podometre'])) {
		$_SESSION['podometre'] += 1;
	}
	return redirect('/');
});

Route::get('decrementer', function () {
	session_start();
	if(isset($_SESSION['podometre'])) {
		if ($_SESSION['podometre'] > 0) {
			$_SESSION['podometre'] -= 1;
		}
	}
	return redirect('/');
});

Route::get('raz', function () {
	session_start();
	$_SESSION['podometre'] = 0;
	return redirect('/');
});