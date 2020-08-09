<?php

namespace App\Http\Controllers;

use App\Trailers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrailersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['trailers']=Trailers::paginate(10);

        return view('Trailers.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
        return view('Trailers.create');
    }

    public function usuarios()
    {
        //
        return view('Trailers.users');
    }

    public function login()
    {
        //
        return view('login');
    }
    public function home()
    {
        //
        return view('Trailers.home');
    }

    public function start()
    {
        //
        return view('start');
    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     
        $datosTrailer=request()->except('_token');
        if($request->hasFile('Portada','Trailer'))
        {
            $datosTrailer['Portada']=$request->file('Portada')->store('uploads','public');
            $datosTrailer['Trailer']=$request->file('Trailer')->store('uploads','public');
        }

        trailers::insert($datosTrailer);

        return response()->json($datosTrailer);
        return redirect('Trailers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function show(Trailers $trailers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trailers=Trailers::findOrFail($id);
        return view('trailers.edit',compact('trailers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosTrailer=request()->except(['_token','_method']);
 
        if($request->hasFile('Portada','Trailer'))
        {
            $trailers=Trailers::findOrFail($id);
            Storage::delete('public/'.$trailers->Portada);
            Storage::delete('public/'.$trailers->Trailer);
                $datosTrailer['Portada']=$request->file('Portada')->store('uploads','public');
                $datosTrailer['Trailer']=$request->file('Trailer')->store('uploads','public');
         
        }

        Trailers::where('id','=',$id)->update($datosTrailer);
        $trailers=Trailers::findOrFail($id);
        return view('trailers.edit',compact('trailers'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trailers  $trailers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trailers=Trailers::findOrFail($id);
        if(Storage::delete('public/'.$trailers->Portada)){
            Trailers::destroy($id);
        }
     
       
        return redirect('Trailers');

    }
}
