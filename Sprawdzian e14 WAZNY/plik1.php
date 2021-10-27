<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Komis Samochodowy</title>
<link rel="stylesheet" type="text/css" href="omega.css" />
</head>
<body>

<div id='baner'>
    <h1>Samochody</h1>
</div>

<div id="lewe">  
<h2>Wykaz samochodow</h2>
<ul>
      <?php 

      dzialaj(); 

      ?>
</ul>

<h2>Zamówienia</h2>
<ul>
    <?php 

    siema();

     ?>
</ul>

    </div>

    <div id="prawy">  
        
        <h2>Pełne dane: Fiat</h2>

        <?php 

        naura(); 

        ?>
       
</div>


<footer>  
    <table>
        <tr>
<td><a href="https://c.tenor.com/YRUJehYIWk8AAAAd/weird-champ-weird.gif">Kwerendy </td>
<td>Autor: 0000000000</td>

<td>
    <img src="auto.png" alt="komis samochodowy">
</td>
</tr>
</table>
</footer>

</body>
</html>

<?php
function dzialaj()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT id, marka, model FROM samochody";
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
        echo"<li>".$row['id']." ".$row['marka']." ".$row['model']."</li>";
    }
    mysqli_close($conn);
}

function siema()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT samochody_id, klient FROM zamowienia";
    $res=mysqli_query($conn,$sql);
 
    while($row=mysqli_fetch_assoc($res))
    {
        echo"<li>".$row['samochody_id']." ".$row['klient']."</li>";
    }
    mysqli_close($conn);
}

function naura()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="komis";

    $conn=mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT id,marka,model,rocznik,kolor,stan FROM samochody WHERE marka='fiat';";
    $res=mysqli_query($conn,$sql);
 
    while($row=mysqli_fetch_assoc($res))
    {
        echo $row['id']." / ".$row['marka']." / ".$row['model']." / ".$row['rocznik']." / ".$row['kolor']." / ".$row['stan']." /<br> ";
    }
    mysqli_close($conn);
}

?>