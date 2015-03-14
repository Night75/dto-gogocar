<?php

namespace Gogocar\Dto\Form;

use Symfony\Component\Form\AbstractType;

abstract class InputType extends AbstractType
{
    public function getName()
    {
        // return empty so form name is not prepended in request parameter's name
        // ie. 'children' instead of 'form[children]'
        return '';
    }
}
