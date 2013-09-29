<?php

use Scheduler\Schedule\ScheduleInterface;
use Scheduler\Settings\SettingsInterface;

class ScheduleController extends BaseController {

    /**
     * Setup the controller
     *
     * @param ScheduleInterface $schedule
     * @param SettingsInterface $settings
     */
    public function __construct(ScheduleInterface $schedule, SettingsInterface $settings)
    {
        $this->schedule = $schedule;
        $this->settings = $settings;
    }

    /**
     * Renders out the reminders page
     *
     * @return object
     */
    public function index()
    {
        // Get reminders
        $reminders = $this->schedule->getAll();

        // Render View
        return View::make('schedule.index', [
            'reminders' => $reminders,
        ]);
    }

    /**
     * Creates a reminder
     */
    public function createReminder()
    {

    }
}