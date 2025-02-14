<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlanRecordTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlanRecordTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => '\DateTime',
            'endTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'date',
        'endTime' => 'date'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets startTime
    *  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    *
    * @return \DateTime
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime $startTime 录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。如果填写，填写的时间必须晚于当前时间。如果不填写，则在计划录制触发后不停止。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

