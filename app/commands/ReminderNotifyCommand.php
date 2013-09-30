<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Scheduler\Schedule\ScheduleRepository;
use Scheduler\Notifier\NotifierInterface;

class ReminderNotifyCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'reminder:notify';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Notifys people about their reminders.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(ScheduleRepository $schedule, NotifierInterface $notifier)
	{
		parent::__construct();
        $this->schedule = $schedule;
        $this->notifier = $notifier;
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
        // Get the current time
        $currentTime = time();
        $this->info('test');

        // Get upcoming reminders
        $reminders = $this->schedule->getRemindersWithin($currentTime, 60);

        // Loop through and send reminders
        foreach ($reminders as $reminder) {
            $result = $this->notifier->notify('meech.adam@gmail.com', $reminder->description); 
            $this->info($result);
        }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
        return [];
	}

}
