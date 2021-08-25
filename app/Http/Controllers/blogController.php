<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $blogs = blog::latest()->paginate(255);

        return view('blogs.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('blogs.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'contenu' => 'required',
           'images' => 'required',
           'date' => 'required'
        ]);

        blog::create($request->all());

        return redirect()->route('blogs.index')
            ->with('success', 'le blog à été crée avec succée!');
    }

 
    public function show(blog $blogs)
    {
        $blogs = blog::latest()->paginate(255);

        return view('blogs.show', compact('blogs'));
    }

    public function show2($id)
    {
        
        $blogs = blog::all()->where('id',$id)->first();
        return view('blogs.blogsuite')->with('blogs',$blogs);
    }

    
    public function edit($id)
    {

        $where = array('id' => $id);
        $data['blogs'] = blog::where($where)->first();

        return view('blogs.edit', $data );    
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'contenu' => 'required',
           'images' => 'required',
           'date' => 'required'
        ]);

        
        $update = [
            'titre' =>$request->titre,
            'description' =>$request->description,
            'contenu' => $request->contenu,
           'images' =>$request->images,
           'date' => $request->date
        ];

        blog::where('id',$id)->update($update);
        return redirect()->route('blogs.index')  ->with('success','Gènial ! le blog à éte modifié avec succée');
        }
    
    public function destroy(blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('delete', 'le blog à été spprimé avec succée!');
    }
}
