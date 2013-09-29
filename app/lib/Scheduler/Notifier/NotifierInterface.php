<?php namespace Scheduler\Notifier;

interface NotifierInterface {
    public function notify($user, $message);
}