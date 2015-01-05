<?php
/*
 * Copyright (c) 2014 Eltrino LLC (http://eltrino.com)
 *
 * Licensed under the Open Software License (OSL 3.0).
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://opensource.org/licenses/osl-3.0.php
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@eltrino.com so we can send you a copy immediately.
 */

namespace Diamante\DeskBundle\Model\Ticket\Filter;

use Diamante\DeskBundle\Model\Shared\Filter\AbstractFilterCriteriaProcessor;

class TicketFilterCriteriaProcessor extends AbstractFilterCriteriaProcessor
{
    protected function buildCriteria()
    {
        foreach ($this->dataProperties as $property) {
            $propertyValue = $this->command->{$property};

            if (in_array('subject', 'description') && (!empty($propertyValue))) {
                array_push($this->criteria, array($property, self::LIKE_OPERATOR, $propertyValue));
                continue;
            }

            if (!empty($propertyValue)) {
                array_push($this->criteria, array($property, self::EQ_OPERATOR, $propertyValue));
            }
        }
    }
}