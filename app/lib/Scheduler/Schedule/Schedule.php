<?php namespace Scheduler\Schedule;

use Scheduler\Core\EloquentBaseModel;

class Schedule extends EloquentBaseModel
{
    protected $table    = 'reminders';
    protected $fillable = ['user_id', 'description', 'date', 'time', 'timestamp'];

    protected $validationRules = [
        'description' => 'required',
        'date' => 'required',
        'time' => 'required',
    ];

    /**
     * Add a user relationship
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
