<?php

namespace App\Http\Controllers\Links;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestLinks;
use Illuminate\Http\Request;
use Mockery\Exception;
use function Laravel\Prompts\error;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('links.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RequestLinks $request)
    {
        try {
            $request->createLink();
            return to_route('dashboard');
        } catch (Exception){
            return back()->with('error', 'Erro ao salvar Link! Tente novamente.');
        }
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
