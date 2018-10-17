<?php

namespace App\Http\Controllers;

use App\main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        //  $mains = main::all();
       $mains = DB::table('mains')->paginate(5);
       //$mains = main::orderBy()
      //return view('index',['mains'=>$mains]);
          return view('index', compact('mains'));

    }

    public function store(Request $request)
    {
        $request->validate([
            's_name' => 'required',
            's_surname' => 'required'
        ]);
        main::create([
            's_name' => $request->s_name,
            's_surname' => $request->s_surname
        ]);

        session()->flash('msg', 'Data has been created');
        return redirect('/');
    }

    public function destroy($id)
    {
        main::destroy($id);
        return redirect()->back()->with('msg', 'data has been deleted');
    }


    public function edit($id)
    {
        $mains = main::find($id);
        return view('edit', compact('mains'));
    }

    public function update(Request $request, $id)
    {
        $mains = main::find($id);
        $mains->s_name = $request->get('s_name');
        $mains->s_surname = $request->get('s_surname');
        $mains->save();
        return redirect('/')->with('msg', 'data has been updated');
    }
}
