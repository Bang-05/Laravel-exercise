<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/signup.css">
    <title>Exercise: 1 - Sign up</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-input" name="name">
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="text" class="form-input" name="age">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="text" class="form-input" name="date"> 
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-input" name="phone">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input type="text" class="form-input" name="web">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-input" name="address">
        </div>
        <div class="errors">
            @include ('blocks.error')
        </div>
        <button type="submit" class="btn">OK</button>
        <div class="display-infor">
            @if(isset($user))
                <p>Name: {{ $user['name'] }}</p>
                <p>Age: {{ $user['age'] }}</p>
                <p>Date: {{ $user['date'] }}</p>
                <p>Phone: {{ $user['phone'] }}</p>
                <p>Website: {{ $user['web'] }}</p>
                <p>Address: {{ $user['address'] }}</p>
            @endif
        </div>
    </form>
    
</body>
</html>