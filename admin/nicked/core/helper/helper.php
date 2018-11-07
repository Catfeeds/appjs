<?php
/**
 * Created by PhpStorm.
 * User: by grace
 * Date: 2018/6/17
 * Time: 7:03
 */
if (!function_exists('p')) {
    /**
     * @param $arr
     */
    function p($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}
if (!function_exists('dd')) {
    /**
     * @param $arr
     */
    function dd($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        die();
    }
}
if (!function_exists('random_string')) {
    /**
     * 生成四位随机字符串
     * by grace
     * @param int $length
     * @return string
     */
    function random_string($length = 4)
    {
        // 密码字符集，可任意添加你需要的字符
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            // 这里提供两种字符获取方式
            // 第一种是使用 substr 截取$chars中的任意一位字符；
            // 第二种是取字符数组 $chars 的任意元素
            // $str .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
            $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $str;
    }
}
if (!function_exists('my_log')) {
    /**
     * 记录数据,写入文件
     * @param $info
     */
    function my_log($info)
    {
        $file_path = dirname(__DIR__) . '/../runtime/logs/log_' . date('Ymd') . '.log';
        file_put_contents($file_path, '[' . date('Y-m-d H:i:s') . '] ' . var_export($info, 1) . "\n", FILE_APPEND);
    }
}