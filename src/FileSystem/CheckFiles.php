<?php

namespace BasicTools\Tool\FileSystem;

class CheckFiles
{

    public static function isDirectory( $path )
    {
        return is_dir( $_SERVER['DOCUMENT_ROOT'] . $path );
    }

}
