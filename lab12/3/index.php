<?php
$url = "http://10.0.15.21/lab/lab12/restapis/products.php?list=10";
$response = file_get_contents($url);
$result = json_decode($response);

$dataPoints = array();
foreach ($result as $product) {
    $dataPoints[] = array("y" => $product->UnitPrice, "label" => $product->ProductCode);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Price of Products"
                },
                axisY: {
                    title: "Unit Price (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: "M"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints); ?>
                }]
            });
            chart.render();
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        body {
            display: flex;
            justify-content: center;
            background-color: #535C91;
        }
    </style>
</head>

<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
</body>

</html>