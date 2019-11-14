<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * Payload message
 */
class Payload extends \ProtobufMessage
{
    /* Field index constants */
    const DATATYPE = 1;
    const DATALIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DATATYPE => array(
            'name' => 'dataType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATALIST => array(
            'name' => 'dataList',
            'repeated' => true,
            'type' => '\MessageServer\Message\ProtoBufMessage\Data'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::DATATYPE] = null;
        $this->values[self::DATALIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'dataType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataType($value)
    {
        return $this->set(self::DATATYPE, $value);
    }

    /**
     * Returns value of 'dataType' property
     *
     * @return integer
     */
    public function getDataType()
    {
        $value = $this->get(self::DATATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataType()
    {
        return $this->get(self::DATATYPE) !== null;
    }

    /**
     * Appends value to 'dataList' list
     *
     * @param \MessageServer\Message\ProtoBufMessage\Data $value Value to append
     *
     * @return null
     */
    public function appendDataList(\MessageServer\Message\ProtoBufMessage\Data $value)
    {
        return $this->append(self::DATALIST, $value);
    }

    /**
     * Clears 'dataList' list
     *
     * @return null
     */
    public function clearDataList()
    {
        return $this->clear(self::DATALIST);
    }

    /**
     * Returns 'dataList' list
     *
     * @return \MessageServer\Message\ProtoBufMessage\Data[]
     */
    public function getDataList()
    {
        return $this->get(self::DATALIST);
    }

    /**
     * Returns true if 'dataList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataList()
    {
        return count($this->get(self::DATALIST)) !== 0;
    }

    /**
     * Returns 'dataList' iterator
     *
     * @return \ArrayIterator
     */
    public function getDataListIterator()
    {
        return new \ArrayIterator($this->get(self::DATALIST));
    }

    /**
     * Returns element from 'dataList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \MessageServer\Message\ProtoBufMessage\Data
     */
    public function getDataListAt($offset)
    {
        return $this->get(self::DATALIST, $offset);
    }

    /**
     * Returns count of 'dataList' list
     *
     * @return int
     */
    public function getDataListCount()
    {
        return $this->count(self::DATALIST);
    }
}
}