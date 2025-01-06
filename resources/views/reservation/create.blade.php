<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">

<head>
    <title>Reservations</title>
</head>
<body class="bg-yellow-200">

<header class="bg-yellow-600 w-screen py-5 flex pl-5 sticky top-0 z-10">
    <div class="text-left">
        <h1 class="text-4xl font-black italic text-white">Reservation</h1>
    </div>
</header>

<h3><a href="">Facility Pictures</a></h3>

<form action="{{ route('reservations.store') }}" method="post">
    @csrf
    <p> Facility
    <select name="facility">
        <option value="DR1">Discussion Room 1</option>
        <option value="DR2">Discussion Room 2</option>
        <option value="DR3">Discussion Room 3</option>
        <option value="M">Meeting Pod</option>
    </select>
    </p>

    <label for="date">Date</label>
    <input type="date" id="date" name="date">

    <p> From
    <select name="from">
        <option value="8A">8:00 AM</option>
        <option value="9A">9:00 AM</option>
        <option value="10A">10:00 AM</option>
        <option value="11A">11:00 AM</option>
    </select>
    </p>

    <p> Until
    <select name="until">
        <option value="8A">8:00 AM</option>
        <option value="9A">9:00 AM</option>
        <option value="10A">10:00 AM</option>
        <option value="11A">11:00 AM</option>
    </select>
    </p>

    <button type="submit" class="rounded-md bg-yellow-900 px-3 py-2 text-sm font-mono text-white shadow-sm hover:bg-yellow-600">Submit</button>
</form>

</body>
</html>