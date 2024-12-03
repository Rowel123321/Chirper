<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Chirp Notification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="bg-gradient-to-r from-gray-900 to-gray-700 text-gray-300 py-10">
        <div class="max-w-md mx-auto bg-gray-800 rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-semibold text-white mb-4 flex items-center">
                🐦 <span class="ml-2">New Chirp from {{ $chirp->user->name }}</span>
            </h1>
            <p class="text-gray-400 mb-4 italic">
                "{{ Str::limit($chirp->message, 50) }}"
            </p>
            <a href="{{ url('/') }}" 
               class="block text-center text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-4 rounded-md">
                View Chirp
            </a>
        </div>
        <p class="text-center text-gray-400 text-sm mt-6">
            Thank you for staying connected with Chirper. 🐦
        </p>
    </div>
</body>
</html>
