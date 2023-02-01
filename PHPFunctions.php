<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $today = date("m/d/y");
    
    function format_timestamp($date) {
        return date("m/d/Y", strtotime($date));
    }

    echo format_timestamp($today), "<br>";
    echo "International: ";

    function international_time_format($date) {
        return date("d/m/Y", strtotime($date));
    }
    
    echo international_time_format($today), "<br>";


    function string_function($stringInput) {
        echo "<br> String: ", $stringInput;
        echo "<br>Number of characters: ", strlen($stringInput);
        echo "<br> Trim Whitespace: ", str_replace(' ', '', $stringInput);
        echo "<br> Lowercase: ", strtolower($stringInput);
        // converts string to lowercase then checks if it contains 'dmacc' 
        echo "<br> Contains 'DMACC': "; 
        if(str_contains(strtolower($stringInput), 'dmacc') == true){
           echo "true";
        } else {
           echo "false";
        };
    }
    string_function("Hello World");
    echo "<br>";
    string_function("Hello DMACC");

    function format_phone_number($phoneNumber) {
        $phoneNumber = substr_replace($phoneNumber, "-", 3, 0);
        $phoneNumber = substr_replace($phoneNumber, "-", 7, 0);
        echo $phoneNumber;
    }
    echo "<br> <br>";
    echo "Formatted Phone Number: ", format_phone_number(1234567890);

    function format_currency($amount) {
        
       echo  "$", number_format($amount, 2);
    }

    echo "<br>Formatted Currency: ";
    format_currency(123456);
    ?>
</body>
</html>