<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sum.css">
    <title>Sum</title>
</head>
<body>
<body>
    <form method="post" action="sumA">
        @csrf
        <div class="container">
            <div class="name">
                <label for="num1">Enter number 1:</label>
                <input type="number" id="num1" name="number1">
            </div>
            <div class="name">
                <label for="num2">Enter number 2:</label>
                <input type="number" id="num2" name="number2">
            </div>
            <button type="submit">Submit</button>
            <div class="total">
                This total: @isset($sum) {{ $sum }} @endisset
            </div>
        </div>
        </form>
    </body>
</body>
</html>