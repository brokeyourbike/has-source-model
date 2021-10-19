# has-source-model

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/has-source-model)](https://github.com/brokeyourbike/has-source-model/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/has-source-model/downloads)](https://packagist.org/packages/brokeyourbike/has-source-model)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/has-source-model/blob/main/LICENSE)

[![ci](https://github.com/brokeyourbike/has-source-model/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/has-source-model/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/has-source-model/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/has-source-model)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/has-source-model/coverage.svg)](https://shepherd.dev/github/brokeyourbike/has-source-model)

Interface for interacting with source models

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

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/has-source-model/blob/main/LICENSE)
