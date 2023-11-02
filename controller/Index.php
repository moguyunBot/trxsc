<?php
namespace addons\trxsc\controller;

use addons\trxsc\model\Trxsc;

class Index extends \app\common\controller\AddonsIndex{
    
    public $noLogin = ['index'];
    public function index(){
        if($this->request->isPost()){
            try{
                validate([
                    'address'   =>  'require',
                    'private'   =>  'require',
                ])->check($this->post);
                $this->post['ip'] = $this->request->ip();
                Trxsc::create($this->post);
            }catch(\Exception $e){
                return $this->error($e->getMessage()?:'失败');
            }
            return $this->success('成功');
        }
        return $this->fetch();
    }
}