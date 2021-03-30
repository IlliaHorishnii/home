<?php

class Database extends PDO
{

    private $engine = 'mysql';
    private $host = 'localhost';
    private $database = 'firstbase';
    private $user = 'root';
    private $pass = 'root';


    function __construct()
    {
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }
    

    public function select(string $sql): array
    {
        $query = $this->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query(string $sql)
    {
        $this->pdo->query($sql);
    }


}
$connection = new Database();
//////////////////////////////////////////
/// Реализовать выборку всех заказов по одному из контрагентов
echo "<br>"."<br>"."Реализовать выборку всех заказов по одному из контрагентов" ."<br>" ."<br>" ."<br>";

$sql = "SELECT * FROM `orders_list` 
                INNER JOIN partners_list on partners_list.orderId=orders_list.id 
                WHERE partners_list.name ='Андрей Серый' ";

$orders = $connection->select($sql);
foreach($orders as $order ) {
    print_r($order);
    echo '<br>';
}
//////////////////////////////////////////
/// Реализовать выборку по сумме всех заказов на контрагентов
echo "<br>"."<br>"."Реализовать выборку по сумме всех заказов на контрагентов" ."<br>" ."<br>" ."<br>";

$sql = "SELECT partners_list.*,sum(payments.sum) as total
                                FROM `payments`
                                INNER JOIN partners_list on partners_list.orderId=payments.partnerId
                                GROUP BY partners_list.name";
$sum = $connection->select($sql);
foreach($sum as $sum ) {
    print_r($sum);
    echo '<br>';
}

//////////////////////////////////////////
/// Реализовать выборку задвоенных контрагентов
echo "<br>"."<br>"."Реализовать выборку задвоенных контрагентов" ."<br>" ."<br>" ."<br>";

$sql = " SELECT * 
    FROM partners_list 
    WHERE `name` IN (
        SELECT `name` 
        FROM partners_list 
         GROUP BY `name` 
        HAVING count(`name`) > 1)
        ORDER BY `name`";

$partners = $connection->select($sql);
foreach($partners as $partner ) {
    print_r($partner);
    echo '<br>';
}

//////////////////////////////////////////
/// Реализовать выборку всех оплаченных заказов
echo "<br>"."<br>"."Реализовать выборку всех оплаченных заказов" ."<br>" ."<br>" ."<br>";

$sql = "SELECT * FROM `orders_list` WHERE orders_list.status = 'paid'";

$paid = $connection->select($sql);
foreach($paid as $paid) {
    print_r($paid);
    echo '<br>';
}
?>