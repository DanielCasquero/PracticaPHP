<?php
spl_autoload_register(
    function ($class) {
        $paths=[
            __DIR__ . '/app/controllers/',
            __DIR__ . '/app/models/',
            __DIR__ . '/app/views/',
        ];
        foreach ($paths as $path) {
            $file=$path.$class.'.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }

    }

);