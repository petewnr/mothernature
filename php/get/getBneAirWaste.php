<?PHP

// get all events

require_once '../inc/db_connect.php';

$stmt = $db->prepare("SELECT SUM(quantity_in_kg) FROM wastedata WHERE Type='air' AND site_address_suburb='Brisbane'");
$stmt->execute();
//$result = $stmt->fetchAll();
$result = $stmt->fetch();
//$result = json_encode($result);

echo $result[0];



?>