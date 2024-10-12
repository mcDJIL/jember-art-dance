<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <style>
    body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #333;
    }
    
    .container {
        text-align: center;
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    
    .container h1 {
        font-size: 6rem;
        margin: 0;
        color: #e74c3c;
    }
    
    .container h2 {
        margin: 10px 0;
    }
    
    .container p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .btn {
        padding: 10px 20px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #2980b9;
    }
    
    .image-container {
        margin-top: 20px;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
</head>

<body>

<div class="container">
    <h1>404</h1>
    <h2>Oops! Halaman tidak ditemukan</h2>
    <p>Maaf, halaman yang Anda cari tidak ada. Mungkin telah dihapus, dipindahkan, atau tidak tersedia.</p>
    <a href="{{ url('/') }}" class="btn">Kembali ke Beranda</a>
    <div class="image-container">
        
    </div>
</div>
    
</body>
</html>