<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class OrderModel extends RelationModel{
    protected $_link = array(
        'Buyer' => array(
            'mapping_type'  => self::BELONGS_TO,
            'class_name'    => 'Buyer',
            'foreign_key'   => 'buyer_id',
            'mapping_name'  => 'buyer',
            )
    );
}