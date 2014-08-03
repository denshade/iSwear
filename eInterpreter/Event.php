<?php


class Event
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $codeToEval;

    /**
     * @param string $name
     * @param string $codeToEval
     */
    public function __construct($name, $codeToEval)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function evaluation()
    {
        return eval($this->codeToEval);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



}