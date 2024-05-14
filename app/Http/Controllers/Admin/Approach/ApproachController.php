<?php

namespace App\Http\Controllers\Admin\Approach;

use App\Http\Controllers\Controller;
use App\Models\Appraoch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ApproachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approaches = Appraoch::orderBy('order_number','asc')->paginate(5);
        return view('admin.approach.index',compact('approaches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.approach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        request()->validate([
            'title' => 'required',
            'order_number' => 'required|unique:appraoches'
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'order_number' => $request->order_number,
            'author_id'   => Auth::user()->id,
        ];

        Appraoch::create($data);
        Session::flash('create');
        return redirect()->route('approach.index')->with('create', ' Approach Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $approach = Appraoch::where('id', $id)->first();
        return view('admin.approach.edit', compact('approach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'order_number' => $request->order_number,
            'author_id'   => Auth::user()->id,
        ];
        Appraoch::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('approach.index')->with('warning', ' Approach Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appraoch::where('id', $id)->delete();
        return redirect()->route('approach.index');
    }
}
