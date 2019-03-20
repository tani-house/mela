<?php
/**
 * Created by PhpStorm.
 * User: toavu
 * Date: 3/20/2019
 * Time: 11:45 AM
 */

namespace App\Services\MasterConfiguration;

class OrmSetting
{
    /**
     * @var string
     */
    private $modelPath;

    /**
     * @var bool
     */
    private $isDevMode;

    /**
     * OrmSetting constructor.
     * @param string $modelPath
     * @param bool $isDevMode
     */
    public function __construct(string $modelPath, bool $isDevMode)
    {
        $this->modelPath = $modelPath;
        $this->isDevMode = $isDevMode;
    }

    /**
     * @return string
     */
    public function getModelPath(): string
    {
        return $this->modelPath;
    }

    /**
     * @return bool
     */
    public function isDevMode(): bool
    {
        return $this->isDevMode;
    }

}