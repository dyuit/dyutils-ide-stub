<?php

namespace Dy;

/**
 * Barcode 条形码
 */
class Barcode
{

    /**
     * QR 生成
     *
     * @param string $content 内容
     * @param string $dest 存储位置
     * @param integer $height 高度
     * @return void|bool|ErrorException
     */
    public static function qr(string $content, string $dest, int $height=128)
    { 
    }

    /**
     * code128 a 规范
     * CODE128A:标准数字和大写字母,控制符,特殊字符
     *
     * @param string $str 内容
     * @param string $dest 图片存储地址,PNG类型.
     * @param integer $height 条码高度
     * @return void|Exception
     */
    public static function code128a(string $str, string $dest, int $height=80)
    {
    }

    /**
     * code128 b 规范
     * CODE128B:标准数字和大写字母,小写字母,特殊字符
     *
     * @param string $str 内容
     * @param string $dest 图片存储地址,PNG类型.
     * @param integer $height 条码高度
     * @return void|Exception
     */
    public static function code128b(string $str, string $dest, int $height=80)
    {
    }

    /**
     * code128 c 规范
     * CODE128C:[00]-[99]的数字对集合,共100个
     *
     * @param string $str 内容
     * @param string $dest 图片存储地址,PNG类型.
     * @param integer $height 条码高度
     * @return void|Exception
     */
    public static function code128c(string $str, string $dest, int $height=80)
    {
    }

    /**
     * code39 规范
     * 数字和字母支持
     * @param string $str 内容
     * @param string $dest 图片存储地址,PNG类型.
     * @param integer $height 条码高度
     * @return void|Exception
     */
    public static function code39(string $str, string $dest, int $height=80)
    {
    }

    /**
     * EAN 13 规范
     *
     * @param string $str 内容
     * @param string $dest 图片存储地址,PNG类型.
     * @param integer $height 条码高度
     * @return void|Exception
     */
    public static function ean13(string $str, string $dest, int $height=80)
    {
    }
}
