<?php

$yes = TRUE;
$no = FALSE;

$result = ($no && $no) ? 'TRUE' : 'FALSE';
echo "(no && no) returned: $result<br>";

$result = ($yes && $no) ? 'TRUE' : 'FALSE';
echo "(yes && no) returned: $result<br>";

$result = ($yes && $yes) ? 'TRUE' : 'FALSE';
echo "(yes && yes) returned: $result<br>";

$result = ($no || $no) ? 'TRUE' : 'FALSE';
echo "(no || no) returned: $result<br>";

$result = ($yes || $no) ? 'TRUE' : 'FALSE';
echo "(yes || no) returned: $result<br>";

$result = ($yes || $yes) ? 'TRUE' : 'FALSE';
echo "(yes || yes) returned: $result<br>";

$result = (! $yes) ? 'TRUE' : 'FALSE';
echo "(!yes) returned: $result<br>";