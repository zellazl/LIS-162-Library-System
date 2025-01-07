<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('images/logo_no.png') }}">
        <title>Permission denied</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <img src="{{ asset('images/gabi_sorry.png') }}" alt="Centered Image" class="h-screen w-auto object-cover">
    <div class="grid grid-cols-1 gap-4 place-items-center">
        <button type="button" class="rounded-md bg-[#fddc58] hover:bg-[#ffcc00] px-3 py-2 mt-8 text-sm font-semibold text-black">
                <a href="/">Go back to homepage</a>
        </button>
    </div>
</body>
</html>