<?php

namespace App\Http\Controllers;
use App\Models\Firstapp;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class FirstappController extends Controller
{
    public function index()
  {
    $users = Firstapp::all();
   
    //return view('firstapps.index', compact('users'));
    return view('firstapps.index')->with("users",$users);

  }
    public function create() : View
    {
        return view('firstapps.create');
    } 
    public function store(Request $request) : RedirectResponse
    {
        Firstapp::create($request->all());
        return redirect()->route('FirstappController.index')
                ->withSuccess('New product is added successfully.');
    }

    public function edit(Request $req){
        $users = Firstapp::find($req->id);
        return view('firstapps.edit')->with("users",$users);
    }
    public function update(Request $req){
        $users = Firstapp::find($req->id);
        $users->update([
            'name' => $req->name,
            'email' => $req->email,
            'desc' => $req->desc,
            'password' => $req->password,
            
        ]);
        return redirect()->route('FirstappController.index')
        ->withSuccess('New product is added successfully.');
    }
    public function delete(Request $req){
        $users = Firstapp::find($req->id);
        $users->delete();
        return redirect()->route('FirstappController.index')
        ->withSuccess('New product is added successfully.');
    }
  }

