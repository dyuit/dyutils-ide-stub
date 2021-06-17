<?php

namespace Dy;

class Otp
{
    /**
     * 新建生成器
     *
     * @param string $secret 密钥 Dy\Crypt::base32_encode
     * @param int $digits  长度
     * @param int $preiod  变动间隔 htop时候有效 建议60
     *
     * @return void
     */
    public function __construct(string $secret, int $digits, int $preiod)
    {
    }

    /**
     * 顺序验证码
     *
     * @package int $index  序号
     *
     * @return integer
     */
    public function hotp(int $index)
    {
    }

    /**
     * 时序验证码
     *
     * @return integer
     */
    public function totp()
    {
        // code...
    }

    /**
     * 发行者:用户名
     *
     * 格式为 "issuer:username",获取地址后可以生成二维码提供给client
     *
     * @param String $issuer
     * @return String
     */
    public function url(String $issuer)
    {
    }
}
