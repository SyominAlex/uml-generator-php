<?php
require 'vendor/autoload.php';

ini_set('xdebug.max_nesting_level', 2000);

$code = '<?php // some code';

$code = file_get_contents('/Users/clemens/Sites/drupal/d8/www/core/lib/Drupal.php');

$parser = new PhpParser\Parser(new PhpParser\Lexer);

try {
    $stmts = $parser->parse($code);
    print_r($stmts);
} catch (PhpParser\Error $e) {
    echo 'Parse Error: ', $e->getMessage();
}

