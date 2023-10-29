<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Berhasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }

        .success-message {
            background-color: #f4f4f4;
            color: #4CAF50;
            border-radius: 5px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transform: translateY(-100%);
            animation: slideUp 1s ease-in-out forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="success-message">
                    <h1>Selamat! Anda berhasil terdaftar.</h1>
                    <p>Terima kasih sudah bergabung dengan kami.</p>
                    <a href="login.php" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
