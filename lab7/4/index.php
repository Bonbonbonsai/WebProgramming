<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog-san</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap');
        * {
            background-color: #FFC9A8;
        }
        .main-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin: 50px;
        }
        .main-container div {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        h1 {
            font-family: "Mitr", sans-serif;
            text-align: center;
            font-size: 50px;
            color: orangered;
        }
        img {
            width: 100%;
            height: auto;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <h1>Dog-san</h1>
    <div class="main-container">
        <?php
        $picture = array(
            "https://i.pinimg.com/564x/ec/f6/11/ecf61134269dda541b7265e4f94edd82.jpg",
            "https://i.pinimg.com/564x/44/a3/d9/44a3d9d6e8d57f0554d643ddcd55104d.jpg",
            "https://i.pinimg.com/564x/94/ca/7f/94ca7f471b9e07aa92df7c284513b2d7.jpg",
            "https://i.pinimg.com/564x/8e/84/ae/8e84aef392fa0dffd19cf85ad67a9231.jpg",
            "https://i.pinimg.com/564x/ac/2e/a5/ac2ea56b0890e9208c3c245a8d72c8c1.jpg",
            "https://i.pinimg.com/564x/4c/3c/b3/4c3cb3bafc5303d12a9731f61ab95e50.jpg",
            "https://i.pinimg.com/564x/e6/6d/86/e66d86609636fc45bb06eca6d55c20f9.jpg",
            "https://i.pinimg.com/564x/44/52/0c/44520cc062663bf10d51041c8b05422b.jpg",
            "https://i.pinimg.com/736x/17/88/2c/17882ca79074db36e65c8144f42cfb6e.jpg",
            "https://i.pinimg.com/564x/4f/19/9e/4f199e92b4133c1ad1fb220883bb9681.jpg",
            "https://i.pinimg.com/564x/d6/ae/3a/d6ae3a5131919c52f8f6d65ccac3355c.jpg",
            "https://i.pinimg.com/564x/ad/83/b4/ad83b4cf5b3e84d1017860a5ea0c0bf4.jpg",
            "https://i.pinimg.com/564x/27/ed/c8/27edc827604ed3ec705ab7cc4d62ae5e.jpg",
            "https://i.pinimg.com/564x/3b/fb/e0/3bfbe0f377bdfbe1778cfdad65928598.jpg",
            "https://i.pinimg.com/564x/d8/8a/dd/d88add32e625726611b1689edbf9164f.jpg",
            "https://i.pinimg.com/564x/fd/f4/d1/fdf4d1111e8269551514f4a14f5be210.jpg",
            "https://i.pinimg.com/564x/2c/07/bc/2c07bc1e1db512671a396981a8dac616.jpg",
            "https://i.pinimg.com/564x/22/d1/20/22d120587b46f0d178df693236c82f87.jpg",
            "https://i.pinimg.com/564x/55/b4/39/55b4399e493480fbbf44308eff2c0bcd.jpg",
            "https://i.pinimg.com/564x/f0/55/51/f05551eaf8e87060dc375b884a5383f8.jpg"
        );

        for ($i = 0; $i < count($picture); $i += 5) {
            echo "<div>";
            for ($j = 0; $j < 5; $j++) {
                $index = $i + $j;
                if ($index < count($picture)) {
                    echo "<a href='$picture[$index]'><img src='$picture[$index]' alt='Dog $index'></a>";
                }
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>