<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * ExtraInfo message
 */
class ExtraInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SENDTIME = 1;
    const AUTHKEY = 2;
    const AUTHEXPIRETIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDTIME => array(
            'name' => 'sendTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHKEY => array(
            'name' => 'authKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHEXPIRETIME => array(
            'name' => 'authExpireTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::SENDTIME] = null;
        $this->values[self::AUTHKEY] = null;
        $this->values[self::AUTHEXPIRETIME] = null;
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
     * Sets value of 'sendTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendTime($value)
    {
        return $this->set(self::SENDTIME, $value);
    }

    /**
     * Returns value of 'sendTime' property
     *
     * @return integer
     */
    public function getSendTime()
    {
        $value = $this->get(self::SENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sendTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSendTime()
    {
        return $this->get(self::SENDTIME) !== null;
    }

    /**
     * Sets value of 'authKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthKey($value)
    {
        return $this->set(self::AUTHKEY, $value);
    }

    /**
     * Returns value of 'authKey' property
     *
     * @return string
     */
    public function getAuthKey()
    {
        $value = $this->get(self::AUTHKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'authKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthKey()
    {
        return $this->get(self::AUTHKEY) !== null;
    }

    /**
     * Sets value of 'authExpireTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthExpireTime($value)
    {
        return $this->set(self::AUTHEXPIRETIME, $value);
    }

    /**
     * Returns value of 'authExpireTime' property
     *
     * @return integer
     */
    public function getAuthExpireTime()
    {
        $value = $this->get(self::AUTHEXPIRETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'authExpireTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthExpireTime()
    {
        return $this->get(self::AUTHEXPIRETIME) !== null;
    }
}
}