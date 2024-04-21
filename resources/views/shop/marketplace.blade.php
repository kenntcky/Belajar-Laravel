<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace</title>
</head>
<body>

@if($productCategory == null && $productId == null)
    <h1>Shop home page.</h1>
@endif

@if($productCategory != null)
    <h1>Product Category :</h1>
    <p>{{$productCategory}}</p>
@endif
<br>
@if($productId != null)
    <h1>Product ID : </h1>
    <p>{{$productId}}</p>
@endif
</body>
</html>
