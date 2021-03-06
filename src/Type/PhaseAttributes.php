<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * PhaseAttributes
 */
class PhaseAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $type = null;
    /** @var PriceAttributes[]|null */
    protected $prices = null;
    /** @var PriceAttributes[]|null */
    protected $fixedPrices = null;
    /** @var DurationAttributes|null */
    protected $duration = null;
    /** @var UsageAttributes[]|null */
    protected $usages = null;

    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param PriceAttributes[]|null $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return PriceAttributes[]|null
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return string
     */
    public function getPricesType()
    {
        return PriceAttributes::class;
    }

    /**
     * @param PriceAttributes[]|null $fixedPrices
     */
    public function setFixedPrices($fixedPrices)
    {
        $this->fixedPrices = $fixedPrices;
    }

    /**
     * @return PriceAttributes[]|null
     */
    public function getFixedPrices()
    {
        return $this->fixedPrices;
    }

    /**
     * @return string
     */
    public function getFixedPricesType()
    {
        return PriceAttributes::class;
    }

    /**
     * @param DurationAttributes|null $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return DurationAttributes|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getDurationType()
    {
        return DurationAttributes::class;
    }

    /**
     * @param UsageAttributes[]|null $usages
     */
    public function setUsages($usages)
    {
        $this->usages = $usages;
    }

    /**
     * @return UsageAttributes[]|null
     */
    public function getUsages()
    {
        return $this->usages;
    }

    /**
     * @return string
     */
    public function getUsagesType()
    {
        return UsageAttributes::class;
    }

}
