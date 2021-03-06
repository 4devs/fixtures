<?php

namespace FDevs\Fixture\Storage;

use FDevs\Fixture\Exception\Storage\NotFoundException;
use FDevs\Fixture\Exception\Storage\StoreException;

interface StorageInterface
{
    /**
     * @param mixed         $data
     * @param string        $type
     *
     * @throws StoreException
     *
     * @return string   Key of stored item
     */
    public function store($data, string $type): string;

    /**
     * @param string $type
     * @param array  $options
     *
     * @return \Generator    Generator of stored data filtered by options. Ech key of element matches its stored key
     */
    public function find(string $type, array $options): \Generator;

    /**
     * @param string $key
     *
     * @throws NotFoundException
     *
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;
}
