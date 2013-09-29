<?php namespace Scheduler\Schedule;

use Sentry;
use Scheduler\Core\EloquentBaseModel;
use Scheduler\Core\Exceptions\NotAuthorizedException;

class DbSchedule extends EloquentBaseModel implements ScheduleInterface {

    protected $table = 'reminders';
    protected $validationRules = [];

    /**
     * Checks if the user is logged in
     */
    public function __construct()
    {
        // Check if the user is logged in
        if (!Sentry::check()) {
            throw new NotAuthorizedException('No user authenticated.');
        }
    }

    /**
     * Gets all of the users reminders
     */
    public function getAll()
    {

    }
}