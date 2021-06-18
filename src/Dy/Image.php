<?php

namespace Dy;

class Image
{

    /**
     * new Image
     *
     * @param string $str
     * @return Image|ErrorException
     */
    public function __construct(string $str)
    {
    }

    /**
     * new Image 空白图
     *
     * @param integer $width 长度
     * @param integer $height 高度
     * @return Image|ErrorException
     */
    public static function new(int $width, int $height)
    {
    }

    /**
     * 尺寸缩放
     *
     * @param integer $width 长度
     * @param integer $height 高度
     * @return Image|ErrorException
     */
    public function resize(int $width, int $height)
    {
    }

    /**
     * 截图
     *
     * @param integer $x
     * @param integer $y
     * @param integer $width
     * @param integer $height
     * @return Image|ErrorException
     */
    public function crop(int $x, int $y, int $width, int $height)
    {
    }

    /**
     * 图片覆盖
     *
     * @param Image $top
     * @param integer $x
     * @param integer $y
     * @return Image|ErrorException
     */
    public function over(Image $top, int $x, int $y)
    {
    }

    /**
     * 截图
     *
     * @param string $dest
     * @return void|ErrorException
     */
    public function save(string $dest)
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
