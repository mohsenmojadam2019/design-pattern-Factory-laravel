<?php

namespace App\FactoryMethod\Interviewers;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        return 'Asking about design patterns';
    }
}

