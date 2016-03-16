<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Accounts extends Controller {
    
    public function home()
    {
    	$entries = Entries::all();

	   	return view('user.home', compact('entries'));
	}

	public function view($id)
	{
		$entries = Entries::findOrFail($id);

		return view('user.view', compact('entrie'));
	}
}
