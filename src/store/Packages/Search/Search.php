<?php

namespace Store\Packages\Search;

/**
 * Class Search
 * @method static allDatabases()
 * @method static createDatabase($database=null)
 * @method static insert($index=null,$data=array())
 * @method static createFields($index=null,$fields=array())
 * @method static deleteDatabase($database=null)
 * @method static existDatabase($database=null)
 * @method static health($params=array())
 * @method static search($index=null,$fields=array(),$match=null)
 * @package Store\Packages\Search
 */
class Search
{
    /**
     * connection search driver namespace
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $driver = config('search.default');

        $searchManager = 'Store\\Packages\\Search\\'.$driver.'\\Manager';

        $instance = new $searchManager(config('search.connections.'.$driver));

        return $instance->{$name}($arguments);
    }
}