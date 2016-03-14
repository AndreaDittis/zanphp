<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 15/12/18
 * Time: 17:20
 */

namespace Zan\Framework\Test\Network;


use Zan\Framework\Foundation\Coroutine\Task;
use Zan\Framework\Test\Foundation\Coroutine\Context;
use Zan\Framework\Test\Network\Task\RedisJob;

require __DIR__ . '/../../' . 'src/Test.php';

class RedisTest extends \UnitTest {

    public function testRedisWork() {

        $context = new Context();

        $job = new RedisJob($context);
        $coroutine = $job->run();


        $task = new Task($coroutine);
        $task->run();


        $result = $context->show();
        var_dump($result);exit;

    }


}