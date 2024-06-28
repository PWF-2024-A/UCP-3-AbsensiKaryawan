<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles can be added here */
    </style>
</head>

<body class="bg-gray-100">
    <nav class="fixed z-10 flex items-center justify-between w-full bg-white shadow-lg md:p-4">
        <a href="#" class="text-lg font-semibold text-navy">
            <img src="images/logokali.png" alt="Your Logo" class="w-20 h-10 mr-2">
        </a>
        <div class="flex items-center space-x-6 md:space-x-10">
            <a href="#" class="text-navy hover:text-gray-800">Home</a>
            <a href="#features" class="text-navy hover:text-gray-800">Features</a>
            <a href="#about" class="text-navy hover:text-gray-800">About</a>
        </div>
        <div class="flex items-center space-x-6 md:space-x-10">
            <a href="{{ route('login') }}" class="text-navy hover:text-gray-800">Log in</a>
            <a href="{{ route('register') }}" class="text-navy hover:text-gray-800">Register</a>
        </div>
        <button id="menu-button" class="md:hidden text-navy">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>

    <section class="pt-24 bg-gray-100">
        <div class="container flex flex-col items-center justify-between px-4 mx-auto mt-10 md:flex-row">
            <div class="md:w-1/2">
                <h1 class="mb-6 text-4xl font-extrabold md:text-6xl text-navy">
                    Laravel Project<br>
                    Presence Lists
                </h1>
                <p class="mb-10 text-lg leading-7 text-gray-600">
                    Make it easy and provide high efficiency <br>
                    for your company in managing employee attendance lists.
                </p>
                <a href="#features" class="inline-block px-6 py-3 font-bold text-white bg-blue-600 rounded-full">Explore Features</a>
            </div>
            <div class="mt-6 md:w-1/2 md:mt-0">
                <img src="{{ asset('images/Home.png') }}" alt="Hero Image" class="w-full">
            </div>
        </div>
    </section>

    <section id="features" class="py-16 mt-24 pt-28">
        <div class="container px-4 mx-auto">
            <h2 class="mb-12 text-3xl font-bold text-center text-navy">Features Website</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/4">
                    <div class="h-full overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/Absensi.jpg') }}" class="object-cover w-full h-64" alt="Feature Image">
                        <div class="p-6">
                            <h3 class="mb-4 text-xl font-bold text-navy">Presence</h3>
                            <p class="text-base text-navy">
                                Admin can view attendance data from employees who have taken attendance,
                                while employees can take attendance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/4">
                    <div class="h-full overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/Karyawan.jpg') }}" class="object-cover w-full h-64" alt="Feature Image">
                        <div class="p-6">
                            <h3 class="mb-4 text-xl font-bold text-navy">Employee</h3>
                            <p class="text-base text-navy">
                                Admin can view employee data that has registered on the website,
                                and admins can update and delete employee data.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/4">
                    <div class="h-full overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/Divisi.jpg') }}" class="object-cover w-full h-64" alt="Feature Image">
                        <div class="p-6">
                            <h3 class="mb-4 text-xl font-bold text-navy">Division</h3>
                            <p class="text-base text-navy">
                                Admin can add division categories, change or edit these categories.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/4">
                    <div class="h-full overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('images/Report.jpg') }}" class="object-cover w-full h-64" alt="Feature Image">
                        <div class="p-6">
                            <h3 class="mb-4 text-xl font-bold text-navy">Report</h3>
                            <p class="text-base text-navy">
                                Admin can add division categories, change or edit these categories.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-24 pb-10 bg-white">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col items-center md:flex-row">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/About.jpg') }}" alt="About Image" class="w-full">
                </div>
                <div class="mt-6 md:w-1/2 md:pl-12 md:mt-0">
                    <h2 class="mb-6 text-3xl font-bold text-navy">About</h2>
                    <p class="mb-6 text-lg leading-7 text-navy">
                        We are a company specializing in information technology,
                        focusing on developing innovative employee attendance applications to improve your work efficiency.
                        With an experienced and dedicated team, we are committed to always providing the best solutions for our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 pt-24 bg-gray-100">
        <div class="container px-4 mx-auto">
            <h2 class="mb-12 text-3xl font-bold text-center text-navy">Meet Our Team</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/5">
                    <div class="h-full p-6 overflow-hidden text-center transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg cursor-pointer hover:scale-105">
                        <img src="{{ asset('images/panji.jpg') }}" alt="Team Member Image" class="mx-auto mb-4 rounded-full w-36 h-36">
                        <h2 class="text-xl font-bold text-navy">20210140007</h2>
                        <a href="#" class="font-bold text-gray-600">Muhammad Panji Al-Biruni</a>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/5">
                    <div class="h-full p-6 overflow-hidden text-center transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg cursor-pointer hover:scale-105">
                        <img src="{{ asset('images/aisyah.jpg') }}" alt="Team Member Image" class="mx-auto mb-4 rounded-full w-36 h-36">
                        <h2 class="text-xl font-bold text-navy">20210140061</h2>
                        <a href="#" class="font-bold text-gray-600">Aisah Atik Fitriani</a>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/5">
                    <div class="h-full p-6 overflow-hidden text-center transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg cursor-pointer hover:scale-105">
                        <img src="{{ asset('images/saras.jpg') }}" alt="Team Member Image" class="mx-auto mb-4 rounded-full w-36 h-36">
                        <h2 class="text-xl font-bold text-navy">20210140092</h2>
                        <a href="#" class="font-bold text-gray-600">Bagas Saras Budi Prastika</a>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/5">
                    <div class="h-full p-6 overflow-hidden text-center transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg cursor-pointer hover:scale-105">
                        <img src="{{ asset('images/hedar.jpg') }}" alt="Team Member Image" class="mx-auto mb-4 rounded-full w-36 h-36">
                        <h2 class="text-xl font-bold text-navy">20210140128</h2>
                        <a href="#" class="font-bold text-gray-600">Muhammad Khaidar Royani</a>
                    </div>
                </div>
                <div class="w-full px-4 mb-8 sm:w-1/2 lg:w-1/5">
                    <div class="h-full p-6 overflow-hidden text-center transition duration-300 ease-in-out transform bg-white rounded-lg shadow-lg cursor-pointer hover:scale-105">
                        <img src="{{ asset('images/reza.jpg') }}" alt="Team Member Image" class="mx-auto mb-4 rounded-full w-36 h-36">
                        <h2 class="text-xl font-bold text-navy">20210140137</h2>
                        <a href="#" class="font-bold text-gray-600">Muhammad Reza Riswandha</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Pilih semua elemen card menggunakan kelas Tailwind
        const cards = document.querySelectorAll('.transform');

        // Loop melalui setiap card dan tambahkan event listener untuk klik
        cards.forEach(card => {
            card.addEventListener('click', () => {
                // Contoh aksi setelah card diklik
                alert('You clicked a team member!');
            });
        });
    </script>

    <footer class="py-6 bg-gray-800">
        <div class="container px-4 mx-auto text-center">
            <p class="text-sm text-white">&copy; 2024 Tim SAR. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            const nav = document.querySelector('nav');
            nav.classList.toggle('open');
        });
    </script>
</body>

</html>
