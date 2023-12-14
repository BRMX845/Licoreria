<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use Illuminate\Http\Request;

/**
 * Class ShoppingController
 * @package App\Http\Controllers
 */
class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppings = Shopping::paginate();

        return view('shopping.index', compact('shoppings'))
            ->with('i', (request()->input('page', 1) - 1) * $shoppings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shopping = new Shopping();
        return view('shopping.create', compact('shopping'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Shopping::$rules);

        $shopping = Shopping::create($request->all());

        return redirect()->route('shoppings.index')
            ->with('success', 'Shopping created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shopping = Shopping::find($id);

        return view('shopping.show', compact('shopping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shopping = Shopping::find($id);

        return view('shopping.edit', compact('shopping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Shopping $shopping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopping $shopping)
    {
        request()->validate(Shopping::$rules);

        $shopping->update($request->all());

        return redirect()->route('shoppings.index')
            ->with('success', 'Shopping updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shopping = Shopping::find($id)->delete();

        return redirect()->route('shoppings.index')
            ->with('success', 'Shopping deleted successfully');
    }
}
