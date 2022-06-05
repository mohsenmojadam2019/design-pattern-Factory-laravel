<?php

namespace App\FactoryMethod\managers;

use App\FactoryMethod\Interviewers\Interviewer;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}
