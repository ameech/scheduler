<?php namespace Scheduler\Settings;

interface SettingsInterface {
    public function get($name);
    public function getAll();
    public function set($name, $value);
}