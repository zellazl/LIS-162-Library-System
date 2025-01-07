<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_no.png') }}">
    <title>Statistics</title>
    <!--TailWind CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<style>
    .resources {
        display: flex;
        align-items: center;
        margin: 50px;
    }
    .resources-footer {
        margin: 20px 60px;
    }
    .resources-footer button {
        font-size: 14px;
        background-color: #fddc58;
        border: none;
        padding: 15px 32px;
        cursor: pointer;
        border-radius: 8px;
        display: inline;
        justify-content: center;
        align-items: center;
    }
</style>
<header class="resources mb-36">
    <div class="flex">
        <h1 class="text-5xl font-bold absolute right-12">STATISTICS</h1>
        <div class="flex">
                <a href="/"><img class="h-20 w-auto" src="{{ asset('images/logo_no.png') }}" alt="Logo"></a>
                <div class="block mt-4">
                    <a href="/" class="text-xl font-bold text-amber-800">UP SLIS LIBRARY<br></a>
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-bold text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-amber-600 md:me-0 dark:text-black" type="button">
                        {{ auth()->user()->name }}
                    </button>
                
                    <div id="dropdownAvatarName" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white dark:divide-slate-100">
                        <div class="px-4 py-3 text-sm text-white dark:text-black">
                            <div>Welcome</div>
                            <a href= "{{ route('profile.show') }}" class="font-bold truncate hover:text-amber-600">{{ auth()->user()->email }}</a>
                        </div>
                        <ul class="py-2 text-sm text-black dark:text-black" aria-labelledby="dropdownUserAvatarNameButton">
                            <li>
                                <a href= "{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Profile</a>
                            </li>
                            <li>
                                <a href= "/admin/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">Dashboard</a>
                            </li>
                        </ul>
                        <div class="py-2">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-200 dark:hover:text-black">
                                Log out
                            </button>
                        </form>
                        </div>
                    </div>
                </div> 
            </div>
</header>
<body class="">
    <div class="py-6" id="donut-chart"></div>
</body>
<script> // rendered w Flowbite
const getChartOptions = () => {
return {
    series: [@json($totalReqResources), @json($totalReqServices), @json($totalReservations)], // should convert to json
    colors: ["#f7da5b", "#e5c53f", "#c3a53f"],
    chart: {
      height: 480,
      width: "100%",
      type: "donut",
    },
    stroke: {
      colors: ["transparent"],
      lineCap: "",
    },
    plotOptions: {
      pie: {
        donut: {
          labels: {
            show: true,
            name: {
              show: true,
              fontFamily: "Inter, sans-serif",
              offsetY: 20,
            },
            total: {
              showAlways: true,
              show: true,
              label: "Total Requests",
              fontFamily: "Inter, sans-serif",
              formatter: function (w) {
                const sum = w.globals.seriesTotals.reduce((a, b) => {
                  return a + b
                }, 0)
                return sum
              },
            },
            value: {
              show: true,
              fontFamily: "Inter, sans-serif",
              offsetY: -20,
              formatter: function (value) {
                return value
              },
            },
          },
          size: "80%",
        },
      },
    },
    grid: {
      padding: {
        top: -2,
      },
    },
    labels: ["Resource Requests", "Service Requests", "Reservations"],
    dataLabels: {
      enabled: false,
    },
    legend: {
      position: "bottom",
      fontFamily: "Inter, sans-serif",
    },
    yaxis: {
      labels: {
        formatter: function (value) {
          return value
        },
      },
    },
    xaxis: {
      labels: {
        formatter: function (value) {
          return value
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
    },
  }
}

if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
  chart.render();
}
</script>
    <footer class="mt-20 text-center py-4 relative absolute -bottom-24" style='background-color: #fddc58'>
        <p class="mt-16 text-sm font-bold">UP School of Library and Information Science Studies Library</p>
        <p class="mb-8 text-sm">Temporary Location: 2nd Floor, College of Science Library Bldg., Velazquez St., UP Campus Diliman, Quezon City</p>
    </footer>
</html>