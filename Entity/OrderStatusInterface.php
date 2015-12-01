<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\Entity;

use WellCommerce\Bundle\UserBundle\Entity\BlameableInterface;
use WellCommerce\Bundle\CoreBundle\Entity\TimestampableInterface;
use WellCommerce\Bundle\AppBundle\Entity\TranslatableInterface;

/**
 * Interface OrderStatusInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface OrderStatusInterface extends TimestampableInterface, TranslatableInterface, BlameableInterface
{
    /**
     * @return integer
     */
    public function getId();

    /**
     * @return OrderStatusGroupInterface
     */
    public function getOrderStatusGroup();

    /**
     * @param OrderStatusGroupInterface $orderStatusGroup
     */
    public function setOrderStatusGroup(OrderStatusGroupInterface $orderStatusGroup);
}
