<?php

/*
Copyright 2015 Basho Technologies, Inc.

Licensed to the Apache Software Foundation (ASF) under one or more contributor license agreements.  See the NOTICE file
distributed with this work for additional information regarding copyright ownership.  The ASF licenses this file
to you under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance
with the License.  You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an
"AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the License for the
specific language governing permissions and limitations under the License.
*/

namespace Basho\Tests;

use Basho\Riak;
use Basho\Riak\Command\Builder;
use Basho\Riak\Object;

/**
 * Class ObjectTest
 *
 * Functional tests related to Key-Value objects
 *
 * @author Christopher Mancini <cmancini at basho d0t com>
 */
class ObjectTest extends TestCase
{
    /**
     * Riak client
     *
     * @var Riak|null
     */
    private static $riak = NULL;

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$riak = static::$container['riak'];
    }

    /**
     * testStoreWithoutKey
     */
    public function testStoreWithoutKey()
    {
        $object = new Object();
        $command = (new Builder(new Riak\Command\Object\Store()))->withObject($object)->build();

        $statusCode = self::$riak->execute($command);

        $this->assertEquals('201', $statusCode);
    }

    public function testStoreNewWithKey()
    {

    }

    public function testFetchExisting()
    {

    }

    public function testStoreExisting()
    {

    }

    public function testDelete()
    {

    }

    public function testFetchNotFound()
    {

    }
}