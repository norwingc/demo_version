<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
     /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $agenda = auth()->user()->agenda;

        $person = new Person($request->all());
        $agenda->people()->save($person);

        return response()->json([
			'saved' => true,
			'person' => $person
		]);
    }

    public function update(Request $request, Person $Person)
    {
        $Person->update($request->all());

        session()->flash('message_success', 'Information updated');
        return back();
    }

    public function delete(Person $Person)
    {
        $Person->delete();

        return response()->json([
			'deleted' => true
		]);
    }

    /**
     * [viewPerson description]
     * @param   Agenda  $Agenda  [$Agenda description]
     * @return  [type]           [return description]
     */
    public function view(Person $Person)
    {
        return view('person', ['person' => $Person]);
    }
}
