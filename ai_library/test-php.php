<?PHP
require_once('db_util.php');

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("location: index.php");
}

$sql = "SELECT * FROM Libri";
$risposta = mysqli_query($connect, $sql) or die('Errore nella query: ' . $sql . '\n' . mysqli_error());
mysqli_close($connect);

while ($riga = mysqli_fetch_array($risposta)) {
        echo "<p>".$riga['autore']."</p>";
}

?>