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
        
        $plugs = Config::get('site\plug');
        
        $this->layout->content = View::make(get_controller_theme('plug'))->with(compact('breadcumb_title', 'title', 'plugs'));
    }
    
    public function detail($name){
        
        $name = ucfirst($name);
        
        $title = 'Plug';
        $breadcumb_title = 'Plug';
        
        $plugs = Config::get('site\plug.' . $name);
        
        if (empty($plugs)) {
            return Redirect::to('plug');
        }
        
        $this->layout->content = View::make(get_controller_theme('plugDetail'))->with(compact('breadcumb_title', 'title', 'plugs', 'name'));
    }
}
