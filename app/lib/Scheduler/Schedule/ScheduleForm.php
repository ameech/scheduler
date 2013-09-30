<?php namespace Scheduler\Schedule;

use Scheduler\Core\FormBase;

class ScheduleForm extends FormBase
{
    protected $validationRules = [
        'description' => 'required',
        'date' => 'required',
        'time' => 'required',
    ];
}