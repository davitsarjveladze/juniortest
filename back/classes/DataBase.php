<?php
namespace back\classes;
/**
 * Class DataBase using for working with database (can connect and send query)
 * @package Liw\core
 */
class DataBase
{
    /**
     * its a pdo object
     * @var \PDO
     */
    private $pdo;
    /**
     * showing is database connected or not
     * @var bool
     */
    private $isConnected;
    /**pdo statement obj
     *
     * @var \PDOStatement
     */
    private $statement;
    /**
     * the database settings
     * @var array
     */
    protected $settings = [];
    /**
     * parametrs of sql query
     * @var array
     */
    private $parameters =[];

    /**taking bdo setting (dbname ,host,user,password,charset)
     * DataBase constructor.
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        $this->settings = $settings;

        $this->connect();
    }

    /**
     * connecting to bd
     */
    private function connect(){
        $dsn = 'mysql:dbname='.$this->settings['dbname'].';host='.$this->settings['host'];
        try {
            $this->pdo =new\PDO($dsn,$this->settings['user'],$this->settings['password'],[
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$this->settings['charset']
            ]);

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);

            $this->isConnected = true;

        }catch (\PDOException $e){
            exit($e->getMessage());
        }
    }

    /**
     * closing connection
     */
    public function closeConnection()
    {
        $this->pdo = null;
    }

    /**
     * checks connection
     * checks parameters
     * @param string $query
     * @param array $parameters
     */
    private function init(string $query,array $parameters = [])
    {
        if (!$this->isConnected){
            $this->connect();
        }
        try{
            $this->statement = $this->pdo->prepare($query);

            #bind parameters for security
            $this->bind($parameters);

            if (!empty($this->parameters)){
                foreach ($this->parameters as $param=>$value){
                    if (is_int($value[1])){
                        $type = \PDO::PARAM_INT;
                    }elseif (is_bool($value[1])){
                        $type = \PDO::PARAM_BOOL;
                    }elseif (is_null($value[1])){
                        $type = \PDO::PARAM_NULL;
                    }else{
                        $type = \PDO::PARAM_STR;
                    }

                    $this ->statement->bindValue($value[0],$value[1], $type);
                }
            }
            $this->statement->execute();
        }catch (\PDOException $e){
            exit($e->getMessage());
        }

    }

    /**
     *
     * @param array $parameters
     */
    private function bind(array $parameters): void
    {
        if (!empty($parameters) and is_array($parameters)){
            $columns = array_keys($parameters);

            foreach ($columns as $i => &$column){
                $this->parameters[sizeof($this->parameters)] = [
                    ':'.$column,
                    $parameters[$column]
                ];
            }
        }
    }

    /**
     *sends query in database
     *
     * @param string $query
     * @param array $parameters
     * @param int $mode
     * @return array|int|null
     */
    public function query(string $query,array $parameters=[], $mode = \PDO::FETCH_ASSOC)
    {
        $query = trim(str_replace('\r', '',$query));

        $this ->init($query, $parameters);

        $rawStatement = explode(' ',preg_replace("/\s+|\t+|\n/", " ",$query));

        $statement = strtolower($rawStatement[0]);

        if ($statement === 'select' || $statement==='show'){
            return $this->statement->fetchAll($mode);
        }elseif ($statement === 'insert' || $statement === 'delete' || $statement === 'delete'){
            return $this->statement->rowCount();
        }else{
            return null;
        }
    }
}