<?php declare(strict_types=1);

/**
 * Middlewares
 * - Implementation of PSR-15 https://www.php-fig.org/psr/psr-15/
 * - package to install it "psr/http-server-middleware"
 * - Invented to resolve problems in API applications (not MVC)
 * - Whe some code is duplicated and uses over and over the all application
 *
 * The common areas when we can use this idea:
 * - Exception handling
 * - Authorization
 * - Authentication
 * - Auditing
 * - Rate limiting
 * - Caching
 * - Header Accept Check
 * - Data Filter
 * etc...
 */

