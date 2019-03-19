<?php

namespace App\Services\Orm\Models;

class MySqlSetting
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @var string
     */
    private $dbName;

    /**
     * @var string
     */
    private $dbUser;

    /**
     * @var string
     */
    private $dbPassword;

    /**
     * MySqlSetting constructor.
     * @param string $host
     * @param int $port
     * @param string $dbName
     * @param string $dbUser
     * @param string $dbPassword
     */
    public function __construct(string $host, int $port, string $dbName, string $dbUser, string $dbPassword)
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
    }

    /**
     * @param array $settings
     * @return MySqlSetting
     */
    public static function fromConfigArray(array $settings) : self
    {
        return new self(
            $settings['host'],
            $settings['port'],
            $settings['database'],
            $settings['username'],
            $settings['password']
        );
    }
}