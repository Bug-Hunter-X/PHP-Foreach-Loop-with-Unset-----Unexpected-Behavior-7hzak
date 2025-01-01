function foo(array $arr) {
  $arrCopy = $arr; // Create a copy
  foreach ($arrCopy as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Correct Output: Array ( [0] => foo [2] => baz )

//Alternative solution using array_filter
function foo2(array $arr) {
  return array_filter($arr, function($value) { return $value !== 'bar'; });
}
$arr2 = ['foo', 'bar', 'baz'];
$result2 = foo2($arr2);
print_r($result2); // Correct Output: Array ( [0] => foo [2] => baz )