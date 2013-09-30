<?php namespace Scheduler\Notifier;

use Mail;

class EmailNotifier implements NotifierInterface {

    /**
     * Notify the user by email
     *
     * @param string $email
     * @param string message
     * @return boolean
     */
    public function notify($email, $description)
    {
        $data['description'] = $description;
        $result = Mail::send('emails.reminder.reminder', $data, function($message) use ($email)
        {
            $message->to($email)->subject('Reminder');
        });

        return $result;
    }
}
