<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Documentation;

use Laminas\ServiceManager\AbstractPluginManager;

class MarkdownPageHelperFactory
{
    public function __invoke($helpers)
    {
        if (! $helpers instanceof AbstractPluginManager) {
            $helpers = $helpers->get('ViewHelperManager');
        }
        return new MarkdownPageHelper($helpers->get('url'));
    }
}
