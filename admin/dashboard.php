<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eco-Cyle</title>
    <link rel="stylesheet" href="../dist/output.css">

    <script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">
</head>

<body class="body min-h-screen font-['Poppins']">
    <!-- THIS IS DASHBOARD -->
    <!-- HEADER -->
    <aside class="bg-green-900 text-white h-screen w-52 fixed hidden md:flex flex-col shadow-xl">
        <img src="../public/images/logo-icon.png" alt="" class="w-1/2 mx-auto mt-2">
        <ul class="flex flex-col items-center">
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    Dashboard
                </a>
            </li>
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    Account
                </a>
            </li>
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    User
                </a>
            </li>
            <li class="my-4">
                <a href="../index.html" class="text-gray-300 hover:text-white">
                    Home
                </a>
            </li>
        </ul>
    </aside>
    <!-- Main Content -->
    <main class="p-4">
        <!-- Header -->
        <header class="bg-green-900 p-4 rounded-2xl md:ml-52 shadow-lg">
            <section>
                <button onclick="showHamburger()" class="text-2xl md:hidden cursor-pointer text-white font-bold float-left">
                    ☰
                </button>

                <a href="/index.html" class="text-2xl md:hidden cursor-pointer text-white font-bold float-right">
                    🏠
                </a>
            </section>
            <h1 class="text-white font-bold text-xl text-center">Eco-Cyle Dashboard</h1>

            <section id="hamburger" class="bg-white w-full right-1 text-center rounded-2xl shadow-md shadow-bottom-2xl border border-gray-300 mt-7 absolute hidden">
                <nav>
                    <div class="">
                        <div class="text-green-900 px-2 pt-4 pb-3 space-y-1 sm:px-3">
                            <a href="#" class="block px-3 py-4 rounded-md text-base font-medium hover:bg-green-200">Home</a>
                            <a href="#" class="block px-3 py-4 rounded-md text-base font-medium hover:bg-green-200">Our
                                Goal</a>
                            <a href="#" class="block px-3 py-4 rounded-md text-base font-medium hover:bg-green-200">About
                                Us</a>
                            <a href="" class="py-4">
                                <button class="p-2 pl-5 pr-5 border-2 bg-green-500 text-white font-bold rounded-xl transition-colors duration-700 transform hover:bg-green-700 hover:text-gray-100 focus:border-4 focus:border-green-300 border-b-8 border-green-900 hover:scale-105">System
                                    Administrator</button>
                            </a>
                        </div>
                    </div>
                </nav>
            </section>
        </header>

        <!-- Content -->
        <section class="mt-4">
            <!-- Add your content here -->

            <!-- START CARD COUNT  -->
            <div class="flex flex-wrap md:ml-52">   
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 1 -->
                    <div class="bg-gradient-to-b from-green-500 to-green-300 shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-white font-extrabold mb-2">Plastic</h2>
                            <p class="text-white text-center"><span class="text-7xl text-white font-bold">42
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/plastic.png" alt="Plastic" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 2 -->
                    <div class="bg-gradient-to-b from-blue-500 to-blue-300 shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-white font-extrabold mb-2">Paper</h2>
                            <p class="text-white text-center"><span class="text-7xl text-white font-bold">50
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/paper.png" alt="Paper" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 3 -->
                    <div class="bg-gradient-to-b from-red-500 to-red-300 shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-white font-extrabold mb-2">Metal</h2>
                            <p class="text-white text-center"><span class="text-7xl text-white font-bold">65
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/metal.png" alt="Metal" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 4 -->
                    <div class="bg-gradient-to-b from-yellow-500 to-yellow-300 shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-white font-extrabold mb-2">Others</h2>
                            <p class="text-white text-center"><span class="text-7xl text-white font-bold">76
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/others.png" alt="Other" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CARD COUNT -->

            <!-- 2ND CARD CONTENT -->
            <div class="flex flex-wrap md:ml-52">
                <div class="w-full sm:w-full md:full lg:w-2/3 xl:w-2/3 p-4">
                    <!-- Left Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <!-- Left Card content goes here -->
                        <h1 class="text-4xl font-extrabold text-green-900 mb-4">Graph</h1>

                        <!-- graph CONTENT HERE -->

                        <h1 class="text-2xl mb-4 text-green-900 font-bold">Waste Types Distribution</h1>
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-500 rounded-md"></div>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="text-gray-700 font-semibold">Paper</div>
                                <div class="bg-blue-200 h-2 rounded-md mt-1">
                                    <div class="h-full w-3/4 bg-blue-500 rounded-md"></div>
                                </div>
                            </div>
                            <div class="ml-2 text-gray-600 font-semibold">75%</div>
                        </div>
                        <div class="flex items-center mt-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-500 rounded-md"></div>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="text-gray-700 font-semibold">Plastic</div>
                                <div class="bg-green-200 h-2 rounded-md mt-1">
                                    <div class="h-full w-2/3 bg-green-500 rounded-md"></div>
                                </div>
                            </div>
                            <div class="ml-2 text-gray-600 font-semibold">65%</div>
                        </div>
                        <div class="flex items-center mt-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-red-500 rounded-md"></div>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="text-gray-700 font-semibold">Metal</div>
                                <div class="bg-red-200 h-2 rounded-md mt-1">
                                    <div class="h-full w-1/2 bg-red-500 rounded-md"></div>
                                </div>
                            </div>
                            <div class="ml-2 text-gray-600 font-semibold">50%</div>
                        </div>
                        <div class="flex items-center mt-3">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-500 rounded-md"></div>
                            </div>
                            <div class="flex-grow ml-4">
                                <div class="text-gray-700 font-semibold">Others</div>
                                <div class="bg-yellow-200 h-2 rounded-md mt-1">
                                    <div class="h-full w-1/4 bg-yellow-500 rounded-md"></div>
                                </div>
                            </div>
                            <div class="ml-2 text-gray-600 font-semibold">25%</div>
                        </div>

                        <!-- END graph CONTENT -->

                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 p-4">
                    <!-- Right Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <!-- Right Card content goes here -->
                        <h1 class="text-4xl font-extrabold text-green-900 mb-4">Trashbin Monitoring</h1>

                        <!-- TRASHBIN MONITORING CONTENT -->

                        <!-- HTML Code -->
                        <div class="relative m-auto w-48 h-48">
                            <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gray-300"></div>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gradient-to-t from-green-500 to-green-700 transform origin-bottom "></div>
                            <div class="absolute top-0 left-0 w-full h-full rounded-full flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-white text-3xl font-bold">50%</div>
                                    <div class="text-white text-md">Capacity</div>
                                    <div class="text-white text-sm">Overall Trashbin</div>
                                </div>
                            </div>
                        </div>

                        <!-- CAPACITY PER CATEGORY -->
                        <div class="flex justify-center mt-7 gap-2">
                            <!-- SMALL CIRCLE -->
                            <div class="relative m-auto w-24 h-24">
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gray-300"></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gradient-to-t from-green-500 to-green-700 transform origin-bottom "></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-white text-xl font-bold">50%</div>
                                        <div class="text-white text-sm">Plastic</div>
                                    </div>
                                </div>
                            </div>


                            <div class="relative m-auto w-24 h-24">
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gray-300"></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gradient-to-t from-blue-500 to-blue-700 transform origin-bottom "></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-white text-xl font-bold">65%</div>
                                        <div class="text-white text-sm">Paper</div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative m-auto w-24 h-24">
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gray-300"></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gradient-to-t from-red-500 to-red-700 transform origin-bottom "></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-white text-xl font-bold">37%</div>
                                        <div class="text-white text-sm">Metal</div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative m-auto w-24 h-24">
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gray-300"></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full bg-gradient-to-t from-yellow-500 to-yellow-700 transform origin-bottom "></div>
                                <div class="absolute top-0 left-0 w-full h-full rounded-full flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-white text-xl font-bold">75%</div>
                                        <div class="text-white text-sm">Other</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-center mt-10 font-bold text-black text-2xl">Warning</h3>
                            <p class="text-center">
                                You have to ubos the basura in the trashbin
                            </p>
                        </div>

                        <!-- END TRASHBIN CONTENT -->

                    </div>
                </div>
            </div>
            <!-- END 2ND CARD CONTENT -->

        </section>
    </main>
    <script src="../src/hamburger.js"></script>
</body>

</html>