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

		$new_array = array();
		// EACH WORD GETS ANALAYZED 
		$matched_words = Words::whereIn('word', $entry_explode)->get();
		foreach($matched_words as $mw){
				$new_array[]=$mw->word;
				$value_array[$mw->word]=$mw->value;
		}

		$arrayOfWords = array();
		foreach ($entry_explode as $word) {
		    if (in_array($word,$new_array)) {
		        $arrayOfWords['yes_words'][] = $word;
		    } else {
		    	$arrayOfWords['no_word'] = $word;
		    }
		}


		// return $arrayOfWords['no_word'];
		$entry_math = number_format($entry_lenth / 3);

			
		$your_input = array_chunk($entry_explode, $entry_math);

		$output = [];
// intval($n*100)
		foreach($your_input as $chunk) 
		    foreach($chunk as $string)
		        if(array_key_exists(strtolower($string), $value_array))
		            $output[strtolower($string)] = floatval($value_array[strtolower($string)]);
		       	// elseif (array_key_exists(strtolower($string), $arrayOfWords))
		       	// 	$output[strtolower($string)] = -1;
		       	else 
		       		$output[strtolower($string)] = -1;
		       	
		// echo "<pre>", print_r($output), "</pre>";
		

		// $output_chunked = array_chunk($output, $entry_math);

		$number_chunks = array_chunk($output, $entry_math);	
		return $number_chunks;

		foreach ($number_chunks as $chunk) {
			// dd(array_sum($chunk));
		}
		// FIND WHAT GROUP HAS MORE POSTIVE, NEGATIVE, OR NURTUAL SCORE 
		
		// INCREASE EACH COLOR POINT BASED ON THE NUMBER IT HAS *USE COLOR GIST 
		// FROM TREVOR GITHUB*
		
		
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
