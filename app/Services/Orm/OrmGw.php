<?php

namespace App\Services\Orm;

use App\Services\Orm\Models\MySqlSetting;
use Doctrine\ORM\Tools\Setup;

class OrmGw
{

    /**
     * @var MySqlSetting
     */
    protected $setting;

    /**
     * OrmGw constructor.
     * @param MySqlSetting $setting
     */
    public function __construct(MySqlSetting $setting)
    {
        $this->setting = $setting;
    }

    public function createEntityManager()
    {
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $entityManager = EntityManager::create($dbParams, $config);
    }
}