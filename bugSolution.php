```php
function processData(array $data): array {
    $processedData = [];
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $processedData[$key] = self::processData($value); // Recursive call
        } else if (is_string($value)) {
            $processedData[$key] = strtolower(trim($value)); //String manipulation
        } else {
            $processedData[$key] = $value; //Handle other data types
        }
    }
    return $processedData;
}

$data = [
    'Name' => '  John Doe  ',
    'Age' => 30,
    'Address' => [
        'Street' => '123 Main St',
        'City' => ' Anytown'
    ]
];

$processedData = processData($data);
print_r($processedData);
```