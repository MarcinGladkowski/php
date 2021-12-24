<?php

$firstName = 'Marcin';
$lastName = "Nowak";

$fullName = "$firstName ${lastName} {$lastName}";

$secondFullName = $firstName . $lastName;

$line1 = 1;
$line2 = 2;

// multiple strings

// HEREDOC
$heredoc = <<<TEXT
Line 1 $line1
Line 2 $line2
Line 3
TEXT;

echo nl2br($heredoc); // for new lines

// NOWDOC
$nowdoc = <<<'TEXT'
Line 1 $line1
Line 2 $line2
Line 3
TEXT;

echo nl2br($heredoc);