<?php
/**
 * Created by PhpStorm.
 * User: weili
 * Date: 2021-01-28
 * Time: 18:45
 */


/**
 * {
 * "ID":"order_1",
 * "Name":"order",
 * "Tags":["xdp-\/core.order"],
 * "Address":"192.168.232.201",
 * "Port":18307,
 * "Check":{
 * "name":"order_1.check",
 * "tcp":"192.168.232.201:18307",
 * "interval":"10s",
 * "timeout":"2s"
 * }
 * }
 * */
return [
    'order' => [
        [
            'ID' => 'order_1',
            'Name' => 'order',
            'Tags' => ['xdp-\/core.order'],
            'Address' => '192.168.56.102',
            'Port' => 9801,
            'Check' => [
                'name' => 'order_1.check',
                'tcp' => '192.168.56.102:9801',
                'interval' => '10s',
                'timeout' => '2s'
            ]
        ],
    ],
];