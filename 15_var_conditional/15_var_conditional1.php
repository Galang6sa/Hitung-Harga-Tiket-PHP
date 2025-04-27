<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miaww</title>
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
        .form{
            display: block;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            width:fit-content;
            padding: 2vh;
        }
        span{
            /* background-color: greenyellow; */
            padding: 0.35rem;
            font-size: 30px;
            color: black;
        }
        p{
            font-size: 15px;
            color: rgba(0,0,0,0.45);
        }
        label{
            font-size: 13px;
            margin-bottom: 10px;
            margin-top: 15px;
        }
        input{
            transition: 0.3s ease-in-out;
            border: 1px solid gray;
            padding: 0.3rem;
            border-radius: 20px;
        }
        input:focus-visible{
            outline: 1px solid gray;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button{
            -webkit-appearance: none;
        }
        .btn{
            background-color: greenyellow;
            padding: 0.5rem;
            font-size: 17px;
            &:hover{
                cursor: pointer;
                background-color: greenyellow;
                /* padding: 1rem; */
                font-size: 1.35rem;
            }
        }

    </style>
</head>
<body>
    <div class="form">
        <form action="15_var_conditional2.php" method="post">
            <p>harga Tiket Satuan :<br><span><b>Rp. 50.000,00</b></span></p>
            <label>Masukkan Umur</label>
            <input type="number" name="umur" id="umur">
            <label>Jumlah tiket yang ingin dibeli:</label>
            <input type="number" name="jumlah" id="jumlah">
            <br>
            <input class="btn" type="submit" value="Hitung">
        </form>
    </div>
</body>
</html>