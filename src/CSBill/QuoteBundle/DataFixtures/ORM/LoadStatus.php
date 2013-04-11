<?php

/*
 * This file is part of the CSUserBundle package.
 *
 * (c) Pierre du Plessis <info@customscripts.co.za>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CSBill\QuoteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CSBill\QuoteBundle\Entity\Status;

class LoadStatus implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $statusList = array(
                            'pending',
                            'accepted',
                            'declined',
                            'draft',
                            'cancelled',
                            );

        foreach ($statusList as $status) {
            $entity = new Status;
            $entity->setName($status);
            $manager->persist($entity);
        }

        $manager->flush();
    }
}
