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
        error_log('Sparta_CronTester: start ' . date("Y-m-d H:i:s") . "\n", 3, 'var/log/Sparta_CronTester.log');
        error_log('Sparta_CronTester: sleep 90 seconds ' . date("Y-m-d H:i:s") . "\n", 3, 'var/log/Sparta_CronTester.log');
        sleep(90);
        error_log('Sparta_CronTester: end ' . date("Y-m-d H:i:s") . "\n", 3, 'var/log/Sparta_CronTester.log');

        return $this;
    }
}
