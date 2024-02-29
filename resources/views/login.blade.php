<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- component -->
    <section class="flex flex-col md:flex-row h-screen items-center">
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="images/estate2.jpg" alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
            flex items-center justify-center">
            <div class="w-full h-100">
                <h1 class="text-[#EBC000] text-center text-xl md:text-2xl font-bold leading-tight mt-12">ACCOUNT'S LOGIN</h1>
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 mt-4 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="mt-6" action="{{Route('logins') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" name="loginemail" id="" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none" autofocus autocomplete>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="loginpassword" id="" placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none">
                    </div>

                    <button type="submit" class="w-full block bg-[#EBC000] hover:bg-[#EBC000] focus:bg-indigo-400
                        text-white font-semibold rounded-lg px-4 py-3 mt-6">Log In</button>
                </form>

                

                <hr class="my-6 border-gray-300 w-full">
                <p class="mt-8">You don't have an account? <a href="/registerr"
                        class="text-[#EBC000] hover:text-[#BF9C00] font-semibold">Register</a></p>
            </div>
        </div>
    </section>
</body>

</html>
