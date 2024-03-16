<?php

namespace App\Http\Controllers\Backend;

use Validator;
use App\Models\Stock;
use App\Helpers\flashHelper;
use App\Helpers\stockHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Stock::all();
        return view('backend.stock.index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'current_price' => 'required',
            'available_units' => 'required'
        ]);

        if($valid->fails()) {
            return back()->withErrors($valid)->withInput($request->all());
        }

        $data = stockHelper::createStock($valid->validated());
        if($data) {
            return redirect()->route('backend.stock.index');
        } else {
            return back();
        }

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
        $id = decrypt($id);
        $data = Stock::find($id);
        return view('backend.stock.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'current_price' => 'required',
            'available_units' => 'required'
        ]);

        if($valid->fails()) {
            return back()->withErrors($valid)->withInput($request->all());
        }

        $data = stockHelper::updateStock($valid->validated(), decrypt($id));
        if($data) {
            return redirect()->route('backend.stock.index');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
