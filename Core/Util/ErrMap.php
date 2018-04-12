<?php

namespace Core\Util;

// 错误集中捕获,程序所有异常的字典
class ErrMap
{

    const ERROR = [
    // 用户类信息错误
        1001        => '用户暂未登陆,请登录后重试',

    // 商品信息
        2001        => '请选择要查看的商品',
        2002        => '商品查找失败',

    // 购物车
        3001        => '商品ID,价格,数量都不能为空',
        3002        => '商品ID不能为空',
        3003        => '购物车添加失败',
        3004        => '购物车添加失败',
        3005        => '购物车暂无信息',

    // 订单
        4001        => '订单写入失败',
        4002        => '订单商品表写入失败',
        4003        => '购物车商品删除失败',
        4004        => '订单信息为空',
        4005        => '订单ID不能为空',
        4006        => '用户地址参数不正确',
        4007        => '用户地址为空',
        4008        => '该用户暂无订单',

    // 结算
        5001        => '支付密码,地址ID,订单都不能为空',
        5002        => '复购余额不能为空',
        5003        => '支付密码不正确',

    // 地址错误
        6001        => '用户地址不存在',
        6002        => '添加地址信息不完整',
        6003        => '手机地址不合法',
        6004        => '用户地址已经被删除',
        6005        => '用户地址删除失败',
        ];

    // 获取错误码
    static function get( $code )
    {
        if( isset( self::ERROR[$code] )){
            return [
                'errno'     => $code,
                'errmsg'    => self::ERROR[$code]
                    ];
        }
        return [
            'errno'     => $code,
            'errmsg'    => '未定义的错误码'
        ];
    }
}
