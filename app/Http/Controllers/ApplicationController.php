<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items = District::pluck('name', 'id');
        $selectedID = 2;
        return view('auth.apply',compact('selectedID', 'items'));
    }
    
    public function store(Request $request)
    {
        //
        $request->validate([
            'ngo_name'=>'required',
            'budget'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'location'=>'required',
            'duration'=>'required',
            'document'=>'required|mimes:pdf,docx,doc|max:6144',
        ]);
        $file=$request->document;
        if($request->hasFile('document')){
            
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->document->move('files',$filename);
            Application::create([
                'ngo_name'=>$request->input('ngo_name'),
                'budget'=>$request->input('budget'),
                'email'=>$request->input('email'),
                'phone_number'=>$request->input('phone_number'),
                'location'=>$request->input('location'),
                'duration'=>$request->input('duration'),
                'document'=>$filename,
                'user_id'=>Auth()->user()->id
                ]);
                return redirect()->back()->with('success','Your application has been sent!');
        }    
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   
        $data=Application::where('id',$id)->get();
        return view('auth.showView',['record'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $data=Application::where('id',$id)->get();
        return view('auth.editView',['record'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->id;        
        Application::where('id',$id)->update([
            'status'=>$request->input('status'),
        ]);
        return redirect('all-requests')->with('success','Data changes have been saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $app=Application::destroy($id);
        return response()->json($app);
    }
    
}
