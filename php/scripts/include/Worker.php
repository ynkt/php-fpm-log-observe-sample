<?php
declare(strict_types=1);

namespace include;

require_once 'SlowHelper.php';

class Worker
{
    public function process(): void
    {
        $helper = new SlowHelper();
        $helper->doSleep();
    }
}