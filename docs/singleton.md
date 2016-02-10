Singleton
=========

## Examples

```php
<?php

use Dspacelabs\Pattern\Singleton;

class Database extends Singleton
{
    protected function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        // logic to connect to database
    }
}
?>

<?php

$database = Database::getInstance();
$sameConnection = Database::getInstance();
```
