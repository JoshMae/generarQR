<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Codes</title>
</head>
<body>
    <form action="{{ route('generateQRCodes') }}" method="POST">
        @csrf
        <label for="quantity">Cantidad de Códigos QR:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <label for="download_path">Ruta de Descarga:</label>
        <input type="text" name="download_path" id="download_path" required>

        <button type="submit">Generar Códigos QR</button>
    </form>
</body>
</html>
