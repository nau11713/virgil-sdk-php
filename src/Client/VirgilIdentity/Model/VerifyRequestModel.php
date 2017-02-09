<?php
namespace Virgil\Sdk\Client\VirgilIdentity\Model;


use Virgil\Sdk\Client\VirgilServices\Model\AbstractModel;

/**
 * Class represents the verify identity request model.
 */
class VerifyRequestModel extends AbstractModel
{
    /** @var string */
    private $identityType;

    /** @var string */
    private $identity;

    /** @var array */
    private $extraFields;


    /**
     * Class constructor.
     *
     * @param string $identityType
     * @param string $identity
     * @param array  $extraFields
     */
    public function __construct($identityType, $identity, array $extraFields = [])
    {
        $this->identityType = $identityType;
        $this->identity = $identity;
        $this->extraFields = $extraFields;
    }


    /**
     * @return string
     */
    public function getIdentityType()
    {
        return $this->identityType;
    }


    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }


    /**
     * @return array
     */
    public function getExtraFields()
    {
        return $this->extraFields;
    }


    /**
     * @inheritdoc
     */
    protected function jsonSerializeData()
    {
        return [
            'type'         => $this->identityType,
            'value'        => $this->identity,
            'extra_fields' => $this->extraFields,
        ];
    }
}
