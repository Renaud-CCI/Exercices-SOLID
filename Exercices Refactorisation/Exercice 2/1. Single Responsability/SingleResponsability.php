<?php

namespace SRPViolation;

interface ModemImplementationInterface
{
    public function dial($pno);

    public function hangup();

    public function send($c);

    public function receive();
}

class ModemImplementation implements ModemImplementationInterface
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
class DataChannel extends ModemImplementation
{
    public function send($c)
    {
        // Implementing send($c) method.
    }

    public function receive()
    {
        // Implementing receive() method.
    }
}
class Connection extends ModemImplementation
{
    public function dial($pno)
    {
        // Implementing dial($pno) method.
    }

    public function hangup()
    {
        //  Implementing hangup() method.
    }

}