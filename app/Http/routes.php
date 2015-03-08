<?php
Route::model('voters','Voter');
Route::resource('/voters','VotersController');

Route::model('candidates','Candidate');
Route::resource('/candidates','CandidatesController');

Route::resource('/castVote','VoteCastController');


