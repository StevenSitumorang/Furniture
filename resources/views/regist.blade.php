<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.2/dist/daisyui.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Registration Form</title>
</head>
<body>
    <div class="p-4 max-w-xl mx-auto">
        <form class="bg-white shadow-md p-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Registration</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="fullName">
                    Full Name
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullName" type="text" name="fullName" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">
                    Username
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phoneNumber">
                    Phone Number
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phoneNumber" type="tel" name="phoneNumber" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
<input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="confirmPassword">
                    Confirm Password
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="confirmPassword" type="password" name="confirmPassword" required />
            </div>
            <div class="flex items-center justify-between">
                <div class="form-control">
                    <label class="cursor-pointer label">
                        <span class="label-text">I hereby declare that the above information provided is true and correct</span>
                        <input type="checkbox" class="checkbox checkbox-primary" required />
                    </label>
                </div>
                <center>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Register
                </button>
            </center>
            </div>
        </form>
    </div>
</body>
</html>