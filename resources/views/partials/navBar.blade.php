<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .dropdown-menu {
                right: 0;
                left: auto;
            }
        }
        .custom-dropdown:hover .dropdown-menu {
            display: block;
        }
        .user-menu {
            position: relative;
            display: inline-block;
        }
        .user-menu .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 1;
            transition: opacity 0.3s ease, transform 0.3s ease;
            opacity: 0;
            transform: translateY(-10px);
        }
        .user-menu:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        .user-menu a {
            display: flex;
            align-items: center;
        }
        .user-menu img {
            border-radius: 50%;
            margin-right: 8px;
        }
        .user-menu .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container-fluid p-4 bg-white shadow-sm">
        <div class="d-flex justify-content-between align-items-center">
            <div class="font-bold text-lg">
                <h1 class="text-2xl font-extrabold text-blue-600 cursor-pointer" onclick="window.location.href='/'">Task Manager</h1>
            </div>
            <ul class="d-flex align-items-center mb-3 md:mb-0 list-unstyled">
                <li class="position-relative pr-5">
                  
                    <div class="dropdown-menu dropdown-menu-right w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-xl dark:bg-gray-800 dark:divide-gray-700 z-20 overflow-y-scroll">
                        <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">Notifications</div>
                        <div class="divide-y divide-gray-100 dark:divide-gray-700">
                            <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="w-full pl-3">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                        <span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span>
                                        mentioned you in a comment: <span class="font-medium text-blue-500" href="#">@bonnie.green</span> what do you say?
                                    </div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                            <div class="inline-flex items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                </svg>
                                View all
                            </div>
                        </a>
                    </div>
                </li>
                <li class="user-menu md:mr-5 py-2 md:py-0">
                    <a href="#" class="text-gray-900 dark:text-white">
                        {{ Auth::user()->name }}
                        <img src="path/to/profile/image.jpg" alt="User Avatar" class="w-8 h-8">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right w-full max-w-xs bg-white divide-y divide-gray-100 rounded-lg shadow-xl dark:bg-gray-800 dark:divide-gray-700 z-20 mt-2">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="w-full text-left block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700" type="submit">Se déconnecter</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
