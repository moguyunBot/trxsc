<?php
$configs = include(__DIR__.'/configs.php');
if(!empty($configs['basic']['configs']['domain']['value'])){
    return [
        [
            'domain'        =>  $configs['basic']['configs']['domain']['value'],
            'rule'        =>  [
                '/'             =>  'index/index'
            ]
        ]
    ];
}