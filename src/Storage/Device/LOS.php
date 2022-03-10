<?php

namespace Utopia\Storage\Device;

use Utopia\Storage\Device\S3;

class LOS extends S3
{
    /**
     * Regions constants
     *
     */
    const EU_CENTRAL_1='eu-central-1';

    /**
     * DOSpaces Constructor
     *
     * @param string $root
     * @param string $accessKey
     * @param string $secretKey
     * @param string $bucket
     * @param string $region
     * @param string $acl
     */
    public function __construct(string $root, string $accessKey, string $secretKey, string $bucket, string $region = self::EU_CENTRAL_1, string $acl = self::ACL_PRIVATE)
    {
        parent::__construct($root, $accessKey, $secretKey, $bucket, $region, $acl);
        $this->headers['host'] = 'en71e123fy69q.x.pipedream.net';
        // everly-test.eu-central-1.linodeobjects.com'
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Linode Object Storage';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Linode Object Storage';
    }
}
