```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // Example: ignore, log an error, throw an exception
      error_log('Non-numeric value encountered: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = ['a', 1, 2, 3];
echo calculateSum($numbers); // Output: 6. No error or warning.
//The non-numeric value 'a' is ignored.
```