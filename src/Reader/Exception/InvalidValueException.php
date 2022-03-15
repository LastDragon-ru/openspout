<?php

namespace OpenSpout\Reader\Exception;

use Throwable;

class InvalidValueException extends ReaderException
{
    /** @var mixed */
    private $invalidValue;

    /**
     * @param mixed $invalidValue
     */
    public function __construct($invalidValue, string $message = '', int $code = 0, Throwable $previous = null)
    {
        $this->invalidValue = $invalidValue;
        parent::__construct($message, $code, $previous);
    }

    public function getInvalidValue(): mixed
    {
        return $this->invalidValue;
    }
}
