<?php namespace Scheduler\Settings;

interface SettingsRepositoryInterface {
    public function get($name);
    public function set($name, $value);
}