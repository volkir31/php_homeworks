<?php


class DB
{

    protected string $dbname;
    protected string $login;
    protected string $password;

    public function __construct(array $config)
    {
        $this->dbname = $config['dbname'];
        $this->login = $config['login'];
        $this->password = $config['password'];
    }

    /**
     * @param string $sql
     * @return bool
     */
    public function execute(string $sql): bool
    {
        $dbh = new PDO('mysql:localhost;dbname=' . $this->dbname, $this->login, $this->password);
        $sth = $dbh->prepare($sql);
        return $sth->execute();
    }

    /**
     * @param string $sql
     * @param array $data
     * @return array
     */
    public function query(string $sql, array $data): array
    {
        $dbh = new PDO('mysql:localhost;dbname=' . $this->dbname, $this->login, $this->password);
        $sth = $dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}

//$db = new DB(include __DIR__ . '/config.php');