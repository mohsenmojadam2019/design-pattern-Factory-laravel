<?php

namespace App\FactoryMethod;

use App\FactoryMethod\managers\DeveloperManager;
use App\FactoryMethod\managers\MarketingManager;

class IndexController
{
    public function index()
    {
        $developerManager = new DeveloperManager();
        var_dump($developerManager->takeInterview());


    }
}
