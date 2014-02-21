<?php

class HomeController extends BaseController
{
    
    protected $layout = 'layouts.main';

    public function index() {
        $title = '首页';
        $this->layout->content = View::make('index')->with(compact('title'));
    }

    public function github() {
        return Redirect::to('https://github.com/rose1988c/tools');
    }
}