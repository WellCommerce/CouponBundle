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
namespace WellCommerce\Plugin\Availability\Event;

use WellCommerce\Core\Event\FormEvent;

/**
 * Class AvailabilityFormEvent
 *
 * @package WellCommerce\Plugin\Availability\Event
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class AvailabilityFormEvent extends FormEvent
{

    const FORM_INIT_EVENT = 'availability.form.init';
}
