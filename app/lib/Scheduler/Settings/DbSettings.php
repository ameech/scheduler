<?php namespace Scheduler\Settings;

use Sentry;
use Scheduler\Core\EloquentBaseModel;
use Scheduler\Core\Exceptions\NotAuthorizedException;

class DbSettings extends EloquentBaseModel implements SettingsInterface {

    protected $table = 'settings';
    protected $validationRules = [
        'name'  => 'required',
        'value' => 'required',
    ];

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
     * Gets a setting by it's name
     *
     * @param string $name
     * @return void
     */
    public function get($name)
    {

    }

    /**
     * Gets all of the users settings
     */
    public function getAll()
    {

    }

    /**
     * Sets a setting with a name and value
     *
     * @param string $name
     * @param string $value
     * @return mixed
     */
    public function set($name, $value)
    {

    }
}