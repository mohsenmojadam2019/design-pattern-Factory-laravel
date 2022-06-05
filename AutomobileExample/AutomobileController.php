<?php

namespace App\Http\Controllers;

use App\Models\AutomobileFactory;

class AutomobileController
{

    public function create()
    {
        $item = AutomobileFactory::create('benz', 's400');

        return ($item->getMakeAndModel()); // outputs "benz s400"

    }
}
