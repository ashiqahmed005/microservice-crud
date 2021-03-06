<?php
/**
 * @file
 * Contains \LushDigital\MicroServiceCrud\Tests\Models\Example.
 */

namespace LushDigital\MicroServiceCrud\Tests\Models;

use LushDigital\MicroServiceCrud\Models\CrudModelInterface;
use LushDigital\MicroServiceModelUtils\Models\MicroServiceBaseModel;

/**
 * An example model to test with.
 *
 * @package LushDigital\MicroServiceCrud\Tests\Models
 */
class Example extends MicroServiceBaseModel implements CrudModelInterface
{
    /**
     * {@inheritdoc}
     */
    public function getValidationRules($mode = 'create', $primaryKeyValue = null)
    {
        return [];
    }
}