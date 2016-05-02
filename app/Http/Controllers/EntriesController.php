<?php

namespace App\Http\Controllers;

use App\Entry;

use App\Http\Request;

use Requests;

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

		// GETTING THE WORDS FROM TEXTAREA 
		// COUNT THE LENTH OF THE WORDS AND DIVIDE IT BY 3
		// EACH WORD GET ANALAYZED 
		// FIND WHAT GROUP HAS MORE POSTIVE, NEGATIVE, OR NURTUAL SCORE 
		// INCREASE EACH COLOR POINT BASED ON THE NUMBER IT HAS *USE COLOR GIST FROM TREVOR GITHUB*
		// SAVE THIS AS ENTRY_COLOR IN ENTRY DB
		
		
		// $entryWords
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
