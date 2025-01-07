<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Room Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <style>
        body {
            background-color: #fef9c3;
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 40px;
            width: 100%;
            box-sizing: border-box;
            padding: 0 20px;
        }

        .form-section {
            width: 40%;
            text-align: left;
        }

        .form-section .input-group {
            margin: 20px 0;
            background-color: #fef08a;
            border-radius: 10px;
            padding: 10px;
        }

        .input-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 90%;
            padding: 8px 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            background-color: #fff;
        }

        .carousel-section {
            width: 50%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-left: -20px;
        }

        .carousel-placeholder {
            width: 500px;
            height: 300px;
            border-radius: 10px;
            border: 2px solid #f1c232;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7d547;
            position: relative;
        }

        .carousel-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .carousel-placeholder a {
            position: absolute;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        footer {
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body class="bg-yellow-200">
    <header class="services flex items-center space-x-4 pl-10 mt-4">
        <a href="/" class="flex-shrink-0">
            <img class="h-20 w-auto" src="{{ asset('images/logo_no.png') }}" alt="Logo">
        </a>
        <div>
            <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY</a>
            <nav class="flex space-x-8 mt-2 text-sm font-bold">
                <a href="/dashboard" class="hover:text-amber-600">Dashboard</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <form action="{{ route('reqresources.index') }}" method="post" class="form-section">
            @csrf
            <div class="input-group">
                <label for="user_fullname">Your Name (LAST NAME, Given MI.)</label>
                <input type="text" name="user_fullname" id="user_fullname" required>
            </div>
            <div class="input-group">
                <label for="claim_date">Claim Date</label>
                <input type="date" name="claim_date" id="claim_date" required>
            </div>

            <div class="input-group">
                <label for="resource_title">Full Resource Title</label>
                <input type="text" name="resource_title" id="resource_title" required>
            </div>

            <div class="input-group">
                <label for="resource_author">Author/s (LAST NAME, Given MI.)</label>
                <input type="text" name="resource_author" id="resource_author" required>
            </div>

            <div class="input-group">
                <label for="resource_accession_number">Accession Number</label>
                <input type="text" name="resource_accession_number" id="resource_accession_number" required>
            </div>

            <div>
                <button type="submit" class="rounded-md bg-yellow-900 px-3 py-2 text-sm font-mono text-white shadow-sm hover:bg-yellow-600">Save</button>
            </div>
        </form>

        
        <div class="carousel-section">
            <div class="carousel-placeholder">
                <a href="/collection">
                    <img src="{{ asset('images/gabi_no.png') }}" alt="Go to Collections">
                </a>
            </div>
        </div>
    </div>

    <footer class="mt-20 text-center py-4 relative" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</body>

</html>
