<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $agenda = new Agenda($request->all());
        $agenda->save();

        session()->flash('message_success', 'Information created');
        return back();
    }

    public function update(Request $request, Agenda $Agenda)
    {
        $Agenda->update($request->all());

        session()->flash('message_success', 'Information updated');
        return back();
    }

    public function delete(Agenda $Agenda)
    {
        $Agenda->delete();

        session()->flash('message_success', 'Information deleted');
        return back();
    }
}
