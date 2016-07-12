<?php 

Route::group(['prefix' => 'api'], function() {

	Route::resource('comments', 'CommentsController');

});