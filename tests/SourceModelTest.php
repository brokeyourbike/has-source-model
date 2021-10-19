<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\Tests\HasSourceModel;

use PHPUnit\Framework\TestCase;
use BrokeYourBike\HasSourceModel\HasSourceModelTrait;
use BrokeYourBike\HasSourceModel\HasSourceModelInterface;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
class SourceModelTest extends TestCase
{
    /** @test */
    public function it_implemets_http_client_interface(): void
    {
        $localClient = new ClientFixture();

        $this->assertInstanceOf(HasSourceModelInterface::class, $localClient);
    }

    /** @test */
    public function it_uses_http_client_trait(): void
    {
        $usedTraits = class_uses(ClientFixture::class);

        $this->assertArrayHasKey(HasSourceModelTrait::class, $usedTraits);
    }

    /** @test */
    public function it_can_return_source_model()
    {
        $model = new ModelFixture();

        $client = new ClientFixture();
        $client->setSourceModel($model);

        $this->assertSame($model, $client->getSourceModel());
    }

    /** @test */
    public function it_will_return_null_if_model_not_set()
    {
        $client = new ClientFixture();

        $this->assertSame(null, $client->getSourceModel());
    }
}
