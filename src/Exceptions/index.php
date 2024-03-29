<?php

/**
 * Types of throwing exceptions
 */

/**
 * Throw the basic Exception class
 */
throw new Exception('Missing billing info');

/**
 * Custom build in exception
 */
throw new InvalidArgumentException('Missing billing info');

/**
 * Use specified exception
 */
throw new MissingException('Missing billing info');

/**
 * More generic way
 */
throw InvoiceException::missingBillingInfo();
throw InvoiceException::invalidAmount();

/**
 *  Overwriting constructor
 */
class EmailNotFoundException extends Exception
{
    public function __construct(int $id)
    {
        parent::__construct("Email not found for id  " . $id);
    }

}