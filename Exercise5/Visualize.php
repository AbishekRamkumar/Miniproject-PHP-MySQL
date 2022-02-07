<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

class Entity
{
    // Properties
    public $name;
    public $wickets;
}
$score = array();

$sql = "SELECT * FROM tbl_wickets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $myObj = new Entity();
        $myObj->name = $row["player_name"];
        $myObj->wickets = $row['total_wickets'];
        array_push($score, $myObj);
    }
}

$myJSON = json_encode($score);  //Encoding in JSON
//echo $myJSON;
?>
<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<body>
    <input type="hidden" name="json" id="json" value="<?php echo $myJSON; ?>">
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        var stuff = <?php print json_encode($myJSON); ?>;
        var arr = new Array();
        arr = JSON.parse(stuff);
        var xValues = [];
        var yValues = [];
        var i;
        for (i = 0; i < arr.length; i++) {
            xValues[i] = arr[i].name;
            yValues[i] = arr[i].wickets;
        }
        var barColors = ["red", "green", "blue", "orange", "brown", "pink", "violet", "black", "maroon", "cyan"];
        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {  
                    display: false
                },
                title: {
                    display: true,
                    text: "Score of the Players"
                }
            }
        });
    </script>
</body>

</html>