<?php

namespace Dy;

class Image
{
    /**
     * 尺寸缩放
     *
     * @param string $src 输入地址
     * @param string $dest 输出地址
     * @param integer $width 长度
     * @param integer $height 高度
     * @return void|ErrorException
     */
    public static function resize(string $src, string $dest, int $width, int $height)
    {
    }

    /**
     * 截图
     *
     * @param string $src
     * @param string $dest
     * @param integer $x
     * @param integer $y
     * @param integer $width
     * @param integer $height
     * @return void|ErrorException
     */
    public static function crop(string $src, string $dest, int $x, int $y, int $width, int $height)
    {
    }

    // public function water(string $src1, string $src2, string $dest, int $x, int $y, int $width, int $height) { }

    /**
     * 验证码
     *
     * @param string $dest
     * @param integer $width
     * @param integer $height
     * @return void|array|ErrorException
     */
    public static function captcha(string $dest, int $width, int $height)
    {
    }

    /**
     * 头像生成
     *
     * @param string $dest
     * @param integer $width
     * @param integer $padding
     * @return void|bool|ErrorException
     */
    public static function avatar(string $dest, int $width = 128, int $padding = 5)
    {
    }
}
