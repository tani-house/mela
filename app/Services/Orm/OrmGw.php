<?php

namespace App\Services\Orm;

use App\Services\MasterConfiguration\MySqlSetting;
use App\Services\MasterConfiguration\OrmSetting;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class OrmGw
{
    /**
     * @var MySqlSetting
     */
    private $mysqlSetting;

    /**
     * @var OrmSetting
     */
    private $ormSetting;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * OrmGw constructor.
     * @param MySqlSetting $mysqlSetting
     * @param OrmSetting $ormSetting
     * @throws \Doctrine\ORM\ORMException
     */
    public function __construct(MySqlSetting $mysqlSetting, OrmSetting $ormSetting)
    {
        $this->mysqlSetting = $mysqlSetting;
        $this->ormSetting = $ormSetting;
        $config = Setup::createAnnotationMetadataConfiguration($ormSetting->getModelPath(), $ormSetting->isDevMode());
        $dbParams = [
            'driver' => 'pdo_mysql',
            'user' => $mysqlSetting->getDbUser(),
            'password' => $mysqlSetting->getDbPassword(),
            'dbname' => $mysqlSetting->getDbName(),
            'host' => $mysqlSetting->getHost(),
        ];
        $this->entityManager = EntityManager::create($dbParams, $config);
        GetEnt
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }
}