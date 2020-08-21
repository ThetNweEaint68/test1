<?php

namespace App\Http\Controllers;

use App\Resource;

use Response;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        
        return view('files.view', compact('resources'));
    }

    public function create()
    {
       return view('files.upload');
    }

    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
            $filename = $request->file->getClientOriginalName();
            $fileurl = $request->file->store('public/files');
            $filepath = $request->file->getRealPath();
            $filetype = $request->file->getClientOriginalExtension();
            $resource = new Resource();
            $resource->name = $filename;
            $resource->url = $fileurl;
            $resource->path = $filepath;
            $resource->type = $filetype;
            $resource->save();

            return redirect()->back();
        }
    }

    public function show($id)
    {
        $resource = Resource::findOrFail($id);
        $filepath = storage_path('app/' . $resource->url);

        return response()->file($filepath);
    }

}
