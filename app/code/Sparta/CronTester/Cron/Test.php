<?php

namespace Sparta\CronTester\Cron;

class Test
{
    /**
     * Create Backup
     *
     * @return $this
     */
    public function execute()
    {
        sleep(600);
        return $this;
    }
}
