<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assume there is a styles.css for styling -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div class="qr-scan">
            <h3>Student QR Scan</h3>
            <button onclick="scanQR()">Scan QR Code</button>
        </div>
    </div>

    <script>
        function scanQR() {
            // QR scan functionality can be implemented here.
            alert('QR Scan functionality to be implemented.');
        }
    </script>
</body>
</html>
