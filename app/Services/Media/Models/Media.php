<?php

namespace App\Services\Media\Models;

/**
 * @Entity @Table(name="products")
 **/
class Media
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;

    /**
     * Media constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}