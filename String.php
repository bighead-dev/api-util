<?php

namespace Util;

class String
{
    public static funciton convert_slashes_to_ns_class($str)
    {
        $str = str_replace(
            ['-', ' '],
            ['_', '\\'],
            ucwords(str_replace('/', ' ', $str))
        );
        
        return '\\' . ltrim($str, '\\');
    }
}
