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
        $reminders = $this->schedule->getAll();

        // Render View
        return View::make('schedule.index', [
            'reminders' => $reminders,
        ]);
    }

    /**
     * Creates a reminder
     *
     * @return mixed
     */
    public function createReminder()
    {
        $form = $this->schedule->getScheduleForm();

        // Validate the form
        if ( ! $form->isValid()) {
            return Redirect::to('schedule')->withErrors($form->getErrors());
        }

        $reminder = $this->schedule->getNew(Input::only('description', 'date', 'time'));
        $reminder->user_id = Sentry::getUser()->id;

        // Validate the data
        if ( ! $reminder->isValid()) {
            return Redirect::to('schedule')->withErrors($form->getErrors());
        }

        // Save the reminder
        $this->schedule->save($reminder);

        return Redirect::to('schedule')->with("message", "Your reminder was successfully saved.");
    }

    /**
     * Deletes a reminder
     *
     * @return object
     */
    public function deleteReminder()
    {
        $reminder = $this->schedule->getById(Input::get('reminder-id'));
        $this->schedule->delete($reminder);

        return Redirect::to('schedule')->with("message", "Your reminder was successfully deleted.");
    }
}
