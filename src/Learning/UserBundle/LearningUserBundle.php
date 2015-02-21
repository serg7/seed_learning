<?php

namespace Learning\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LearningUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
