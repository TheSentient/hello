<?php

namespace LLPP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LLPPUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
