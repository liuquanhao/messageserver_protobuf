<?php
/**
 * Auto generated from Packet.proto at 2019-08-12 18:52:09
 *
 * MessageServer.Message.ProtoBufMessage package
 */

namespace MessageServer\Message\ProtoBufMessage {
/**
 * Receiver message
 */
class Receiver extends \ProtobufMessage
{
    /* Field index constants */
    const USERS = 1;
    const GROUPS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERS => array(
            'name' => 'users',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPS => array(
            'name' => 'groups',
            'repeated' => true,
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
        $this->values[self::USERS] = array();
        $this->values[self::GROUPS] = array();
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
     * Appends value to 'users' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendUsers($value)
    {
        return $this->append(self::USERS, $value);
    }

    /**
     * Clears 'users' list
     *
     * @return null
     */
    public function clearUsers()
    {
        return $this->clear(self::USERS);
    }

    /**
     * Returns 'users' list
     *
     * @return integer[]
     */
    public function getUsers()
    {
        return $this->get(self::USERS);
    }

    /**
     * Returns true if 'users' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsers()
    {
        return count($this->get(self::USERS)) !== 0;
    }

    /**
     * Returns 'users' iterator
     *
     * @return \ArrayIterator
     */
    public function getUsersIterator()
    {
        return new \ArrayIterator($this->get(self::USERS));
    }

    /**
     * Returns element from 'users' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getUsersAt($offset)
    {
        return $this->get(self::USERS, $offset);
    }

    /**
     * Returns count of 'users' list
     *
     * @return int
     */
    public function getUsersCount()
    {
        return $this->count(self::USERS);
    }

    /**
     * Appends value to 'groups' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendGroups($value)
    {
        return $this->append(self::GROUPS, $value);
    }

    /**
     * Clears 'groups' list
     *
     * @return null
     */
    public function clearGroups()
    {
        return $this->clear(self::GROUPS);
    }

    /**
     * Returns 'groups' list
     *
     * @return integer[]
     */
    public function getGroups()
    {
        return $this->get(self::GROUPS);
    }

    /**
     * Returns true if 'groups' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroups()
    {
        return count($this->get(self::GROUPS)) !== 0;
    }

    /**
     * Returns 'groups' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupsIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPS));
    }

    /**
     * Returns element from 'groups' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getGroupsAt($offset)
    {
        return $this->get(self::GROUPS, $offset);
    }

    /**
     * Returns count of 'groups' list
     *
     * @return int
     */
    public function getGroupsCount()
    {
        return $this->count(self::GROUPS);
    }
}
}