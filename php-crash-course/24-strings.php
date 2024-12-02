<?php 

$name = "John";
echo 'Hello, $name!\n'; // interpolated literally
echo "Hello, $name!\n";

$heredoc = <<<EOD
Multi-line string
with variable $name\n
EOD;

$nowdoc = <<<'EOD'
Multi-line string
with variable $name\n
EOD;

echo $heredoc;
echo $nowdoc;

// be careful of micro optimization by using single quotes
// might be insignificant optimization
