<?php
/**
 * PlugController.php
 * 
 * @author: Cyw
 * @email: chenyunwen01@bianfeng.com
 * @created: 2014-2-26 下午4:52:36
 * @logs: 
 *       
 */
class PlugController extends BaseController {

    protected $layout = 'layouts.main';

    public function index()
    {
        $title = 'Plug';
        $breadcumb_title = 'Plug';
        $this->layout->content = View::make(get_controller_theme('plug'))->with(compact('breadcumb_title', 'title'));
    }
    
}
