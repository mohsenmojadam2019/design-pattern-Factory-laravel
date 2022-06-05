<?php

namespace App\FactoryMethod\managers;



use App\FactoryMethod\Interviewers\Developer;
use App\FactoryMethod\Interviewers\Interviewer;

class DeveloperManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}

