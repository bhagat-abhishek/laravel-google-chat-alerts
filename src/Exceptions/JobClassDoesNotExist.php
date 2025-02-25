<?php

namespace GuyWarner\GoogleChatAlerts\Exceptions;

use RuntimeException;

class JobClassDoesNotExist extends RunTimeException
{
    public static function make(?string $name): self
    {
        return new self("The configured job class `{$name}` does not exist. Make sure you specific a valid class name in the `job` key of the google-chat-alerts config file.");
    }
}
