<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * Sender message
 */
class Sender extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const NICK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICK => array(
            'name' => 'nick',
            'required' => false,
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
        $this->values[self::UID] = null;
        $this->values[self::NICK] = null;
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
     * Sets value of 'uid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return integer
     */
    public function getUid()
    {
        $value = $this->get(self::UID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUid()
    {
        return $this->get(self::UID) !== null;
    }

    /**
     * Sets value of 'nick' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNick($value)
    {
        return $this->set(self::NICK, $value);
    }

    /**
     * Returns value of 'nick' property
     *
     * @return string
     */
    public function getNick()
    {
        $value = $this->get(self::NICK);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNick()
    {
        return $this->get(self::NICK) !== null;
    }
}
}