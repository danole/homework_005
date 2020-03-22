<form method="post" action="admin.php">
    <button value="5" type="submit" name="button">Список всех пользователей</button>
    <button value="6" type="submit" name="button">Список всех заказов</button>
</form>
<?php

include __DIR__ . "/../src/functions.php";

connect();

if ($_POST['button'] == 5) {
    $sth = $db->prepare("SELECT * FROM `users`");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($array as $item) {
        echo "<table border='1px'>
              <tr>
              <td >id=>" . $item["id"] . "</td><td>email=>" . $item["email"] . "</td><td>name=>" . $item["name"] . "</td><td>phone=>" . $item["phone"] . "</td><td>orders=>" . $item["orders"] . "</td>
              </tr>
              </table>";
    }
}

if ($_POST['button'] == 6) {
    $sth = $db->prepare("SELECT * FROM `orders`");
    $sth->execute();
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    foreach ($array as $item) {
        echo "<table border='1px'>
              <tr>
              <td >id=>" . $item["id"] . "</td><td>street=>" . $item["street"] . "</td><td>home=>" . $item["home"] . "</td><td>part=>" . $item["part"] . "</td><td>appt=>" . $item["appt"] . "</td>
              <td>floor=>" . $item["floor"] . "</td><td>comment=>" . $item["comment"] . "</td><td>payment=>" . $item["payment"] . "</td>
              <td>callback=>" . $item["callback"] . "</td><td>user_email=>" . $item["user_email"] . "</td><td>user_id=>" . $item["user_id"] . "</td>
              </tr>
              </table>";
    }
}

?>