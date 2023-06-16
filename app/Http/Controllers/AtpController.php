<?php

namespace App\Http\Controllers;

use App\Models\Atp;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Atp::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         Atp::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number
        ]);
        return redirect('abel')->with('msg','added successful');
    }

    /**
     * Display the specified resource.
     */
    public function show($id )
    {
       $data = Atp::find($id);

        return view('single',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id): View
{
    $data= Atp::find($id);
       
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atp $atp,$id)
    {
     
        
        $data= $atp::find($id);
         $data->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number
         ]);
         
         


        return redirect('abel')->with('msg','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      Atp::find($id)->delete();
        
       
       return redirect('abel')->with('msg','deleted successfully');
    }
}
