<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM produk");
?>

<html>
<head>    
    <title>Tugas 10</title>
</head>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <a href="add.php">Add New Data</a><br/><br/>
 
    <table style="width: 100%;">
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th></th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_produk']."</td>";
            echo "<td>".$user_data['keterangan']."</td>";
            echo "<td>".$user_data['harga']."</td>";
            echo "<td>".$user_data['jumlah']."</td>"; 
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
        }
        ?>
    </table>
</body>
</html>
