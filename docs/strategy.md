Strategy
========

## Examples

```php
<?php

use Dspacelabs\Pattern\StrategyInterface;
use Dspacelabs\Pattern\StrategyContext;

class CurlStrategy implements StrategyInterface
{
    public function execute()
    {
        // logic for curl reqquests here
    }
}

class NullStrategy implements StrategyInterface
{
    public function execute()
    {
        // Do nothing
    }
}

class Client extends StrategyContext
{
    public function makeRequest()
    {
        $this->getStrategy()->execute();
    }
}

// Use Curl to make requests
$client = new Client();
$client->setStrategy(new CurlStrategy());
$client->makeRequest();

// Change strategy to do nothing
$client->setStrategy(new NullStrategy());
$client->makeRequest();
```
