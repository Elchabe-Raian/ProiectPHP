<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Algorithms with Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 0px; /* Adjusted top padding for the fixed navbar */
        }

        .algorithm-tab {
            margin-top: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        .tab-content {
            padding: 20px;
        }

        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>PHP Algorithms with Bootstrap</h1>
        <p>Explore various algorithms implemented in PHP</p>
    </div>

<body>

    <!-- Create a Bootstrap Navbar here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Algorithms</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#tab1">Fibonacci Sequence</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#tab2">Factorial</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#tab3">Bubble Sort</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#tab4">Prime Number Check</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" class="nav-link" href="#tab5">String Reversal</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Create a Bootstrap Tab Container here -->
    <div class="container">
        <div class="tab-content">

            <!-- Algorithm 1: Fibonacci Sequence -->
            <div class="tab-pane fade" id="tab1">
                <h2>Fibonacci Sequence:</h2>
                
                <!-- Input form for Fibonacci Sequence -->
                <form method="post">
                    <div class="form-group">
                        <label for="fibonacciInput">Enter a number:</label>
                        <input type="text" class="form-control" id="fibonacciInput" name="fibonacciInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Call the Fibonacci function with user input
                        $userInput = $_POST["fibonacciInput"];
                        $fibonacciResult = fibonacci($userInput);

                        // Display the result
                        echo "<h3>Result:</h3>";
                        echo "<pre>" . print_r($fibonacciResult, true) . "</pre>";
                    }
                ?>
            </div>

            <!-- Algorithm 2: Factorial -->
            <div class="tab-pane fade" id="tab2">
                <h2>Factorial:</h2>
                
                <!-- Input form for Factorial -->
                <form method="post">
                    <div class="form-group">
                        <label for="factorialInput">Enter a number:</label>
                        <input type="text" class="form-control" id="factorialInput" name="factorialInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Call the Factorial function with user input
                        $userInput = $_POST["factorialInput"];
                        $factorialResult = factorial($userInput);

                        // Display the result
                        echo "<h3>Result:</h3>";
                        echo "<p>" . $factorialResult . "</p>";
                    }
                ?>
            </div>

            <!-- Algorithm 3: Bubble Sort -->
            <div class="tab-pane fade" id="tab3">
                <h2>Bubble Sort:</h2>
                
                <!-- Input form for Bubble Sort -->
                <form method="post">
                    <div class="form-group">
                        <label for="bubbleSortInput">Enter numbers separated by commas:</label>
                        <input type="text" class="form-control" id="bubbleSortInput" name="bubbleSortInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Call the Bubble Sort function with user input
                        $userInput = $_POST["bubbleSortInput"];
                        $arr = explode(",", $userInput);
                        $bubbleSortResult = bubbleSort($arr);

                        // Display the result
                        echo "<h3>Result:</h3>";
                        echo "<pre>" . print_r($bubbleSortResult, true) . "</pre>";
                    }
                ?>
            </div>

            <!-- Algorithm 4: Prime Number Check -->
            <div class="tab-pane fade" id="tab4">
                <h2>Prime Number Check:</h2>
                
                <!-- Input form for Prime Number Check -->
                <form method="post">
                    <div class="form-group">
                        <label for="primeInput">Enter a number:</label>
                        <input type="text" class="form-control" id="primeInput" name="primeInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Call the Prime Number Check function with user input
                        $userInput = $_POST["primeInput"];
                        $primeResult = isPrime($userInput);

                        // Display the result
                        echo "<h3>Result:</h3>";
                        echo "<p>" . ($primeResult ? 'Prime' : 'Not Prime') . "</p>";
                    }
                ?>
            </div>

            <!-- Algorithm 5: String Reversal -->
            <div class="tab-pane fade" id="tab5">
                <h2>String Reversal:</h2>
                
                <!-- Input form for String Reversal -->
                <form method="post">
                    <div class="form-group">
                        <label for="stringInput">Enter a string:</label>
                        <input type="text" class="form-control" id="stringInput" name="stringInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Call the String Reversal function with user input
                        $userInput = $_POST["stringInput"];
                        $reverseResult = reverseString($userInput);

                        // Display the result
                        echo "<h3>Result:</h3>";
                        echo "<p>" . $reverseResult . "</p>";
                    }
                ?>
            </div>

            <!-- Add other algorithm tabs and input forms here -->
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 PHP Algorithms</p>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

<?php
// Algorithm functions (you can place them in a separate file and include here)
function fibonacci($n) {
    $sequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
    }
    return $sequence;
}

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // swap $arr[$j] and $arr[$j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function reverseString($str) {
    return strrev($str);
}
?>
