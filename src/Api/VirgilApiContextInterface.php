<?php
namespace Virgil\Sdk\Api;


use Virgil\Sdk\Client\VirgilClientInterface;

use Virgil\Sdk\Contracts\CryptoInterface;
use Virgil\Sdk\Contracts\KeyStorageInterface;

/**
 * Interface provides virgil api dependencies.
 */
interface VirgilApiContextInterface
{
    /**
     * Gets a cryptographic keys storage.
     *
     * @return KeyStorageInterface
     */
    public function getKeyStorage();


    /**
     * Gets a crypto API that represents a set of methods for dealing with low-level.
     *
     * @return CryptoInterface
     */
    public function getCrypto();


    /**
     * Gets a Virgil Security services client.
     *
     * @return VirgilClientInterface
     */
    public function getClient();


    /**
     * Sets the custom cryptographic keys storage.
     *
     * @param KeyStorageInterface $keyStorage
     *
     * @return $this
     */
    public function setKeyStorage(KeyStorageInterface $keyStorage);


    /**
     * Sets the custom crypto API that represents a set of methods for dealing with low-level.
     *
     * @param CryptoInterface $crypto
     *
     * @return $this
     */
    public function setCrypto(CryptoInterface $crypto);


    /**
     * Sets a Virgil Security services client.
     *
     * @param VirgilClientInterface $virgilClient
     *
     * @return $this
     */
    public function setClient(VirgilClientInterface $virgilClient);
}
