<?php

use Scheduler\Schedule\ScheduleRepositoryInterface;
use Scheduler\Settings\SettingsRepositoryInterface;

class ScheduleController extends BaseController {

    /**
     * Setup the controller
     *
     * @param ScheduleRepositoryInterface $schedule
     * @param SettingsRepositoryInterface $settings
     */
    public function __construct(ScheduleRepositoryInterface $schedule, SettingsRepositoryInterface $settings)
    {
        $this->schedule = $schedule;
        $this->settings = $settings;
    }

    /**
     * Renders out the settings page
     *
     * @return object
     */
    public function index()
    {
        // Render View
        return View::make('schedule.index');
    }
}