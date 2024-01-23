<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @livewireStyles
</head>
<body>

    <div>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/shop">Shop</a>
        <a href="/cart">Cart</a>
    </div>
    
    {{ $slot}}

@livewireScripts
</body>
</html>