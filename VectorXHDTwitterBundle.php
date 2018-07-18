<?php

namespace VectorXHD\TwitterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use VectorXHD\TwitterBundle\DependencyInjection\VectorXHDTwitterExtension;

class VectorXHDTwitterBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new VectorXHDTwitterExtension();
    }
}
