function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

// Uncommon issue: modifying array during foreach
// The unset() function modifies the array during iteration.
//  This might lead to unexpected behavior if the foreach loop depends on the array keys or indices.