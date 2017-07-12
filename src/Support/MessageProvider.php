<?php

namespace ZanPHP\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \ZanPHP\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
