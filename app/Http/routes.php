<?php
Route::model('voters','Voter');

Route::resource('/voters','VotersController');

Route::model('candidates','Candidate');
Route::resource('/candidates','CandidatesController');

Route::resource('/castVote','VoteCastController');

/*Route::get('/castVote','CandidatesController@createCastVote');
Route::post('/insertCastVote','CandidatesController@insertCastVote');*/




/*Route::model('inboxes', 'Inbox');

// Use slugs rather than IDs in URLs
Route::bind('inboxes', function($value, $route)
{
    return App\Inbox::whereid($value)->first();
});
Route::resource('inboxes', 'InboxesController');

Route::get('/sent','InboxesController@sent');
Route::get('/draft','InboxesController@draft');
Route::get('/trash','InboxesController@trash');

//testing function
Route::get('/test',function(){
    return "hello World";
});*/

