<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Database\QueryException;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Master;
use Exception;


class SubMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $submaster = submaster::orderby('created_at', 'desc')->get();
    //   return view('backend.admin.submaster.index',compact("submaster"));
    // }

   

    public function index(Request $request)
{
    $submaster = Master::orderBy('created_at', 'asc')->where('type','<>','Master')->get();
    return view('backend.admin.submaster.index', compact('submaster'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master = Master::orderby('created_at', 'desc')->where('type','=','Master')->get();
        return view('backend.admin.submaster.create', compact('master'));
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
            'title' => 'required',
            'value' => 'required',
            'type' => 'required',
            'logo' => 'required',


        ]);
        try {
            $submaster = new Master();
           

            $submaster->title = $request->input('title');
            $submaster->value = $request->input('value');
            $submaster->type = $request->input('type');

            // logo/Image Session
            if ($request->hasFile('logo')) {
                $extension = strtolower($request->file('logo')->getClientOriginalExtension());
                if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'svg' || $extension == 'webp') {
                    if ($request->file('logo')->isValid()) {
                        $destinationPath = public_path('uploads'); 
                        $extension = $request->file('logo')->getClientOriginalExtension(); 
                        $fileName = time() . '.' . $extension; // renameing logo
                        $request->file('logo')->move($destinationPath, $fileName); 
                        $submaster->logo = $fileName;
                    }
                }
            }



            $submaster->save(); //
            return redirect()->route('admin.submaster.index');
        }  catch (Exception $e) {
            Log::error($e);
                session()->flash('error', 'An error occurred while saving the record.');
          
            return back();
        }
    }


    // catch (Exception $e) {
    //     session()->flash('sticky_error', $e->getMessage());
    //     print_r($e->getMessage());
    //     die();
    //     return back();
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\submaster  $submaster
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\submaster  $submaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submaster = Master::where('id', $id)->first();
        return view('backend.admin.submaster.edit', compact('submaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\submaster  $submaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
        try {
            $submaster = Master::find($id);
            $submaster->title = $request->title;
            $submaster->value = $request->value;
            $submaster->save();
            return redirect()->route('admin.submaster.index');
        } catch (\Exception $e) {
            session()->flash('sticky_error', $e->getMessage());
            print_r($e->getMessage());
            die();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\submaster  $submaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submaster = Master::where(['id' => $id])->delete();
        return back();
    }
}

    // ------------------->>  Print Error Message  

    // catch (Exception $e) {
    //     session()->flash('sticky_error', $e->getMessage());
    //     print_r($e->getMessage());
    //     die();
    //     return back();
    // }

    