==========
eval() test
==========

<?php

error_reporting(0);

$message = "echo \"hey\n\";";

for ($i=0; $i<10; $i++) {
  eval($message);
  echo $i."\n";
}

---

(program (script_section (expression_statement (function_call_expression (qualified_name (name)) (arguments (float)))) (expression_statement (assignment_expression (simple_variable (variable_name (name))) (string))) (for_statement (assignment_expression (simple_variable (variable_name (name))) (float)) (binary_expression (simple_variable (variable_name (name))) (integer)) (postfix_increment_expression (simple_variable (variable_name (name)))) (compound_statement (expression_statement (intrinsic (eval_intrinsic (simple_variable (variable_name (name)))))) (echo_statement (binary_expression (simple_variable (variable_name (name))) (string)))))))
