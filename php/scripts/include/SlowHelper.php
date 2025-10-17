<?php
declare(strict_types=1);

namespace include;

class SlowHelper
{
    public function doSleep(): void
    {
        sleep(5);
        echo "This is a slow PHP response with deep stack trace.\n";
    }
}