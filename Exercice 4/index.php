<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body style="text-align:center;">
    <h2>VOS NOTES</h2>
    <?php
session_start();
for($i=0; $i<50;$i++)
{
    if (!isset($_SESSION["title{$i}"]) && isset($_POST['title']))
{$_SESSION["title{$i}"] = $_POST['title'];
$_SESSION["textarea{$i}"] = $_POST['textarea'];
break;}

}echo '<body><div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">';
for($i=0; $i<50;$i++)

{if (isset($_SESSION["title{$i}"]))
    {echo "<div style='margin:5px; border:2px solid black;padding:1 10px;' name='{$_SESSION["title{$i}"]}'>";
    echo "<h3> <font color= red><u> {$_SESSION["title{$i}"]}</u></font></h3><p>{$_SESSION["textarea{$i}"]} </p><br></div>";}
};
echo "</div></body>";

echo "<br><br>";
echo '<a href="addNote.php">Ajouter une note.</a><br><br>';
echo '<a href="restartSession.php">Quitter votre session.</a>';
?>
    
</body>
</html>