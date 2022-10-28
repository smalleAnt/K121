<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @author XingMeng
 * @email hnxsh@foxmail.com
 * @date 2017年12月15日
 *  列表文章模型类
 */
namespace app\admin\model\content;

use core\basic\Model;

class ProductExtModel extends Model
{

    protected $scodes = array();

    //获取产品的额外信息
    public function getExtInfo($productid){
        $field = array(
            '*',
        );
        return parent::table('ay_product_ext')->field($field)
            ->where("productid=$productid")
            ->find();
    }

    // 修改产品的额外信息
    public function modExtInfo($id, $data)
    {
        return parent::table('ay_product_ext')->where("productid=$id")->update($data);
    }

    // 添加文章扩展内容
    public function addExtInfo(array $data)
    {
        return parent::table('ay_product_ext')->insert($data);
    }
}