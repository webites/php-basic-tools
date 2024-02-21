<?php

namespace BasicTools\Tool\FileSystem;

class CreateFiles
{
    public static function makeDirectory( $path, $permissions = 0777 )
    {
        if( !is_dir( $_SERVER['DOCUMENT_ROOT'] . $path ) )
        {
            mkdir( $_SERVER['DOCUMENT_ROOT'] . $path, $permissions, true );
        }
    }
}
