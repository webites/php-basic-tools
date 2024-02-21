<?php

namespace BasicTools\Tool\Log;

class BasicLog
{
    private string $to_log;
    private string $channel;
    private string $type;

    /**
     * @param string $to_log
     */
    public function setToLog($to_log)
    {
        $this->to_log = $to_log;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getToLog()
    {
        return $this->to_log;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
