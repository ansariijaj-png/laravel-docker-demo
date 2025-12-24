<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Docker</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f4f6f8;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: #ffffff;
            border-radius: 12px;
            padding: 40px;
            max-width: 900px;
            width: 90%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        h1 {
            font-size: 2.6rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        h1 span {
            color: #ff2d20;
            /* Laravel red */
        }

        p {
            font-size: 1.05rem;
            color: #4b5563;
            margin-bottom: 30px;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 25px 20px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0;
            font-size: 1.05rem;
            font-weight: 600;
            color: #111827;
        }

        footer {
            margin-top: 35px;
            font-size: 0.85rem;
            color: #6b7280;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome Ijaj Ansari to <span>Laravel + Docker</span></h1>
        <p>
            Your application is successfully running inside a Docker container.
            Clean. Isolated. Production-ready.
        </p>

        <div class="tech-grid">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
                <h3>Laravel</h3>
            </div>

            <div class="card">
                <img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" alt="Docker">
                <h3>Docker</h3>
            </div>

            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="Database">
                <h3>Database</h3>
            </div>

            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg" alt="GitHub">
                <h3>GitHub Actions</h3>
            </div>
        </div>

        <footer>
            © {{ date('Y') }} | Laravel Docker Demo | CI/CD Ready
        </footer>
    </div>

</body>

</html>