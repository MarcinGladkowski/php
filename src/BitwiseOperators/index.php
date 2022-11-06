<?php
/**
 * Example of usage bitwise operators in programming
 *
 * Permissions usage:
 *
 * We can imagine the permission/resource is an 1 when we have access to this or 0 when don't
 * It's mean: 110
 *
 * indexes:
 * 0 - don't have access or can't do with resource
 * 1 - have access or can do with resource
 * 2 - have access or can do with resource
 *
 * The decimal representation is 6!
 *
 * Most useful are operators | and & but remember about the rest
 */

assert(decbin(6) == '110');
assert(decbin(10) == '1010');

/**
 * How to check if you have access to resources
 */
class Permissions
{
    public const ADMIN = 10;
    public const SUPERVISOR = 8;
    public const NORMAL = 2;
}

/**
 * @param $userPermission
 * @param $accessLevel
 *
 *
 * @return int
 */

$supervisor = Permissions::SUPERVISOR;

function checkPermissions($user, $comparison): bool
{
    var_dump(
        $user & $comparison,
        decbin($user),
        decbin($comparison)
    );

    if ($user & $comparison) {
        return true;
    }
    return false;
}

var_dump(
    checkPermissions($supervisor, Permissions::ADMIN)
);

$normal = Permissions::ADMIN;

var_dump(
    checkPermissions($supervisor, Permissions::NORMAL)
);


