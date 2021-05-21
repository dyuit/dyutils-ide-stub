<?php

namespace Dy;

class Fenci
{
    /**
     * 尺寸缩放
     *
     * @param string $src
     * @param string $dest
     * @param integer $width
     * @param integer $height
     * @return void|ErrorException
     */
    public function resize(string $src, string $dest, int $width, int $height)
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
    public function crop(string $src, string $dest, int $x, int $y, int $width, int $height)
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
    public function captcha(string $dest, int $width, int $height)
    {
    }

    /**
     * QR 生成
     *
     * @param string $content
     * @param string $dest
     * @param integer $width
     * @return void|bool|ErrorException
     */
    public function qr(string $content, string $dest, int $width)
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
    public function avatar(string $dest, int $width = 128, int $padding = 5)
    {
    }
}
