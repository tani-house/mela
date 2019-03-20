<?php

namespace App\Services;

use App\Services\MasterConfiguration\OrmSetting;
use App\Services\Media\MediaRepositoryDb;
use App\Services\Media\Interfaces\MediaRepository;
use App\Services\Media\MediaGw;
use App\Services\MasterConfiguration\MySqlSetting;
use App\Services\Orm\OrmGw;

/**
 * This is a Service Locator
 *
 * Class Mela
 * @package App\Services
 */
class Mela
{
    /**
     * @return MediaGw
     */
    public static function mediaGw() : MediaGw
    {
        static $gw = null;
        if (null === $gw) {
            $gw = new MediaGw(static::mediaRepo());
        }
        return $gw;
    }

    /**
     * @return MediaRepository
     */
    public static function mediaRepo() : MediaRepository
    {
        static $gw = null;
        if (null === $gw) {
            $gw = new MediaRepositoryDb();
        }
        return $gw;
    }

    /**
     * @return OrmGw
     */
    public static function orm() : OrmGw
    {
        static $gw = null;
        if (null === $gw) {
            $gw = new OrmGw(static::mysqlSetting(), static::ormSetting());
        }
        return $gw;
    }

    /**
     * @return MySqlSetting
     */
    public static function mysqlSetting() : MySqlSetting
    {
        static $gw = null;
        if (null === $gw) {
            $config = config('database.connections.mysql');
            $gw = MySqlSetting::fromConfigArray($config);
        }
        return $gw;
    }

    /**
     * @return OrmSetting
     */
    public static function ormSetting() : OrmSetting
    {
        static $gw = null;
        if (null === $gw) {
            $modelPath = config('database.doctrine.modelPath');
            $env = config('app.env.APP_ENV');
            if ($env === 'development') {
                $gw = new OrmSetting($modelPath, true);
            }
        }
        return $gw;
    }
}