<?php

class QueryDB
{
    /**
     * @var PDO
     */
    private $db;

    /**
     * QueryDB constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    /**
     * @param $search
     * @param $sql
     * @return array
     */
    public function search($search, $sql)
    {
        $search = "$search%";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($search));
        $data = $stmt->fetchAll();
        return $data;
    }

    public function selectCount($typeUser,$counry){
        $sql = "SELECT COUNT(*) FROM users WHERE group_id = $typeUser AND  country_id = $counry";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchColumn();
        return $data;

    }

    public function save($arrayData)
    {
        $findsName = '';
        $findsValue = '';
        foreach ($arrayData as $key => $value) {
            $findsName .= $key . ', ';
            $findsValue .= '\''.$value . '\', ';
        }
        try {
            $stm = $this->db->prepare('INSERT INTO users(' . substr($findsName, 0, -2) . ') VALUES (' . substr($findsValue, 0, -2) . ')');
//
            $stm->execute();
            return ('Вы успешно зарегистрированны!');
        } catch (PDOException $e) {
            return ('Ошибка: ' . $e->getMessage());
        }

    }

}