<?php

class Events
{
    public $_events = [];
    public function on($name, $handler)
    {
        //初始化数组$_events[$name]=[];
        $this->_events[ $name ] = isset($this->_events[ $name ]) ? $this->_events[ $name ] : [];
        array_push($this->_events[ $name ],$handler);
    }
}
$event = new Events;
$event->on('name','zhangsan');
$event->on('name','lishi');
print_r($event->_events);
/**
Array
(
    [name] => Array
    (
        [0] => zhangsan
        [1] => lishi
    )
)
 */
