<?php

namespace BasicTools\Tool\Log;

use BasicTools\Tool\FileSystem\CheckFiles;
use BasicTools\Tool\FileSystem\CreateFiles;
use BasicTools\Tool\Log\Interfaces\LogInterface;
class LogToFile extends BasicLog implements LogInterface
{

    public function toLog($to_log)
    {
        $this->setToLog($to_log);
        return $this;
    }

    public function channel($channel)
    {
        $this->setChannel( $channel );
        return $this;
    }

    public function setLogType($type)
    {
        $this->setType( $type );
        return $this;
    }

    public function save()
    {
        if (!CheckFiles::isDirectory('logs')) {
            CreateFiles::makeDirectory('logs');
        }
        file_put_contents( 'logs/' . $this->getChannel() . '.log',
            print_r(date('d/m/y H:i') . ' : ' . $this->getToLog() . PHP_EOL , true),
            FILE_APPEND
        );
    }
}
