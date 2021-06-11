<?php

namespace Dy;

/**
 * 随机数
 */
class Rand
{
    /**
     * 随机浮点值
     *
     * @return float
     */
    public static function float()
    {
    }

    /**
     * 随机字符串
     * 包含字符和数字
     *
     * @param integer $limit 字符串长度
     * @return string
     */
    public static function alphanumeric(int $limit)
    {
    }

    /**
     * 随机数字
     *
     * @param integer $limit 数字长度
     * @return integer
     */
    public static function numeric(int $limit)
    {
    }

    /**
     * twtter snowflake
     *
     * @param int $work_id 节点 默认 1
     *
     * @return integer
     */
    public static function snowflake($work_id = 1)
    {
    }

    /**
     * sony snowflake
     *
     * @return integer
     */
    public static function sonyflake()
    {
    }
}
