<?php

namespace SRPViolation;

interface DataChannelInterface
{
    public function send($c);
    public function receive();
}

interface ConnectionInterface
{
    public function dial($pno);
    public function hangup();
}

class Modem implements DataChannelInterface, ConnectionInterface
{
    public function dial($pno)
    {
        // Implementing dial($pno) method.
    }

    public function hangup()
    {
        //  Implementing hangup() method.
    }

    public function send($c)
    {
        // Implementing send($c) method.
    }

    public function receive()
    {
        // Implementing receive() method.
    }
}