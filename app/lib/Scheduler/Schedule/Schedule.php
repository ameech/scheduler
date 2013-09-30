<?php namespace Scheduler\Schedule;

use Scheduler\Core\EloquentBaseModel;

class Schedule extends EloquentBaseModel
{
    protected $table    = 'reminders';
    protected $fillable = ['user_id', 'description', 'date', 'time'];

    protected $validationRules = [
        'description' => 'required',
        'date' => 'required',
        'time' => 'required',
    ];
}
