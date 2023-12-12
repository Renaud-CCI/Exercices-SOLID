<?php

namespace ISPViolation;


interface IWorkable
{
    public function work();
}

interface IFeedable
{
    public function eat();
}

class SuperWorker implements IWorkable, IFeedable
{
    public function work()
    {
        // working much more
    }

    public function eat()
    {
        // eating in launch break
    }
}

class Worker implements IWorkable, IFeedable
{
    public function work()
    {
        // working
    }

    public function eat()
    {
        // eating in launch break
    }
}


class Robot implements IWorkable
{

    public function work()
    {
        // working 24 hours per day
    }
}