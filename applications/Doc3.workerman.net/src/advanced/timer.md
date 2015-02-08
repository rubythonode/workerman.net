# 定时任务

## 接口
```
void \Workerman\Lib\Timer::add(int $time_interval, callable $callback [,$args = array(), bool $persistent = true])
```
定时执行某个函数或者类方法

### 参数
time_interval

多长时间执行一次，单位秒


callback

回调函数

args

参数

persistent

是否是持久的，如果只想定时执行一次，则传递false。默认是true，即一直定时执行。

### 返回值
无返回值，任何返回值都会被视为无效

### 示例
```php
use \Workerman\Worker;

$task = new Worker();
// 开启多少个进程运行定时任务，注意多进程并发问题
$task->count = 1;
$task->onWorkerStart = function($task)
{
    $time_interval = 2;
    \Workerman\Lib\Timer::add($time_interval, function()
    {
        echo "task run\n";
    });
};

```


## 定时任务使用注意事项
1、可以在任意位置使用```\Workerman\Lib\Timer::addadd(int $time_interval, callable $callback [,$args = array(), bool $persistent = true])```添加定时任务

2、添加的任务在当前进程执行，如果任务很重（特别是涉及到网络IO的任务），可能会导致该进程阻塞，暂时无法处理其它业务。所以最好将耗时的任务放到单独的进程运行，例如像示例中一样建立一个Worker进程运行

3、当一个任务没有在预期的时间运行完，这时又到了下一个运行周期，则会等待当前任务完成才会运行。也就是说当前进程的任务都是串行执行的。

4、要考虑到多进程设置了定时任务造成并发问题