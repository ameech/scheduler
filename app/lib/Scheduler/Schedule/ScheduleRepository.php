<?php namespace Scheduler\Schedule;

use Scheduler\Core\EloquentBaseRepository;

class ScheduleRepository extends EloquentBaseRepository
{
    public function __construct(Schedule $model)
    {
        $this->model = $model;
    }

    /**
     * Returns the schedule form
     * 
     * @return object
     */
    public function getScheduleForm()
    {
        return new ScheduleForm;
    }
}