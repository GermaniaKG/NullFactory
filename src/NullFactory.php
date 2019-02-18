<?php
namespace Germania\NullFactory;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;

class NullFactory
{

    use LoggerAwareTrait;

    public $default_return = null;

    public function __construct( $default_return = null, LoggerInterface $logger = null )
    {
        $this->default_return = $default_return;
        $this->setLogger( $logger ?: new NullLogger );
    }


    public function __invoke()
    {
        $this->logger->debug("NullFactory", [
            'num_args' => func_num_args(),
            'return_value' => $this->default_return
        ]);

        return $this->default_return;
    }
}
