<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Service Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden; 
            margin: 0; 
            padding: 0;
        }

        body {
            background-color: #fffef2;
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
            background-color: #f7d547;
            border-radius: 10px;
            padding: 10px;
        }

        .input-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input,
        .input-group select {
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

        .submit-btn {
            background-color: #f7d547;
            padding: 20px 60px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #f1c232;
        }

        footer {
            width: 100%; 
            box-sizing: border-box; 
        }
    </style>
</head>

<body>
    <header class="flex items-center space-x-4 pl-10 mt-4">
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
        <form action="{{ route('reqservices.index') }}" method="post" class="form-section">
            @csrf
            <div class="input-group">
                <label for="user_fullname">Your Name (LAST NAME, Given MI.)</label>
                <input type="text" name="user_fullname" id="user_fullname" required>
            </div>

            <div class="input-group">
                <label for="service_date">Appointment Date</label>
                <input type="date" name="service_date" id="service_date" required>
            </div>

            <div class="input-group">
                <label for="time_slot">Appointment Time</label>
                <select type="string" name="time_slot" id="time_slot" required>
                    <option value="8-9AM">8:00 - 9:00 AM</option>
                    <option value="9-10AM">9:00 - 10:00 AM</option>
                    <option value="10-11AM">10:00 - 11:00 AM</option>
                    <option value="11-12PM">11:00 - 12:00 PM</option>
                    <option value="1-2PM">1:00 - 2:00 PM</option>
                    <option value="2-3PM">2:00 - 3:00 PM</option>
                    <option value="3-4PM">3:00 - 4:00 PM</option>
                    <option value="4-5PM">4:00 - 5:00 PM</option>
                </select>
            </div>

            <div class="input-group">
                <label for="service_name">Service to Avail</label>
                <select type="string" name="service_name" id="service_name" required>
                    <option value="Library Orientation">Library Orientation</option>
                    <option value="Term Paper and Research Counseling">Term Paper and Research Counselling</option>
                    <option value="Reader Advisory">Reader Advisory</option>
                    <option value="Lamination">Lamination</option>
                    <option value="Scanning">Scanning</option>
                    <option value="Printing">Printing</option>
                </select>
            </div>
            <div>
                <button type=submit class="submit-btn">Submit</button>
            </div>
        </form>

        <div class="carousel-section">
            <div class="carousel-placeholder">
                <img src="{{ asset('images/gabi_no.png') }}" alt="Services Description">
                <a href="/services">Services Description</a>
            </div>
        </div>
    </div>

    <footer class="mt-20 text-center py-4 relative" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</body>

</html>
