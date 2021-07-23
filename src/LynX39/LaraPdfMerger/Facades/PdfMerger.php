<?php

declare(strict_types=1);

namespace LynX39\LaraPdfMerger\Facades;

use Illuminate\Support\Facades\Facade;
use LynX39\LaraPdfMerger\PdfManage;

class PdfMerger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PdfManage::class;
    }
}
