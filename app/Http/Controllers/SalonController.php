<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonController extends Controller
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

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $salons = Salon::all();
        return response()->json($salons);
    }

    public function store(Request $request)
    {
        $salon = Salon::create($request->all());
        return response()->json($salon);
    }

    public function show($id)
    {
        $salon = Salon::findOrFail($id);
        return response()->json($salon);
    }

    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->update($request->all());
        return response()->json($salon);
    }

    public function destroy($id)
    {
        Salon::destroy($id);
        return response()->json(['message' => 'Salon deleted']);
    }
}
namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        $salons = Salon::all();
        return response()->json($salons);
    }

    public function store(Request $request)
    {
        $salon = Salon::create($request->all());
        return response()->json($salon);
    }

    public function show($id)
    {
        $salon = Salon::findOrFail($id);
        return response()->json($salon);
    }

    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->update($request->all());
        return response()->json($salon);
    }

    public function destroy($id)
    {
        Salon::destroy($id);
        return response()->json(['message' => 'Salon deleted']);
    }
}
