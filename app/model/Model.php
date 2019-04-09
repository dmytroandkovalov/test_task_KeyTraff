<?php


class Model
{

    private $pdo;


    public function __construct($db_host = DB_HOST, $db_name = DB_NAME, $db_user = DB_USER, $db_pass = DB_PASSSWORD )
    {
        $this->pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    }

    public function getRequest1()
    {

        $sql = 'SELECT `r`.`offer_id` AS `order_number`, 
                       `of`.`name`    AS `good_name`, 
                       `r`.`price`    AS `good_price`, 
                       `r`.`count`    AS `good_count`, 
                       `op`.`name`    AS `operator_name`
                FROM `requests` AS `r` 
                    INNER JOIN `offers`    AS `of` ON `r`.`offer_id`   = `of`.`id`
                    INNER JOIN `operators` AS `op` ON `r`.`operator_id` = `op`.`id`
                WHERE `r`.`count` > 2 AND `op`.`id` IN( 10, 12 )';

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getRequest2()
    {

        $sql = 'SELECT DISTINCT 
                       `of`.`name` AS `good_name`,
                       `r`.`count` AS `good_count`, 
                       `r`.`price` AS `good_price`
                FROM `requests` AS `r` 
                    INNER JOIN `offers` AS `of` ON `r`.`offer_id` = `of`.`id`
                    GROUP BY `good_name`, `good_count`, `good_price`';

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }


}