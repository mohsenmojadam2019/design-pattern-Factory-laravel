<?php

namespace App\Models;

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }

}
