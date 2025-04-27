<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miaw</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            /* font-family: Arial, Helvetica, sans-serif; */
            font-family: "Space Grotesk", sans-serif;
        }
        body{
            background-color: whitesmoke;
            height: 100vh;
        }
        form{
            background-color: white;
            display: grid;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 7px 7px 25px 0px rgba(0,0,0,0.05);
            
        }
        span{
            /* background-color: greenyellow; */
            padding: 0.35rem;
            font-size: 30px;
            color: black;
        }
        .form{
            display: block;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            width:fit-content;
            padding: 2vh;
        }
        p{
            font-size: 11px;
            margin: 5px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .btn{
            margin-top: 1rem;
            border: 1px solid gray;
            padding: 0.3rem;
            border-radius: 20px;
            background-color: greenyellow;
            padding: 0.5rem;
            font-size: 17px;
            text-align: center;
            transition: 0.3s ease-in-out;
            &:hover{
                cursor: pointer;
                background-color: greenyellow;
                /* padding: 1rem; */
                font-size: 1.35rem;
            }
        }
        h2{
            text-align: center;
            margin-bottom: 2vh;
        }
        hr{
            margin-bottom: 3vh;

        }

    </style>
</head>


<body>
    
    
    
<?php


$harga_tiket = 50000;
$umur = $_POST["umur"];
$jumlahtiketyangdibeli = $_POST["jumlah"];
$diskon;
$total = $harga_tiket * $jumlahtiketyangdibeli;

echo "<div class=form>";
echo "<form>";

echo "<h2> Rincian harga</h2>", "<hr>";

echo"<p>Harga Tiket satuan : ", $harga_tiket ,"</p>";
echo "<p>Usia anda : ", $umur ,"</p>";

echo "<p>Jumlah Tiket yang Kamu beli : ", $jumlahtiketyangdibeli ,"</p>";

if ($jumlahtiketyangdibeli > 5) {
    if($umur < 15){
        $diskon = $total * 0.3;
        $harga_tiket = $total - $diskon;
        
    }
    elseif($umur > 15){
        $diskon = $total * 0.25;
        $harga_tiket = $total - $diskon;
    }
    elseif($umur = 15){
        $diskon = $total * 0.1;
        $harga_tiket = $total - $diskon;
    }
}
else {
    if($umur < 15){
        $diskon = $total * 0.2;
        $harga_tiket = $total - $diskon;

    }
    elseif($umur > 15){
        $diskon = $total * 0.15;
        $harga_tiket = $total - $diskon;
    }
}
echo "<p>Total diskon : ", $diskon ,"</p>";
echo "<br><p>Harga tiket setelah mendapat diskon : ", "<br>","<span>" ,"Rp. ", $harga_tiket , ",00","</span>" ,"</p>";
echo "<a href=15_var_conditional1.php class=btn >Kembali</a>";
echo "</form>";
echo "</div>";
?>

</body>
</html>