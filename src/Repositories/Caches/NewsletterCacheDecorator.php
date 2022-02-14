<?php

namespace Tec\Newsletter\Repositories\Caches;

use Tec\Newsletter\Repositories\Interfaces\NewsletterInterface;
use Tec\Support\Repositories\Caches\CacheAbstractDecorator;

class NewsletterCacheDecorator extends CacheAbstractDecorator implements NewsletterInterface
{
}
