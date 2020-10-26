<html>
<head>
<title>Snati - ICECREAM</title>
<link rel="stylesheet" href="css/navbar.css">
<style>
input {
    width: 20%;
    left: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    clear: both;
}
</style>
</head>
<body style="background: #FF337D;">
@include('navbar')
<div>
<h1 style="text-align: center;">Snati - ICECREAM</h1>

<p style="text-align: center;">Welcome to icecream</p>
<div style="text-align: center;">
    <form>
    @foreach ($products as $product)
    <input type="number" name="quantity" value="0" min="0" max="5">
    <label>{{ $product->name }}</label><br>
    @endforeach
    <input type="submit">
    </form>
</div>
</div>
</body>
</html>
