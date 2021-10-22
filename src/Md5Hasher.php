<?php
/**
 * Name: Test
 * User: chenchun
 * Date: 2021/10/22
 * Time: 14:41
 */


namespace Yhen\Testplug;


class Md5Hasher
{
    /**
     * Name: md5 加密
     * User: cc
     * @param $value
     * @param  array  $options
     * @return string
     */
    public function make($value,array $options=[]){
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5', $value.$salt);
    }

    /**
     * Name: 验证md5
     * User: cc
     * @param $value
     * @param $hashValue
     * @param  array  $options
     * @return bool
     */
    public function check($value,$hashValue,array $options=[])
    {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5', $value.$salt)===$hashValue;
    }
}
