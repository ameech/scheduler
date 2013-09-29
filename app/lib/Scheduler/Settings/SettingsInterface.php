<?php namespace Scheduler\Settings;

interface SettingsRepositoryInterface {
    public function get($name);
    public function getAll();
    public function set($name, $value);
}