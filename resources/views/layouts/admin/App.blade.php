<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-dashboard-Karatuna</title>
    @vite('resources/css/app.css','resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Sidebar hover effect */
    #sidebar a:hover {
        background-color: #3c399b; /* Indigo-500 */
        color: white;
        transition: background-color 0.3s ease;
    }

    #sidebar.hidden {
        display: none;
    }
    /* Radial progress bar */

    .radial-progress {
        display: inline-block;
        position: relative;
        width: var(--size);
        height: var(--size);
        border-radius: 50%;
        background: conic-gradient(var(--color) calc(var(--value) * 1%), #e5e7eb 0%);
        mask: radial-gradient(circle, transparent 70%, black 71%);
        -webkit-mask: radial-gradient(circle, transparent 70%, black 71%);
    }
    </style>
       <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            @php
                $names = explode(' ', Auth::user()->name);
                $initials = strtoupper(substr($names[0], 0, 1) . ($names[1] ?? '')[0] ?? '');
            @endphp

            @include('layouts.navigation')
            <!-- Dashboard Content -->
            <div class="overflow-y-auto">

            <main class="p-6 bg-gray-100 mb-11">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('layouts.admin.footer')
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Toggle sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            console.log('Toggle element clicked');

            document.getElementById('sidebar').classList.toggle('hidden');
        });

        // Example chart
        const ctx = document.getElementById('courseChart').getContext();
        const courseChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'],
            datasets: [{
                label: 'Nombre de cours',
                data: [5, 8, 6, 12, 9],
                backgroundColor: 'rgba(79, 70, 229, 0.2)', // Indigo-600
                borderColor: 'rgba(79, 70, 229, 1)', // Indigo-600
                borderWidth: 2,
                pointBackgroundColor: 'rgba(79, 70, 229, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(79, 70, 229, 1)'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>
</html>


