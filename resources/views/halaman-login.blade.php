<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terima Kasih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .thankyou-container {
            max-width: 700px;
            margin: 80px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .thankyou-container h2 {
            color: #3E97FF;
            font-weight: bold;
        }

        .email-info {
            color: #555;
            font-style: italic;
        }

        blockquote {
            font-size: 1.1rem;
            margin-top: 20px;
            color: #333;
            background-color: #f8f9fa;
            border-left: 5px solid #3E97FF;
            padding: 15px 20px;
            border-radius: 6px;
        }

        .btn-primary {
            background-color: #3E97FF;
            border: none;
        }
    </style>
</head>
<body>

    <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sign Up Form</h5>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



        <a href="{{ url('/') }}" class="btn btn-primary mt-4">Kembali ke Beranda</a>
    </div>

</body>
</html>
