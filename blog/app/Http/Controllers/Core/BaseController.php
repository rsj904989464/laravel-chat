<?php

namespace App\Http\Controllers\Core;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    use Base;
    protected $tdk = [];
    protected $view = true;
    protected $tpl = '';


    public function __construct()
    {
        $this->tdk['d'] = 'desc';
        $this->tdk['k'] = 'keyword';
    }


    public function __destruct()
    {
        if(!$this->tpl){
            $this->default_tpl();
        }
        $view = view($this->tpl,array_merge($this->data,['tdk'=>$this->tdk]));
        if($this->view) die($view);
    }

    protected function default_tpl(){
        $this->pre((request()->route()->getAction())['controller']);
        $this->pre(end(explode("\\",(request()->route()->getAction())['controller'])));
        $controller_method = explode('@',end(explode("\\",(request()->route()->getAction())['controller'])));
        $this->pre($controller_method);
    }
}