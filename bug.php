```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = ['a', 1, 2, 3];
echo calculateSum($numbers); //Notice: A non well formed numeric value encountered in ...
```