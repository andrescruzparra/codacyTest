<?php

namespace Styde;

abstract class ArmorTest2
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isMagical()) {
            return $this->absorbMagicDamage($attack);
        }

        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function Test2(){
        print_r("Hello World")
    }
}
