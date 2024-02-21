<?php
namespace BasicTools\Tool\Log\Interfaces;
interface LogInterface
{
    public function toLog( $string );

    public function channel( $channel );

    public function setType( $type );
    public function save();
}
