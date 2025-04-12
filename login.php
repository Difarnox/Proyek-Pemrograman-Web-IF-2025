<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VStock - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="image.png" alt="Warehouse Illustration">
        </div>
        <div class="right">
            <h2>.:: VStock (View Stock) ::.</h2>
            <p>Melihat stok barang yang tersedia</p>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Masukkan Username" required>
                <input type="password" name="password" placeholder="Masukkan Password" required>
                <select name="role" required>
                    <option value="" disabled selected>Masuk Sebagai</option>
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="manager">Manager</option>
                </select>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>