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

        session()->flash('message_success', 'Information created');
        return back();
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

        session()->flash('message_success', 'Information deleted');
        return back();
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
