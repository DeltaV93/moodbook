<?php

namespace App\Http\Controllers;

use App\Entry;

use App\Words;

use App\Http\Request;

use App\Http\Controllers\Auth\AuthController;

use Requests;

use DB;

use Auth;

use App\Http\Requests\EntryRequest;

use Carbon\Carbon;


class EntriesController extends Controller {

	public function index()
	{
			$user = Auth::user()->get();
			$first = Auth::user()->first_name;
			$last = Auth::user()->last_name;
			$bio = Auth::user()->user_bio;
			$photo = Auth::user()->user_photo;
			$fullname = $first.' '.$last;

		// MAKES THE RELATIONSHIP BETWEEN USER AND ENTRY 
			$entries = Auth::user()->entries()
			->orderBy('created_at', 'desc')
			->get();
		// dd($entries);
		return view('user.home', compact('entries', 'fullname', 'bio','photo'));
	}

	public function show($id)
	{
		$user = Auth::user()->get();
		$first = Auth::user()->first_name;
		$last = Auth::user()->last_name;
		$bio = Auth::user()->user_bio;
		$photo = Auth::user()->user_photo;
		$fullname = $first.' '.$last;		
		// dd('hey');
		$entries = Entry::findOrFail($id);
		// return $entries;
		return view('user.view', compact('entries', 'fullname'));
		
	}

	public function create()
	{
		$user = Auth::user()->get();
		$first = Auth::user()->first_name;
		$last = Auth::user()->last_name;
		$fullname = $first.' '.$last;		
		// $entries = Entry::all();

		return view('user.create', compact('fullname'));
	}

	public function store(EntryRequest $request)
	{
		$user = Auth::user()->get();
		$first = Auth::user()->first_name;
		$last = Auth::user()->last_name;
		$bio = Auth::user()->user_bio;
		$photo = Auth::user()->user_photo;
		$fullname = $first.' '.$last;		

		$newEntry = new Entry($request->all());

		// MAKES THE RELATIONSHIP BETWEEN USER AND ENTRY 
		$entry = Auth::user()->entries()->save($newEntry);

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
		// FIND EACH WORDS VALUE AND PUT IT IN AN ARRAY 
	    foreach($entry_explode as $word){
	        if(array_key_exists(strtolower($word), $value_array)) {
	        	$output[strtolower($word)] = 
	        	floatval($value_array[strtolower($word)]);
	        } 
		// IF THE WORD DOES NOT HAVE A VALUE THAN MAKE IT 0
	        else {
	       		$output[strtolower($word)] = 0;
		    }
		}
		
		// FIND OUT HOW MANY WORDS ARE IN THE ARRAY AND / 3 TO MAKE 3 GROUPS
		$num_entries_in_a_chunk = number_format($entry_lenth / 3);
		
		// MAKE THE 3 GROUPS WITH THE AMOUNT OF WORDS FROM LAST LINE
		$three_nums_chunks = array_chunk($output, $num_entries_in_a_chunk);	
		

		// FOR EACH CHUNK DO THE MATH ON EACH CHUNKS IN THREE_NUMS_CHUNKS
		$chunk_array_sum = [];
		foreach ($three_nums_chunks as $num_chunk) {
			$chunk_array_sum[] = array_sum($num_chunk);
		}

		// GET THE NUMBER FROM BEFORE AND DO THIS 
		// => $big_num = pow($sum, 5.5(BLUE) OR 6.5(GREEN));
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

		return redirect('user');

	}
	public function edit($id)
	{
		$user = Auth::user()->get();
		$first = Auth::user()->first_name;
		$last = Auth::user()->last_name;
		$bio = Auth::user()->user_bio;
		$photo = Auth::user()->user_photo;
		$fullname = $first.' '.$last;		
		// dd('hey');
		$entries = Entry::findOrFail($id);

		return view('user.edit', compact('entries', 'fullname'));

	}
	public function update($id, EntryRequest $request)
	{
		$user = Auth::user()->get();
		$first = Auth::user()->first_name;
		$last = Auth::user()->last_name;
		$bio = Auth::user()->user_bio;
		$photo = Auth::user()->user_photo;
		$fullname = $first.' '.$last;		

		$entries = Entry::findOrFail($id);

		$entries->update($request->all());

		return redirect('user');
	}
	public function destroy($id)
	{
		$entries = Entry::findOrFail($id);
		$entries->delete();
		// dd('HEY');

		// $entries->update($request->all());

		return redirect('user');
	}
}
