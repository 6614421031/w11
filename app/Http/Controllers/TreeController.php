<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    // ======================
    // INDEX
    // ======================
    public function index(Request $request)
    {
        $trees = Tree::all();

        // ถ้าเรียกผ่าน API
        if ($request->is('api/*')) {
            return response()->json($trees, 200);
        }

        // ถ้าเรียกผ่าน Web
        return view('trees.index', compact('trees'));
    }

    // ======================
    // CREATE (WEB เท่านั้น)
    // ======================
    public function create()
    {
        return view('trees.create');
    }

    // ======================
    // STORE
    // ======================
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

        $tree = Tree::create($validated);

        if ($request->is('api/*')) {
            return response()->json([
                'message' => 'Created successfully',
                'data' => $tree
            ], 201);
        }

        return redirect()->route('trees.index')
            ->with('success','Created successfully');
    }

    // ======================
    // SHOW
    // ======================
    public function show(Request $request, Tree $tree)
    {
        if ($request->is('api/*')) {
            return response()->json($tree, 200);
        }

        return view('trees.show', compact('tree'));
    }

    // ======================
    // EDIT (WEB เท่านั้น)
    // ======================
    public function edit(Tree $tree)
    {
        return view('trees.edit', compact('tree'));
    }

    // ======================
    // UPDATE
    // ======================
    public function update(Request $request, Tree $tree)
    {
        $validated = $request->validate([
            'tree_code' => 'required|unique:trees,tree_code,' . $tree->id . ',id',
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

        if ($request->is('api/*')) {
            return response()->json([
                'message' => 'Updated successfully',
                'data' => $tree
            ], 200);
        }

        return redirect()->route('trees.index')
            ->with('success','Updated successfully');
    }

    // ======================
    // DESTROY
    // ======================
    public function destroy(Request $request, Tree $tree)
    {
        $tree->delete();

        if ($request->is('api/*')) {
            return response()->json([
                'message' => 'Deleted successfully'
            ], 200);
        }

        return redirect()->route('trees.index')
            ->with('success','Deleted successfully');
    }
}