<?php

declare(strict_types=1);

namespace Vdlp\Maintenance\Classes\Contracts;

use Symfony\Component\HttpFoundation\Response;

interface ResponseMaker
{
    public function getResponse(): Response;
}
