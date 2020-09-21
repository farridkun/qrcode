<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code in Laravel 6? - Medikre.com</title>
</head>
<body>
    
<div class="visible-print text-center">
    <h1>Laravel 6 - QR Code Generator Example</h1>
     
    {!! QrCode::size(250)->generate('www.google.com'); !!} 
     
    <p>example by Medikre.com.</p>
</div>
    
</body>
</html>