<?php
declare(strict_types=1);

namespace include;

require_once 'Worker.php';

class SlowSimulator
{
    public function run(): void
    {
        $worker = new Worker();
        $worker->process();
    }
}