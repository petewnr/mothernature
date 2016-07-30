<?PHP

// connection to database
$db = new PDO('mysql:host=localhost;dbname=govhack2016-mn;charset=utf8', 'gh2016evacwu', 'thisisgh2016evacwu');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

try 
{
    $testresult = $db->query("SELECT * FROM wastedata");
    //echo "Connected to db";
} 
catch(PDOException $ex) 
{
    echo "An Error occured!";
    echo $ex->getMessage();
}

?>