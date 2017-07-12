<?php

namespace Sparta\CronTester\Cron;

class Test2
{
    /**
     * Create Backup
     *
     * @return $this
     */
    public function execute()
    {
        sleep(30);
        return $this;
    }
}
