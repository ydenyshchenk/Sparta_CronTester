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
        error_log('Sparta_CronTester: ' . date("Y-m-d H:i:s") . "\n", 3, 'var/log/Sparta_CronTester.log');

        return $this;
    }
}
