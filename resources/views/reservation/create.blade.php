<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html,
        body {
            background-color: #fffef2;
            max-width: 100%;
            overflow-x: hidden; 
            margin: 0; 
            padding: 0;
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

        .carousel-btns {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .carousel-btns button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        .carousel-btns button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

    </style>

</head>
<header class="flex items-center space-x-4 pl-10 mt-4">
    <a href="/"><img class="h-20 w-auto mr-2" src="{{ asset('images/logo_no.png') }}" alt="Logo"></a>
    <div>            
        <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
        <nav class="flex space-x-8 mt-2 text-sm font-bold">
            <a href="/dashboard" class="hover:text-amber-600">Dashboard</a>
        </nav>
        <h1 class="text-5xl font-bold absolute right-12">Reservation</h1>
    </div>
</header>

<body class="item-center">
    <div class="container">
        <form action="{{ route('reservations.store') }}" method="post" class="form-section">
            @csrf
            
            <div class="input-group"> 
                <label for="time_slot">Facility</label>
                <select name="facility">
                    <option value="DR1">Discussion Room 1</option>
                    <option value="DR2">Discussion Room 2</option>
                    <option value="DR3">Discussion Room 3</option>
                    <option value="M1">Meeting Pod 1</option>
                    <option value="M2">Meeting Pod 2</option>
                    <option value="M3">Meeting Pod 3</option>
                    <option value="M4">Meeting Pod 4</option>
                    <option value="M5">Meeting Pod 5</option>
                    <option value="M6">Meeting Pod 6</option>
                    <option value="M7">Meeting Pod 7</option>
                </select>
            </div>

            <div class="input-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date">
            </div>
            
            <div class="input-group">
                <label> From</label>
                <select name="from">
                    <option value="8A">8:00 AM</option>
                    <option value="9A">9:00 AM</option>
                    <option value="10A">10:00 AM</option>
                    <option value="11A">11:00 AM</option>
                    <option value="12P">12:00 PM</option>
                    <option value="1P">1:00 PM</option>
                    <option value="2P">2:00 PM</option>
                    <option value="3P">3:00 PM</option>
                </select>
            </div>

            <div class="input-group">
                <label> Until</label>
                <select name="until">
                    <option value="9A">9:00 AM</option>
                    <option value="10A">10:00 AM</option>
                    <option value="11A">11:00 AM</option>
                    <option value="12P">12:00 PM</option>
                    <option value="1P">1:00 PM</option>
                    <option value="2P">2:00 PM</option>
                    <option value="3P">3:00 PM</option>
                    <option value="4P">4:00 PM</option>
                </select>
            </div>

            <div>
                <button type=submit class="submit-btn">Submit</button>
            </div>
        </form>

        <div class="carousel-section">
            <div class="carousel-placeholder">
                <img src="{{ asset('images/discussion.jpg') }}" alt="Facility 1" id="carouselImage">
                <div class="carousel-btns">
                    <button id="prevBtn" onclick="changeImage(-1)">&#10094;</button>
                    <button id="nextBtn" onclick="changeImage(1)">&#10095;</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const images = [
            "{{ asset('images/discussion.jpg') }}",  // picture of discussion.jpg
            "{{ asset('images/meetingpods.jpg') }}" // picure of meeting pods.jpg
        ];
        let currentIndex = 0;

        function changeImage(direction) {
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = images.length - 1;
            if (currentIndex >= images.length) currentIndex = 0;
            document.getElementById('carouselImage').src = images[currentIndex];
        }
    </script>
    
    </div>
</body>
</html>