<?php

$time = microtime(true);
register_shutdown_function(
        function() use ($time)
{
    printf("Memory: %s / %s bytes\nTime: %f ms\nDeclared: %d classes\nIbcluded: %d \n", number_format(memory_get_usage()), number_format(memory_get_peak_usage()), (microtime(true) - $time) * 1000, count(get_declared_classes()), count(get_included_files())
    );
}
);
