<?php namespace Scheduler\Schedule;

use Scheduler\Core\EloquentBaseRepository;
use Sentry;

class ScheduleRepository extends EloquentBaseRepository
{
    public function __construct(Schedule $model)
    {
        $this->model = $model;
    }

    /**
     * Retrieves all of the reminders for the logged in user
     *
     * @return object
     */
    public function getAll()
    {
        $userId = Sentry::getUser()->id;
        return $this->model->where('user_id', $userId)->get();
    }
    
    /**
     * Get the reminders within a certain span of time from the current time
     *
     * @param integer $currentTime
     * @param integer $length In seconds
     * @return object
     */
    public function getRemindersWithin($currentTime, $length)
    {
        return $this->model
            ->whereBetween('timestamp', array($currentTime, $currentTime + $length))
            ->get();        
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
