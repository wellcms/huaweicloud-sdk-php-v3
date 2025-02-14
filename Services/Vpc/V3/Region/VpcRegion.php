<?php
namespace HuaweiCloud\SDK\Vpc\V3\Region;

use HuaweiCloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class VpcRegion {

    public static $REGION = array("https://vpc.af-south-1.myhuaweicloud.com"=>"af-south-1","https://vpc.cn-north-4.myhuaweicloud.com"=>"cn-north-4","https://vpc.cn-north-1.myhuaweicloud.com"=>"cn-north-1","https://vpc.cn-east-2.myhuaweicloud.com"=>"cn-east-2","https://vpc.cn-east-3.myhuaweicloud.com"=>"cn-east-3","https://vpc.cn-south-1.myhuaweicloud.com"=>"cn-south-1","https://vpc.cn-southwest-2.myhuaweicloud.com"=>"cn-southwest-2","https://vpc.ap-southeast-2.myhuaweicloud.com"=>"ap-southeast-2","https://vpc.ap-southeast-1.myhwclouds.com"=>"ap-southeast-1","https://vpc.ap-southeast-3.myhuaweicloud.com"=>"ap-southeast-3",);

    public static function valueOf($regionId)
    {
        try {
            if (null == $regionId) {
                throw new InvalidArgumentException("Unexpected empty parameter: regionId.");
            }
            $endpoint = array_search($regionId, self::$REGION);
            if (!$endpoint) {
                throw new InvalidArgumentException("Unexpected regionId: " . $regionId);
            }
            return new Region($regionId, $endpoint);
        } catch (InvalidArgumentException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }
}