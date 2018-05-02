<?php

namespace App;

class NormalItems extends Item
{
    public function updateQuality()
    {
        if ($this->sellIn > 0) {
            $this->quality = $this->quality - 1;
        }

        if ($this->sellIn <= 0) {
            $this->quality = $this->quality - 2;
        }

        $this->sellIn = $this-> sellIn - 1;
    }
}
