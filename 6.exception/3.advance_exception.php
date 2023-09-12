 <?php

    class ServerLoadException extends Exception
    {
    }
    class NetworkException extends Exception
    {
    }
    class DiskFullException extends Exception
    {
    }

    interface NetworkStorage
    {
        function connect();
        function getNmae();
        function report($data);
    }

    class MySQLServer implements NetworkStorage
    {
        public function connect()
        {
            throw new DiskFullException;
        }
        function getNmae()
        {
            return "MySQL";
        }
        function report($data)
        {
        }
    }

    class PostgreSQLServer implements NetworkStorage
    {
        public function connect()
        {
            throw new ServerLoadException();
        }
        function getNmae()
        {
            return "PostgreSQL";
        }
        function report($data)
        {
        }
    }

    class MSSQLServer implements NetworkStorage
    {
        public function connect()
        {
            //throw new NetworkException();
            return $this;
        }
        function getNmae()
        {
            return "MSSQL";
        }
        function report($data)
        {
        }
    }

    class ConnectionPool
    {
        private $connection;
        private $storage;
        function __construct()
        {
            $this->storage = array();
        }

        function addStorage($storage)
        {
            array_push($this->storage, $storage);
        }

        function getConnection()
        {
            foreach ($this->storage as $storage) {
                try {
                    $storage->connect();
                    $this->connection = $storage->connect();
                } catch (ServerLoadException $e) {
                    echo $storage->getNmae() . "is factig huge load \n";
                    echo $storage->report(array('ip' => '123.123.123.', 'error' => 'server'));
                } catch (NetworkStorage $e) {
                    echo $storage->getNmae() . "is having some problem with it's network\n";
                    echo $storage->report(array('ip' => '123.123.123.', 'error' => 'network'));
                } catch (DiskFullException $e) {
                    echo $storage->getNmae() . "has it's disk full\n";
                    echo $storage->report(array('ip' => '123.123.123.', 'error' => 'disk'));
                }
                if ($this->connection) {
                    break;
                }
            }

            if ($this->connection) {
                return $this->connection;
            }
            return false;
        }
    }

    $mysql = new MySQLServer;
    $postgresql = new PostgreSQLServer;
    $mssql = new MSSQLServer;

    $cp = new ConnectionPool;
    $cp->addStorage($mysql);
    $cp->addStorage($postgresql);
    $cp->addStorage($mssql);

    $connection = $cp->getConnection();
    print_r($connection);
