<?php
namespace addons\trxsc\controller;

use addons\trxsc\model\Trxsc;

class Admin extends \app\common\controller\AddonsAdmin{
    public function index(){
        $list = Trxsc::order('id desc')->paginate(['list_rows'=>20,'query'=>$this->get]);
        return $this->fetch('',['list'=>$list]);
    }
}