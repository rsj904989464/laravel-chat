<?php
namespace App\Http\Controllers\Core;
trait Base
{
    protected $data = null;

    function pre($data,$stop = true,$view = false){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        $this->view = $view;
        if($stop) exit;
    }
}