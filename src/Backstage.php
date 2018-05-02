<?php

namespace App;

class Backstage extends Item
{
    public function updateQuality()
    {
        if ($this->sellIn > 10) {
            $this->quality = $this->quality + 1;
        }

        if ($this->sellIn <= 10 && $this->sellIn > 5) {
            $this->quality = $this->quality + 2;
        }

        if ($this->sellIn <= 5) {
            $this->quality = $this->quality + 3;
        }

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        $this->sellIn = $this->sellIn - 1;
    }
}
