<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Algorithms with Bootstrap</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">

        <h1 class="mb-4">PHP Algorithms</h1>

        <!-- Algorithm 1: Fibonacci Sequence -->
        <?php
            function fibonacci($n) {
                $sequence = [0, 1];
                for ($i = 2; $i < $n; $i++) {
                    $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
                }
                return $sequence;
            }

            $fibonacciResult = fibonacci(10);
        ?>

        <h2>Fibonacci Sequence:</h2>
        <pre><?php print_r($fibonacciResult); ?></pre>

        <!-- Algorithm 2: Factorial -->
        <?php
            function factorial($n) {
                if ($n === 0 || $n === 1) {
                    return 1;
                } else {
                    return $n * factorial($n - 1);
                }
            }

            $factorialResult = factorial(5);
        ?>

        <h2>Factorial:</h2>
        <p><?php echo $factorialResult; ?></p>

        <!-- Algorithm 3: Bubble Sort -->
        <?php
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

            $arr = [64, 34, 25, 12, 22, 11, 90];
            $bubbleSortResult = bubbleSort($arr);
        ?>

        <h2>Bubble Sort:</h2>
        <pre><?php print_r($bubbleSortResult); ?></pre>

        <!-- Algorithm 4: Prime Number Check -->
        <?php
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

            $primeResult = isPrime(13);
        ?>

        <h2>Prime Number Check:</h2>
        <p><?php echo ($primeResult) ? 'Prime' : 'Not Prime'; ?></p>

        <!-- Algorithm 5: String Reversal -->
        <?php
            function reverseString($str) {
                return strrev($str);
            }

            $reverseResult = reverseString('Hello, World!');
        ?>

        <h2>String Reversal:</h2>
        <p><?php echo $reverseResult; ?></p>

    </div>

    <!--!!!Schimbare-Proba-->

    <!-- Add Bootstrap JS and Popper.js scripts here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
