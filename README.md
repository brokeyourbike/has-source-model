# has-source-model

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/has-source-model-laravel)](https://github.com/brokeyourbike/has-source-model-laravel/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/has-source-model/downloads)](https://packagist.org/packages/brokeyourbike/has-source-model)
[![Maintainability](https://api.codeclimate.com/v1/badges/a679ea98492b9bd65987/maintainability)](https://codeclimate.com/github/brokeyourbike/has-source-model-laravel/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/a679ea98492b9bd65987/test_coverage)](https://codeclimate.com/github/brokeyourbike/has-source-model-laravel/test_coverage)

Interface for interacting with source models.

## Installation

```bash
composer require brokeyourbike/has-source-model
```

## Usage

```php
use BrokeYourBike\HasSourceModel\HasSourceModelInterface;
use BrokeYourBike\HasSourceModel\HasSourceModelTrait;

class Client implements HasSourceModelInterface
{
    use HasSourceModelTrait;

    public function fetchTransaction(Transaction $transaction)
    {
        $this->setSourceModel($transaction);
        $this->performRequest("transactions/{$transaction->id}");
    }

    private function performRequest(string $url)
    {
        if ($this->getSourceModel($transaction)) {
            // do something with it
        }
    }
}
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/has-source-model-laravel/blob/main/LICENSE)
