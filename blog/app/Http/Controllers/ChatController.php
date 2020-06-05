<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Core\BaseController;

class ChatController extends BaseController
{

    public function index(){
        $this->data['t'] = 'chat';

    }
}