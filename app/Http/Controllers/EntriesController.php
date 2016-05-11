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

		$entry = Entry::create($request->all());

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
		foreach($matched_words as $matched_word){
				$value_array[$matched_word->word]=$matched_word->value;
		}

		$output = [];

	    foreach($entry_explode as $word){
	        if(array_key_exists(strtolower($word), $value_array)) {
	        	$output[strtolower($word)] = floatval($value_array[strtolower($word)]);
	        } 
	        else {
	       		$output[strtolower($word)] = 0;
		    }
		}
		
		$num_entries_in_a_chunk = number_format($entry_lenth / 3);
		
		$three_nums_chunks = array_chunk($output, $num_entries_in_a_chunk);	
		

		// FOR EACH CHUNK DO THE MATH ON EACH CHUNKS IN THREE_NUMS_CHUNKS
		$chunk_array_sum = [];
		foreach ($three_nums_chunks as $num_chunk) {
			$chunk_array_sum[] = array_sum($num_chunk);
		}

		// GET THE NUMBER FROM BEFORE AND DO THIS => $big_num = pow($sum, 5.5);
		foreach ($chunk_array_sum as $num_sum) {;
			$big_num[] = pow($num_sum, 5.5);
		}
			
		
		// FUNCTION TO CAL DEC TO HEX 	
		
		function toColor($n){
			return("#".substr("000000".dechex($n),-6));
		}

		// SET EACH ONE OF THOSE NUMERS TO COLORS THAT RUN THROUGHT toColor
		$color_gradient_stops = [];
		foreach ($big_num as $color_number) {
			$color_gradient_stops[] = toColor($color_number);
		}
		// return $color_gradient_stops;

		// SAVE THIS AS ENTRY_COLOR IN ENTRY DB
		$color_1 = Entry::where('entry_color_1');
		$color_2 = Entry::where('entry_color_2');
		$color_3 = Entry::where('entry_color_3');

		// foreach ($color_gradient_stops as $color) {
			// check to see if color_1 in DB is empty
			// if empty save to color_1 
			// if not ...

			if($entry->entry_color_1 == null ){
				$entry->entry_color_1 = $color_gradient_stops[0];
			}
			if($entry->entry_color_2 == null ){
				$entry->entry_color_2 = $color_gradient_stops[1];
			}
			if($entry->entry_color_3 == null ){
				$entry->entry_color_3 = $color_gradient_stops[2];
			}
			$entry->save();

			$entry->touch();

			// if color_2 is empty save here 
			// elseif(){

			// }
			// if color_1 && color_2 is full save in color_3
		// }
		
		
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
