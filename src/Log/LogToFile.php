<?php

namespace BasicTools\Tool\Log;

use BasicTools\Tool\Log\Interfaces\LogInterface;
class LogToFile extends BasicLog implements LogInterface
{

    public function toLog($to_log)
    {
        $this->to_log = $to_log;
        return $this;
    }

    public function channel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function save()
    {
        file_put_contents( 'logs/' . $this->channel . '.log',
            print_r(date('d/m/y H:i') . ' : ' . $this->to_log . PHP_EOL , true),
            FILE_APPEND
        );
    }
}
