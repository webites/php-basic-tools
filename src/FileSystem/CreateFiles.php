<?php

namespace BasicTools\Tool\FileSystem;

class CreateFiles
{
    public static function makeDirectory( $path, $permissions = 0777 )
    {
        mkdir( $_SERVER['DOCUMENT_ROOT'] . $path, $permissions, true );
    }
}
