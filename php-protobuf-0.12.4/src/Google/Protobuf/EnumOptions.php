<?php
/**
 * Auto generated from descriptor.proto at 2019-01-07 11:34:00
 *
 * google.protobuf package
 */

namespace Google\Protobuf {
/**
 * EnumOptions message
 */
class EnumOptions extends \ProtobufMessage
{
    /* Field index constants */
    const ALLOW_ALIAS = 2;
    const DEPRECATED = 3;
    const UNINTERPRETED_OPTION = 999;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ALLOW_ALIAS => array(
            'name' => 'allow_alias',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DEPRECATED => array(
            'default' => false,
            'name' => 'deprecated',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::UNINTERPRETED_OPTION => array(
            'name' => 'uninterpreted_option',
            'repeated' => true,
            'type' => '\Google\Protobuf\UninterpretedOption'
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
        $this->values[self::ALLOW_ALIAS] = null;
        $this->values[self::DEPRECATED] = self::$fields[self::DEPRECATED]['default'];
        $this->values[self::UNINTERPRETED_OPTION] = array();
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
     * Sets value of 'allow_alias' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAllowAlias($value)
    {
        return $this->set(self::ALLOW_ALIAS, $value);
    }

    /**
     * Returns value of 'allow_alias' property
     *
     * @return boolean
     */
    public function getAllowAlias()
    {
        $value = $this->get(self::ALLOW_ALIAS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'allow_alias' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAllowAlias()
    {
        return $this->get(self::ALLOW_ALIAS) !== null;
    }

    /**
     * Sets value of 'deprecated' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDeprecated($value)
    {
        return $this->set(self::DEPRECATED, $value);
    }

    /**
     * Returns value of 'deprecated' property
     *
     * @return boolean
     */
    public function getDeprecated()
    {
        $value = $this->get(self::DEPRECATED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'deprecated' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeprecated()
    {
        return $this->get(self::DEPRECATED) !== null;
    }

    /**
     * Appends value to 'uninterpreted_option' list
     *
     * @param \Google\Protobuf\UninterpretedOption $value Value to append
     *
     * @return null
     */
    public function appendUninterpretedOption(\Google\Protobuf\UninterpretedOption $value)
    {
        return $this->append(self::UNINTERPRETED_OPTION, $value);
    }

    /**
     * Clears 'uninterpreted_option' list
     *
     * @return null
     */
    public function clearUninterpretedOption()
    {
        return $this->clear(self::UNINTERPRETED_OPTION);
    }

    /**
     * Returns 'uninterpreted_option' list
     *
     * @return \Google\Protobuf\UninterpretedOption[]
     */
    public function getUninterpretedOption()
    {
        return $this->get(self::UNINTERPRETED_OPTION);
    }

    /**
     * Returns true if 'uninterpreted_option' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUninterpretedOption()
    {
        return count($this->get(self::UNINTERPRETED_OPTION)) !== 0;
    }

    /**
     * Returns 'uninterpreted_option' iterator
     *
     * @return \ArrayIterator
     */
    public function getUninterpretedOptionIterator()
    {
        return new \ArrayIterator($this->get(self::UNINTERPRETED_OPTION));
    }

    /**
     * Returns element from 'uninterpreted_option' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Google\Protobuf\UninterpretedOption
     */
    public function getUninterpretedOptionAt($offset)
    {
        return $this->get(self::UNINTERPRETED_OPTION, $offset);
    }

    /**
     * Returns count of 'uninterpreted_option' list
     *
     * @return int
     */
    public function getUninterpretedOptionCount()
    {
        return $this->count(self::UNINTERPRETED_OPTION);
    }
}
}