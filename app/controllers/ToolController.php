<?php

class ToolController extends BaseController {
    
    protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    $title = 'Toolkit';
	    $breadcumb_title = 'Toolkit';
        $this->layout->content = View::make(get_controller_theme('toolkit'))->with(compact('breadcumb_title', 'title'));
	}
	
	public function phpOnLine(){
	    $title = 'php-on-line';
	    $breadcumb_title = 'php-on-line';
        $this->layout->content = View::make(get_controller_theme('toolkitPhpOnLine'))->with(compact('breadcumb_title', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('tools.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('tools.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('tools.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
