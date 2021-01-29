<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class SonController extends Controller
{
    public function store(Request $request, Person $Person)
	{
		return $request;
		$son = new Son();
		$son->name = $request->name;
		$son->age = $request->age;
		$son->save();

		return response()->json([
			'son' => $son
		]);
	}
}
