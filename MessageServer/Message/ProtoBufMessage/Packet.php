<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * Packet message
 */
class Packet extends \ProtobufMessage
{
    /* Field index constants */
    const SENDER = 1;
    const RECEIVER = 2;
    const PAYLOAD = 3;
    const EXTRAINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDER => array(
            'name' => 'sender',
            'required' => false,
            'type' => '\MessageServer\Message\ProtoBufMessage\Sender'
        ),
        self::RECEIVER => array(
            'name' => 'receiver',
            'required' => false,
            'type' => '\MessageServer\Message\ProtoBufMessage\Receiver'
        ),
        self::PAYLOAD => array(
            'name' => 'payload',
            'required' => false,
            'type' => '\MessageServer\Message\ProtoBufMessage\Payload'
        ),
        self::EXTRAINFO => array(
            'name' => 'extraInfo',
            'required' => false,
            'type' => '\MessageServer\Message\ProtoBufMessage\ExtraInfo'
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
        $this->values[self::SENDER] = null;
        $this->values[self::RECEIVER] = null;
        $this->values[self::PAYLOAD] = null;
        $this->values[self::EXTRAINFO] = null;
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
     * Sets value of 'sender' property
     *
     * @param \MessageServer\Message\ProtoBufMessage\Sender $value Property value
     *
     * @return null
     */
    public function setSender(\MessageServer\Message\ProtoBufMessage\Sender $value=null)
    {
        return $this->set(self::SENDER, $value);
    }

    /**
     * Returns value of 'sender' property
     *
     * @return \MessageServer\Message\ProtoBufMessage\Sender
     */
    public function getSender()
    {
        return $this->get(self::SENDER);
    }

    /**
     * Returns true if 'sender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSender()
    {
        return $this->get(self::SENDER) !== null;
    }

    /**
     * Sets value of 'receiver' property
     *
     * @param \MessageServer\Message\ProtoBufMessage\Receiver $value Property value
     *
     * @return null
     */
    public function setReceiver(\MessageServer\Message\ProtoBufMessage\Receiver $value=null)
    {
        return $this->set(self::RECEIVER, $value);
    }

    /**
     * Returns value of 'receiver' property
     *
     * @return \MessageServer\Message\ProtoBufMessage\Receiver
     */
    public function getReceiver()
    {
        return $this->get(self::RECEIVER);
    }

    /**
     * Returns true if 'receiver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceiver()
    {
        return $this->get(self::RECEIVER) !== null;
    }

    /**
     * Sets value of 'payload' property
     *
     * @param \MessageServer\Message\ProtoBufMessage\Payload $value Property value
     *
     * @return null
     */
    public function setPayload(\MessageServer\Message\ProtoBufMessage\Payload $value=null)
    {
        return $this->set(self::PAYLOAD, $value);
    }

    /**
     * Returns value of 'payload' property
     *
     * @return \MessageServer\Message\ProtoBufMessage\Payload
     */
    public function getPayload()
    {
        return $this->get(self::PAYLOAD);
    }

    /**
     * Returns true if 'payload' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayload()
    {
        return $this->get(self::PAYLOAD) !== null;
    }

    /**
     * Sets value of 'extraInfo' property
     *
     * @param \MessageServer\Message\ProtoBufMessage\ExtraInfo $value Property value
     *
     * @return null
     */
    public function setExtraInfo(\MessageServer\Message\ProtoBufMessage\ExtraInfo $value=null)
    {
        return $this->set(self::EXTRAINFO, $value);
    }

    /**
     * Returns value of 'extraInfo' property
     *
     * @return \MessageServer\Message\ProtoBufMessage\ExtraInfo
     */
    public function getExtraInfo()
    {
        return $this->get(self::EXTRAINFO);
    }

    /**
     * Returns true if 'extraInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtraInfo()
    {
        return $this->get(self::EXTRAINFO) !== null;
    }
}
}