<?php

namespace Utopia\Tests;

use Utopia\Storage\Device\LOS;
use Utopia\Tests\S3Base;

class LOSTest extends S3Base
{
    protected function init(): void
    {
        $this->root = '/root';
        $key = $_SERVER['LOS_ACCESS_KEY'] ?? '';
        $secret = $_SERVER['LOS_SECRET'] ?? '';
        $bucket = "everly-test";

        $this->object = new LOS($this->root, $key, $secret, $bucket, LOS::EU_CENTRAL_1, LOS::ACL_PRIVATE);

    }

    protected function getAdapterName(): string
    {
        return 'Linode Object Storage';
    }

    protected function getAdapterDescription(): string
    {
        return 'Linode Object Storage';
    }
}
