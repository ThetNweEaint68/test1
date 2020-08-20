<?php

namespace App\Http\Controllers;

use App\Resource;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function uploadForm()
    {
       return view('files.upload');
    }

    public function uploadFile(Request $request)
    {
        if($request->hasFile('file')){
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

            return redirect()->route('resource.index');
        }
    }

    public function index()
    {
        $resources = Resource::all()->toArray();
        
        return view('files.view',compact('resources'));
    }
}
