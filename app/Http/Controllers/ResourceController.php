<?php

namespace App\Http\Controllers;

use App\Resource;

use Storage;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all()->toArray();
        
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
            //$file->storeAs('public/',files);
            $filepath = $request->file->getRealPath();
            $filetype = $request->file->getClientOriginalExtension();
            $resource = new Resource();
            $resource->name = $filename;
            $resource->url = $fileurl;
            $resource->path = $filepath;
            $resource->type = $filetype;
            $resource->save();

            //$resource->storeAs('public/',$files);
            //return response()->file($fileurl);
            return redirect()->back();
        }
    }

    public function show()
    {
        return Storage::files('public/files');
    }

}
