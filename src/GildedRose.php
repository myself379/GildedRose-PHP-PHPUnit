<?php

namespace App;

class GildedRose
{
    public static $items = [
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Conjured' => Conjured::class,
    ];

    public static function type($name, $quality, $sellIn)
    {
        if (array_key_exists($name, self::$items)) {
            return new self::$items[$name]($quality, $sellIn);
        }

        return new NormalItems($quality, $sellIn);
    }
}
