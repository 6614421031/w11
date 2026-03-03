<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index()
    {
        $trees = Tree::all();
        return view('trees.index', compact('trees'));
    }

    public function create()
    {
        return view('trees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tree_code' => 'required|unique:trees,tree_code',
            'name' => 'required',
            'scientific_name' => 'required',
            'type' => 'required',
            'height' => 'required|integer',
            'age' => 'required|integer',
            'price' => 'required|numeric',
            'status' => 'required',
            'plant_date' => 'required|date',
            'location' => 'required',
            'soil_type' => 'required',
            'is_fruit_tree' => 'required|in:0,1',
            'description' => 'nullable',
        ]);

        Tree::create($validated);

        return redirect()->route('trees.index')
            ->with('success','Created successfully');
    }


public function edit(Tree $tree)
{
    return view('trees.edit', compact('tree'));
}

public function update(Request $request, Tree $tree)
{
    $validated = $request->validate([
        'tree_code' => 'required|unique:trees,tree_code,' . $tree->id,
        'name' => 'required',
        'scientific_name' => 'required',
        'type' => 'required',
        'height' => 'required|integer',
        'age' => 'required|integer',
        'price' => 'required|numeric',
        'status' => 'required',
        'plant_date' => 'required|date',
        'location' => 'required',
        'soil_type' => 'required',
        'is_fruit_tree' => 'required|in:0,1',
        'description' => 'nullable',
    ]);

    $tree->update($validated);

    return redirect()->route('trees.index')
        ->with('success','Updated successfully');
}

public function destroy(Tree $tree)
{
    $tree->delete();
    return redirect()->route('trees.index')->with('success','Deleted successfully');
}
public function show(Tree $tree)
{
    return view('trees.show', compact('tree'));
}
}