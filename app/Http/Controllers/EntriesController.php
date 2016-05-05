<?php

namespace App\Http\Controllers;

use App\Entry;

use App\Words;

use App\Http\Request;

use Requests;

use DB;

use App\Http\Requests\EntryRequest;

// use Illuminate\Foundation\Validation\ValidatesRequests;

use Carbon\Carbon;


class EntriesController extends Controller {

	public function index()
	{
		// Auth::user();
		
		$entries = Entry::orderBy('created_at', 'desc')->get();

		return view('user.home', compact('entries'));
	}

	public function show($id)
	{
		// dd('hey');
		$entries = Entry::findOrFail($id);
		// return $entries;
		return view('user.view', compact('entries'));
		
	}

	public function create()
	{
		// $entries = Entry::all();

		return view('user.create');
	}

	public function store(EntryRequest $request)
	{

		Entry::create($request->all());

		// GETTING THE ARRY OF WORDS FROM entry_body( $entry_text)
		$entry_text = $request->only('entry_body');

		// REMOVE THE KEY AND JUST GET THE STRING VALUE
		$entry_text = array_pull($entry_text,"entry_body");
		$entry_noTag = strip_tags($entry_text);
		
		// CONVERTE THE STRING ARRAY
		$entry_explode = explode(" ", $entry_noTag);
		
		// COUNT THE LENTH OF THE WORDS AND DIVIDE IT BY 3
		$entry_lenth = count($entry_explode);

		// EACH WORD GET ANALAYZED 
		$words = DB::table('words')->get();

		// $words = DB::table('words')->get();
		// Article::whereRaw("MATCH(title,body) AGAINST(?)", array('first'));

		// THIS GIVES ME AN EMPTY ARRAY 
		// $words = DB::table('words')->where('word', '=', $entry_text)->get();


		$word_test = Words::whereRaw("MATCH(",$entry_explode,") AGINST(?)", array($words));
		// $words = 
		
		dd($word_test);


		#find a match in words_row
		// $words = Words::table('words')->get();

		#return the values needed for that word in db 
		# # If nothing is found give it a negative value


		# rounding up for all number but need to thow this into a if statment 
		# to only round up based on the %
		$entry_math = round($entry_lenth / 3);
		
		
		// dd($words);
		// dd($entry_math);		

		// FIND WHAT GROUP HAS MORE POSTIVE, NEGATIVE, OR NURTUAL SCORE 
		
		// INCREASE EACH COLOR POINT BASED ON THE NUMBER IT HAS *USE COLOR GIST FROM TREVOR GITHUB*
		
		// SAVE THIS AS ENTRY_COLOR IN ENTRY DB
		
		
		
		return redirect('user');

	}
	public function edit($id)
	{
		// dd('hey');
		$entries = Entry::findOrFail($id);

		return view('user.edit', compact('entries'));

	}
	public function update($id, EntryRequest $request)
	{

		$entries = Entry::findOrFail($id);

		$entries->update($request->all());

		return redirect('user');
	}
	public function destroy($id, EntryRequest $request)
	{

		// $entries = Entry::findOrFail($id);

		// $entries->update($request->all());

		// return redirect('user');
	}
}
