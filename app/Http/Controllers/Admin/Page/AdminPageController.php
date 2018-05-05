<?php

namespace App\Http\Controllers\Admin\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Page;

class AdminPageController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pages = Page::paginate(15);
        //dd($pages);
        return view('admin.page.list', ['pages' => Page::paginate(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pagee  $pagee
     * @return \Illuminate\Http\Response
     */
    public function show(Pagee $pagee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pagee  $pagee
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagee $pagee)
    {
        return view('admin.page.list', ['pages' => Page::paginate(1)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pagee  $pagee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagee $pagee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pagee  $pagee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagee $pagee)
    {
        //
    }




}
