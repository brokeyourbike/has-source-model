<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\HasSourceModel;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 */
interface SourceModelInterface
{
    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey();
}
