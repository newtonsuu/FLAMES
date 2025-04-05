<!DOCTYPE html>
<html>
<head>
    <title>FLAMES Compatibility Test</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: radial-gradient(circle,rgb(211, 208, 208),rgb(87, 82, 82));
            margin: 0;
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            font-family: 'Times New Roman', serif;
            color:white;
            background-image: url('flames.gif');
            background-repeat: round;
            background-color: rgb(82, 79, 81);
        }
        form {
            font-family: 'Times New Roman', serif;
            color:white;
        }
        .container {
            width: 400px;
            height: 600px;
            background-color:rgb(197, 14, 29);
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .form-container {
            width: 90%;
            height: 100%;
            text-align: left;
        }
        input[type="text"], input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: 'Times New Roman', serif;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background:rgb(160, 2, 2);
            color: black;
            font-family: 'Arial', sans-serif;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.5s ease-in-out;
            color:white;
            font-family: 'Times New Roman', serif;
        }
        input[type="submit"]:hover {
            background: rgb(250, 216, 25);
            color:white;
        }
        footer{
            position: absolute;
            text-align: center;
            bottom: 10px;
            right: 10px;
            font-size: 14px;
        }
        h1 {
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>F L A M E S</h1>
            <h2>Compatibility Test</h2>
            <form method="post">
                Your Name: <input type="text" name="name1" required><br>
                Your Birthday: <input type="date" name="birthday1" required><br>
                Crush's Name: <input type="text" name="name2" required><br>
                Crush's Birthday: <input type="date" name="birthday2" required><br>
                <input type="submit" name="submit" value="Check Compatibility">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                function calculate_flames($name1, $name2) {
                    $temp_name1 = strtolower(preg_replace('/\s+/', '', $name1));
                    $temp_name2 = strtolower(preg_replace('/\s+/', '', $name2));
                    
                    $name1_letters = array_unique(str_split($temp_name1));
                    $name2_letters = array_unique(str_split($temp_name2));
                    
                    $common_letters = array_intersect($name1_letters, $name2_letters);
                    
                    $common_total = 0;
                    foreach ($common_letters as $letter) {
                        $common_total += substr_count($temp_name1, $letter) + substr_count($temp_name2, $letter);
                    }
                    
                    $flames = ['S', 'F', 'L', 'A', 'M', 'E'];
                    $result_index = $common_total % 6;
                    
                    $meanings = [
                        'F' => 'Friends',
                        'L' => 'Lovers',
                        'A' => 'Anger',
                        'M' => 'Married',
                        'E' => 'Engaged',
                        'S' => 'Soulmates'
                    ];
                    
                    return $meanings[$flames[$result_index]] ?? 'Unknown';
                }

                $name1 = htmlspecialchars($_POST['name1']);
                $name2 = htmlspecialchars($_POST['name2']);
                $result = calculate_flames($name1, $name2);

                echo "<h3 align=center>" . htmlentities($name1) . " and " . htmlentities($name2) . " are $result.</h3>";
            }
            ?>
            
        </div>
        
    </div>
    <footer>Author: Jericho James R. Guanga</footer>
</body>
</html>
