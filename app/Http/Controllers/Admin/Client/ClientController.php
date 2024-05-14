<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required'
        ]);
        $data = [
            'title'      => $request->title,
            'slug'      => Str::slug($request->title),
            'author_id' => Auth::user()->id,
        ];
        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/client');
            $data['thumbnail'] = $file_name;
        }
        Client::create($data);
        Session::flash('create');
        return redirect()->route('client.index')->with('create', ' client Successfully Created');
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
        $client = Client::where('id', $id)->first();
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'      => $request->title,
            'slug'      => Str::slug($request->title),
            'author_id' => Auth::user()->id,
        ];

        $client = Client::firstwhere('id', $id);

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/client');
            if (Storage::exists($client->thumbnail)) {
                Storage::delete($client->thumbnail);
            }
            $data['thumbnail'] = $file_name;
        }


        Client::firstwhere('id', $id)->update($data);
        Session::flash('warning');
        return redirect()->route('client.index')->with('warning', ' Client Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        Storage::delete($client->thumbnail);
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Client successfully Deleted');
    }
}
