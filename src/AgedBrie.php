<?php

namespace App;

class AgedBrie extends Item
{
    public function updateQuality()
    {
        if ($this->sellIn <= 0) {
            $this->quality = $this->quality + 2;
        }

        if ($this->sellIn > 0) {
            $this->quality = $this->quality + 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        $this->sellIn = $this->sellIn - 1;
    }
}
