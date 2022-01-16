<?php
  
namespace App\Http\Controllers;
   
use App\Pack;
use Illuminate\Http\Request;
  
class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::latest()->paginate(5);
    
        return view('packs.index',compact('packs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packs.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',



        ]);
    
        Pack::create($request->all());
     
        return redirect()->route('packs.index')
                        ->with('success','Pack created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        return view('packs.show',compact('pack'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        return view('packs.edit',compact('pack'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pack $pack)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',



        ]);
    
        $pack->update($request->all());
    
        return redirect()->route('packs.index')
                        ->with('success','Pack updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();
    
        return redirect()->route('packs.index')
                        ->with('success','Packs deleted successfully');
    }
}