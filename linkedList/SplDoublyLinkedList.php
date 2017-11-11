<?php

function expressionChecker(string $experession): bool
{
    $valid = TRUE;
    $stack = new SplStack();
    for ($i = 0; $i < strlen($experession); $i++) {
        $char = substr($experession, $i, 1);
        switch ($char) {
            case '{':
            case '[':
            case '(':
                $stack->push($char);
                break;
            case '}':
            case ']':
            case ')':
                if ($stack->isEmpty()) {
                    $valid = FALSE;

                } else {
                    $last = $stack->pop();
                    if ($char == "(" && $last != ')' || $char == "{" && $last != '}' || $char == "[" && $last != ']') {
                        $valid=FALSE;
                    }
                }
                break;

        }
        if(!$valid){
            break;
        }

    }
    if(!$stack->isEmpty()){
        $valid=FALSE;
    }
    return $valid;


}

$expressions = [];
$expressions[] = "8 * (9 -2) + { (4 * 5) / ( 2 * 2) }";
$expressions[] = "5 * 8 * 9 / ( 3 * 2 ) )";
$expressions[] = "[{ (2 * 7) + ( 15 - 3) ]";
foreach ($expressions as $expression) {
    $valid = expressionChecker($expression);
    if ($valid) {
        echo "Expression is valid \n";
    } else {
        echo "Expression is not valid \n";
    }
}
