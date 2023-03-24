<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Eco-Cyle</title>
</head>

<body class="body min-h-screen">

    <!-- HEADER -->
    <header class="bg-white text-green-900 sticky top-0 z-50 shadow-md rounded-2xl">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-extrabold font-['Poppins']">
                <div class="flex items-center hover:opacity-70">
                    <img src="../public/images/logo-icon.png" alt="" class="w-24">
                    <a href="" class=""><span class="text-green-500">Ec</span>o-Cyle</a>
                </div>
            </h1>
            <div>
                <button onclick="showHamburger()" class="text-3xl lg:hidden">
                    ☰
                </button>
                <nav class="hidden lg:block space-x-8 text-xl font-bold" aria-label="main">
                    <a href="" class="hover:opacity-70">Our Goal</a>
                    <a href="" class="hover:opacity-70">About Us</a>

                    <a href="">
                        <button class="p-2 pl-5 pr-5 border-2 bg-green-500 text-white text-xl rounded-xl transition-colors duration-700 transform hover:bg-green-700 hover:text-gray-100 focus:border-4 focus:border-green-300 border-b-8 border-green-900 hover:scale-105">System
                            Administrator</button>
                    </a>
                </nav>
            </div>
        </section>

        <section id="hamburger" class="bg-white w-full rounded-2xl shadow-md shadow-bottom-2xl -mt-5 absolute hidden text-center animate-reveal">
            <nav>
                <div class="">
                    <div class="text-green-900 px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-200">Home</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-200">Our
                            Goal</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-green-200">About
                            Us</a>
                        <a href="admin/admin-login-form.php">
                            <button class="p-2 pl-5 pr-5 border-2 bg-green-500 text-white font-bold rounded-xl transition-colors duration-700 transform hover:bg-green-700 hover:text-gray-100 focus:border-4 focus:border-green-300 border-b-8 border-green-900 hover:scale-105">System
                                Administrator</button>
                        </a>
                    </div>
                </div>
            </nav>
        </section>

    </header>

    <!-- END HEADER -->

    <main class="max-w-7xl mx-auto">
        <!-- START OF LANDING PAGE -->
        <section class="font-['Poppins'] p-6 ">
            <div class="">
                <div class="max-w-lg rounded-2xl overflow-hidden shadow-xl m-auto">
                    <img class="w-60 m-auto" src="../public/images/logo-icon.png" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-5 text-center text-green-900">Administrive Login Form</div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="username">
                                Username
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password" required>

                            
                        </div>

                    </div>
                    <div class="px-6 py-4">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag1</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#tag2</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#tag3</span>
                    </div>
                </div>

            </div>
        </section>
        <!-- END LANDING PAGE -->
    </main>

<!-- 
    <footer class="bg-gray-100 py-4 bottom-0 w-full rounded-2xl shadow-xl">
        <div class="container mx-auto text-center">
            <p class="text-gray-900 text-sm">© 2023 EcoCycle. All rights reserved.</p>
        </div>
    </footer> -->
    <script src="../src/hamburger.js"></script>
</body>

</html>