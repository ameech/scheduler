<?php

interface NotifierInterface {
    public function notify($user, $message);
}