<?php

namespace App;

class Conjured extends Item
{
    public function updateQuality()
    {
        if ($this->sellIn > 0) {
            $this->quality = $this->quality - 2;
        }

        if ($this->sellIn <= 0) {
            $this->quality = $this->quality - 4;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }

        $this->sellIn = $this-> sellIn - 1;
    }
}
