<?php

namespace App\Http\Controllers\Backend\Admin;
use Illuminate\Database\QueryException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Lead;
use App\Models\BusinessList;

use Exception;

class ListingController extends Controller
{
  
    public function index(Request $request)
    {
        $businesses = BusinessList::orderBy('created_at', 'desc')->get();
 
        return view('backend.admin.listing.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master = Master::orderby('created_at', 'asc')->get();
        return view('backend.admin.master.create', compact('master'));
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
        ]);
        try {
            $master = new Master();

            $master->title = $request->input('title');
            $master->value = $request->input('value');

            //  $master->uploaded_by = auth()->user()->id;

            $master->save(); //
            return redirect()->route('admin.master.index');
        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
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
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Testimonial::where('id', $id)->first();
        return view('backend.admin.user.edit', compact('user'));

        $master = Master::where('id', $id)->first();
        return view('backend.admin.master.edit', compact('master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'value' => 'required',
        ]);
        try {
            $master = Master::find($id);
            $master->title = $request->title;
            $master->value = $request->value;
            $master->save();
            return redirect()->route('admin.master.index');
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
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $lead = Lead::where(['id' => $id])->delete();
    //     return back();
    // }

    // public function destroy($id)
    // {
    //     try {
    //         // Find the lead record by ID and delete it
    //         $business = BusinessList::findOrFail($id);
    //         $business->delete();

    //         // Return a success response, e.g., JSON response
        
    //     } catch (\Exception $e) {
    //         // Handle any exceptions or errors that occur during deletion
    //         return redirect()->route('admin.listing.index')->with('error', 'Failed to delete business.');
    //     }
    // }
    public function destroy($id)
    {
        $business = BusinessList::where(['id' => $id])->delete();
        return back();
    }
    

    public function active($id)
    {
        // dd('Active method called with ID: ' . $id);
        BusinessList::where('id', $id)->update(['status' => '0']);
        return redirect()->route('admin.listing.index');
    }
    public function homefeturedActive($id)
    {
        // dd('Active method called with ID: ' . $id);
        BusinessList::where('id', $id)->update(['home_featured' => '6']);
        return redirect()->route('admin.listing.index');
    }
public function homefeturedinactive($id)
    {
        // dd('Active method called with ID: ' . $id);
        BusinessList::where('id', $id)->update(['home_featured' => '11']);
        return redirect()->route('admin.listing.index');
    }
    public function inactive($id)
    {
        // dd('Inactive method called with ID: ' . $id);
        try {
            BusinessList::where('id', $id)->update(['status' => '1']);
            return redirect()->route('admin.listing.index');
        } catch (\Exception $e) {
            print_r($e->getMessage());
            die();
        }
    }



 public function leadActive($id)
    {
    //   dd('Active method called with ID: ' . $id);
        BusinessList::where('id', $id)->update(['leadStatus' => '0']);
        return redirect()->route('admin.listing.index');
    }

    public function leadInactive($id)
    {
        // dd('Inactive method called with ID: ' . $id);
        try {
            BusinessList::where('id', $id)->update(['leadStatus' => '1']);
            return redirect()->route('admin.listing.index');
        } catch (\Exception $e) {
            print_r($e->getMessage());
            die();
        }
    }



}

// ------------------->>  Print Error Message

// catch (Exception $e) {
//     session()->flash('sticky_error', $e->getMessage());
//     print_r($e->getMessage());
//     die();
//     return back();
// }
