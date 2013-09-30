<?php

use Scheduler\Schedule\Schedule;
use Scheduler\Schedule\ScheduleRepository;
use Scheduler\Notifier\EmailNotifier;
use Scheduler\Notifier\NotifierInterface;

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/
Artisan::add(new ReminderNotifyCommand(new ScheduleRepository(new Schedule), new EmailNotifier));
