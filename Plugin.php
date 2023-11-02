<?php
namespace addons\trxsc;

class Plugin extends \think\Addons{
    public function install(){
        $menus = [
            [
                'title'     =>  '生成记录',
                'icon'      =>  'mdi-upload-network-outline',
                'uri'       =>  'admin/index',
            ]
        ];
        $this->create_menu($menus);
    }
    
    public function uninstall(){
        $this->delete_menu();
    }
}