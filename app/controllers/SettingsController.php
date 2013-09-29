<?php

use Scheduler\Settings\SettingsRepositoryInterface;

class SettingsController extends BaseController {

    /**
     * Sets up the controller
     *
     * @param SettingsRepositoryInterface $settings
     */
    public function __construct(SettingsRepositoryInterface $settings)
    {
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
        return View::make('settings.index');
    }
}