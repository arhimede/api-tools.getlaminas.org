<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Documentation;

class DocumentationModelFactory
{
    public function __invoke($services)
    {
        $config = [];
        if ($services->has('config')) {
            $config = $this->getConfigViaService($config, $services->get('config'));
        }

        return new DocumentationModel($config);
    }

    protected function getConfigViaService(array $config, $allConfig)
    {
        if (! isset($allConfig['api-tools-documentation'])) {
            return $config;
        }
        return $allConfig['api-tools-documentation'];
    }
}
