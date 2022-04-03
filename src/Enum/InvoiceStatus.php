<?php declare(strict_types=1);

namespace App\Enum;

/**
 * InvoiceStatus::Pending -> returns a object!
 * We can type hinting on method(InvoiceStatus $status)
 *
 *
 * case Pending; -> without assigment is a PURE CASE
 * only cases in Enum -> PURE ENUM
 *
 * Two read only public properties:
 * name, value
 *
 * Backed Enums provided interface: https://www.php.net/manual/en/class.backedenum.php
 *
 * Can implement interfaces and use traits but not inheritance
 *
 * New builtin function enum_exists() and new Reflection Classes
 *
 */

interface SomeInterface
{

}

enum PureEnum
{
    case pure;
}

/**
 * Union types are not allowed.
 * Can't mix backed and pure cases.
 * Cases must be unique.
 */
enum BackedEnum: int
{
    case backed = 1;
}

enum InvoiceStatus: int implements SomeInterface
{
    case Pending = 0;
    case Paid = 1;
    case Void = 2;
    case Failed = 3;

    public function toString(): string
    {
        return match($this) {
          self::Paid => 'Paid',
          self::Failed => 'Failed',
          self::Void => 'Void',
          default => 'Pending'
        };
    }
}