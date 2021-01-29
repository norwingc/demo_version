<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Son;

class SonController extends Controller
{
    public function store(Request $request, Person $Person)
	{
		$son = new Son($request->all());
		$Person->sons()->save($son);

		if($request->ajax()){
			return response()->json([
				'son' => $son
			]);
		}
		return back();
	}
}
