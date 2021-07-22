<?php

include_once '../Framework/Database/Db.php';
class Dresses
{
    public static function getDressesList()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM dresses');

        $i = 0;
        while ($row = $result->fetch()) {
            $dressesList[$i]['id'] = $row['id'];
            $dressesList[$i]['description'] = $row['description'];
            $dressesList[$i]['size'] = $row['size'];
            $dressesList[$i]['price'] = $row['price'];
            $i++;
        }

        return $dressesList;
    }

    public static function getDressById(int $id)
    {
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM dresses WHERE id ='. $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $dress = $result->fetch();

            return $dress;
        }
    }

}