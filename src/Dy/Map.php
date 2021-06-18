<?php

namespace Dy;

class Map
{
    /**
     * 纬度
     *
     * @var float
     */
    protected $lng;

    /**
     * 经度
     *
     * @var float
     */
    protected $lat;

    /**
     * 模式
     *
     * 0. bd09
     * 1. wgs84
     * 2. gcj02
     * @var int
     */
    protected $mode;

    /**
     * 新建座标
     *
     * @param float $lng 纬度
     * @param float $lat 经度
     * @param integer $mode 模式
     */
    public function __construct(float $lng, float $lat, int $mode)
    {
    }

    /**
     * 转换为 bd09 座标系
     *
     * @return Map
     */
    public function bd09()
    {
    }

    /**
     * 转换为 gcj02 座标系
     *
     * @return Map
     */
    public function gcj02()
    {
    }

    /**
     * 转换为 wgs84 座标系
     *
     * @return Map
     */
    public function wgs84()
    {
    }

    /**
     * 长度计算
     *
     * @param Map $other
     * @return float
     */
    public function distance(Map $other)
    {
    }
}
