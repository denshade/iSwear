<?php


class Interpreter
{
    public function interpret($eventsFile)
    {
        $contents = file_get_contents($eventsFile);
        $events = $this->getEventsFromFile($contents);
        $triggers = $this->getTriggers($contents);
        $this->findAndDecorateEvents($events, $triggers);
    }

    private function getEventsFromFile($contents)
    {
        return [];
    }

    private function getTriggers($contents)
    {
        return [];
    }

    private function findAndDecorateEvents($events, $triggers)
    {
        //TBD
    }
}