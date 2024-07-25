<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return response()->json($contracts);
    }

    public function store(Request $request)
    {
        $contract = Contract::create($request->all());
        return response()->json($contract);
    }

    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return response()->json($contract);
    }

    public function update(Request $request, $id)
    {
        $contract = Contract::findOrFail($id);
        $contract->update($request->all());
        return response()->json($contract);
    }

    public function destroy($id)
    {
        Contract::destroy($id);
        return response()->json(['message' => 'Contract deleted']);
    }
}
namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return response()->json($contracts);
    }

    public function store(Request $request)
    {
        $contract = Contract::create($request->all());
        return response()->json($contract);
    }

    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return response()->json($contract);
    }

    public function update(Request $request, $id)
    {
        $contract = Contract::findOrFail($id);
        $contract->update($request->all());
        return response()->json($contract);
    }

    public function destroy($id)
    {
        Contract::destroy($id);
        return response()->json(['message' => 'Contract deleted']);
    }
}
