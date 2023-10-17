<?php

namespace Mmeshkatian\PersianCarbon;

use Morilog\Jalali\Jalalian;

trait PersianCarbon
{
    public function toPersian()
    {
        return Jalalian::fromCarbon($this);
    }
}
