<?php

use Scheduler\Settings\SettingsInterface;

class SettingsController extends BaseController {

    /**
     * Sets up the controller
     *
     * @param SettingsInterface $settings
     */
    public function __construct(SettingsInterface $settings)
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
        return View::make('settings.index', [
            'settings' => $this->settings->getAll(),
        ]);
    }
}