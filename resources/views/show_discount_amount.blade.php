<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discount</title>
</head>
<body>
<form method="post">
    @csrf
    <p>
    <h1>Display discount calculator</h1>
    </p>
    <p>
        <label><b>Product Description: </b></label>
    <p>{{$description}}</p>
    </p>
    <p>
        <label><b>Discount Price: </b></label>
    <p>{{$discountPrice}}</p>
    </p>
    <p>
        <label><b>Discount Percent: </b></label>
    <p>{{$discount_percent}}</p>
    </p>
    <p>
        <label><b>Discount Amount: </b></label>
    <p>{{$discountAmount}}</p>
    </p>
    <p>
        <label for=""><b>Discount Price</b></label>
        <p>{{$price}}</p>
    </p>
</form>
</body>
</html>
