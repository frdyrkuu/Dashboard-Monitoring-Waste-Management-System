<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eco-Cyle</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/style.css">
</head>

<body class="body min-h-screen bg-gray-100 font-['Poppins']">
    <!-- HEADER -->
    <aside class="bg-green-900 text-white h-screen w-52 fixed hidden md:flex flex-col items-center justify-center">
        <img src="../public/images/logo-icon.png" alt="" class="w-1/2">
        <ul class="flex flex-col items-center">
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    <i class="fa fa-home"> Dashboard</i>
                </a>
            </li>
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    <i class="fas fa-chart-bar"> Account</i>
                </a>
            </li>
            <li class="my-4">
                <a href="#" class="text-gray-300 hover:text-white">
                    <i class="fas fa-users"> Users</i>
                </a>
            </li>
            <li class="my-4">
                <a href="../index.html" class="text-gray-300 hover:text-white">
                    <i class="fas fa-cog"> AHAHA</i>
                </a>
            </li>
        </ul>
    </aside>
    <!-- Main Content -->
    <main class="p-4">
        <!-- Header -->
        <header class="bg-white p-4 rounded-2xl md:ml-52 shadow-lg">
            <h1 class="text-gray-800 font-bold text-xl text-center">Eco-Cyle Dashboard</h1>
        </header>
        <!-- Content -->
        <section class="mt-4">
            <!-- Add your content here -->

            <!-- START CARD COUNT  -->
            <div class="flex flex-wrap md:ml-52">
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-green-900 font-extrabold mb-2">Plastic</h2>
                            <p class="text-gray-700 text-center"><span class="text-7xl text-green-700 font-bold">42
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/plastic.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 2 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-green-900 font-extrabold mb-2">Paper</h2>
                            <p class="text-gray-700 text-center"><span class="text-7xl text-green-700 font-bold">50
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/paper.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 3 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-green-900 font-extrabold mb-2">Metal</h2>
                            <p class="text-gray-700 text-center"><span class="text-7xl text-green-700 font-bold">65
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/metal.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/4 p-4">
                    <!-- Card 4 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x w-full">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-4xl text-green-900 font-extrabold mb-2">Others</h2>
                            <p class="text-gray-700 text-center"><span class="text-7xl text-green-700 font-bold">76
                                </span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="../public/images/other.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
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
                        <h1 class="text-4xl font-extrabold text-green-900 mb-4">Chart</h1>
                        <p class="text-gray-600">Left Card content goes here</p>
                        <p class="text-gray-600">Left Card content goes here</p>
                        <p class="text-gray-600">Left Card content goes here</p>
                    </div>
                </div>
                <div class="w-full sm:w-full md:w-full lg:w-1/3 xl:w-1/3 p-4">
                    <!-- Right Card -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <!-- Right Card content goes here -->
                        <h1 class="text-4xl font-extrabold text-green-900 mb-4">Trashbin Monitoring</h1>

                    </div>
                </div>
            </div>
            <!-- END 2ND CARD CONTENT -->

        </section>
    </main>

</body>

</html>