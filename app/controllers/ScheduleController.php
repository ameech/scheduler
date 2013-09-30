<?php

use Scheduler\Schedule\ScheduleRepository;
use Scheduler\Settings\SettingsInterface;

class ScheduleController extends BaseController {

    /**
     * Setup the controller
     *
     * @param ScheduleInterface $schedule
     * @param SettingsInterface $settings
     */
    public function __construct(ScheduleRepository $schedule, SettingsInterface $settings)
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
        // $reminders = $this->schedule->getAll();

        // Render View
        return View::make('schedule.index', [
            // 'reminders' => $reminders,
        ]);
    }

    /**
     * Creates a reminder
     */
    public function createReminder()
    {
        $form = $this->schedule->getScheduleForm();

        // Validate the form
        if ( ! $form->isValid()) {
            return Redirect::to('schedule')->withErrors($form->getErrors());
        }

        $reminder = $this->schedule->getNew(Input::only('description', 'date', 'time'));

        echo "<pre>";
        var_dump($reminder);
        echo "</pre>";
        exit;
    }
}