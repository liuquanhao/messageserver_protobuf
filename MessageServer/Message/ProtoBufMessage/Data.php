<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * Data message
 */
class Data extends \ProtobufMessage
{
    /* Field index constants */
    const UCODE = 1;
    const UDATA = 2;
    const EXTRADATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UCODE => array(
            'name' => 'ucode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UDATA => array(
            'name' => 'udata',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTRADATA => array(
            'name' => 'extraData',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::UCODE] = null;
        $this->values[self::UDATA] = null;
        $this->values[self::EXTRADATA] = array();
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
     * Sets value of 'ucode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUcode($value)
    {
        return $this->set(self::UCODE, $value);
    }

    /**
     * Returns value of 'ucode' property
     *
     * @return integer
     */
    public function getUcode()
    {
        $value = $this->get(self::UCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ucode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUcode()
    {
        return $this->get(self::UCODE) !== null;
    }

    /**
     * Sets value of 'udata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUdata($value)
    {
        return $this->set(self::UDATA, $value);
    }

    /**
     * Returns value of 'udata' property
     *
     * @return string
     */
    public function getUdata()
    {
        $value = $this->get(self::UDATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'udata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUdata()
    {
        return $this->get(self::UDATA) !== null;
    }

    /**
     * Appends value to 'extraData' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendExtraData($value)
    {
        return $this->append(self::EXTRADATA, $value);
    }

    /**
     * Clears 'extraData' list
     *
     * @return null
     */
    public function clearExtraData()
    {
        return $this->clear(self::EXTRADATA);
    }

    /**
     * Returns 'extraData' list
     *
     * @return string[]
     */
    public function getExtraData()
    {
        return $this->get(self::EXTRADATA);
    }

    /**
     * Returns true if 'extraData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtraData()
    {
        return count($this->get(self::EXTRADATA)) !== 0;
    }

    /**
     * Returns 'extraData' iterator
     *
     * @return \ArrayIterator
     */
    public function getExtraDataIterator()
    {
        return new \ArrayIterator($this->get(self::EXTRADATA));
    }

    /**
     * Returns element from 'extraData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getExtraDataAt($offset)
    {
        return $this->get(self::EXTRADATA, $offset);
    }

    /**
     * Returns count of 'extraData' list
     *
     * @return int
     */
    public function getExtraDataCount()
    {
        return $this->count(self::EXTRADATA);
    }
}
}