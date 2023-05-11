<?php

// File generated from our OpenAPI spec

namespace Stripe\Tax;

/**
 * You can use Tax <code>Settings</code> to manage configurations used by Stripe
 * Tax calculations.
 *
 * Related guide: <a href="https://stripe.com/docs/tax/settings-api">Using the
 * Settings API</a>.
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \Stripe\StripeObject $defaults
 * @property null|\Stripe\StripeObject $head_office The place where your business is located.
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property null|\Stripe\StripeObject[] $locations The deprecated places where your business is located.
 */
class Settings extends \Stripe\SingletonApiResource
{
    const OBJECT_NAME = 'tax.settings';

    use \Stripe\ApiOperations\SingletonRetrieve;
    use \Stripe\ApiOperations\Update;
}
