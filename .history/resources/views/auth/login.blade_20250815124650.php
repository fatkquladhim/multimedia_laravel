<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.1/build/qrcode.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .float-1 {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .float-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .float-3 {
            width: 80px;
            height: 80px;
            bottom: 15%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) scale(1);
                opacity: 0.3;
            }

            50% {
                transform: translateY(-20px) scale(1.05);
                opacity: 0.6;
            }
        }

        .glass-input {
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(147, 197, 253, 0.3);
            backdrop-filter: blur(10px);
        }

        .glass-input:focus {
            background: rgba(59, 130, 246, 0.3);
            border-color: rgba(147, 197, 253, 0.5);
            box-shadow: 0 0 0 2px rgba(147, 197, 253, 0.3);
        }

        .login-btn {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .glass-header {
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.9) 0%, rgba(59, 130, 246, 0.9) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .glass-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }
    </style>
</head>


<body class="min-h-screen bg-gradient-to-br from-blue-600 via-blue-500 to-blue-300 flex flex-col min-h-screen">
    <div class="floating-element float-1"></div>
    <div class="floating-element float-2"></div>
    <div class="floating-element float-3"></div>
    <div class="flex flex-1 flex-col items-center justify-center">
        <main class="w-full max-w-xs sm:max-w-sm md:max-w-md p-2 sm:p-0" style="transform:scale(0.95);" >
            <!-- Profile Picture -->
            <div class="flex justify-center mb-8">
                <div>
                    <img src="../public/assets/imgs/rev-removebg-preview.png" style="max-width:80px;">
                </div>
            </div>
            <!-- Login Form -->
            <form method="post" class="space-y-6">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="Username"
                        class="glass-input w-full pl-12 pr-4 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200"
                        required />
                </div>
                <!-- Password Field -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        class="glass-input w-full pl-12 pr-12 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200"
                        required />
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-4 flex items-center text-blue-300 hover:text-blue-100 focus:outline-none" tabindex="-1">
                        <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-9 0a9 9 0 0118 0c-1.5 4-6 7-9 7s-7.5-3-9-7z" />
                        </svg>
                    </button>
                </div>
                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        
                        <span class="text-blue-100" id="rememberMeLabel">lihat username</span>
                    </label>
                    <a href="#" class="text-blue-100 hover:text-white transition-colors duration-200">
                        Forgot Password?
                    </a>
                    <!-- Modal Username List -->
                    <div id="usernameModal" class="fixed inset-0 z-50 flex items-center justify-center  hidden">
                        <div class="bg-white rounded-lg shadow-lg w-full max-w-xs p-6 relative animate-fade-in">
                            <button id="closeUsernameModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
                            <h2 class="text-lg font-bold mb-4 text-gray-800">Pilih Username</h2>
                            <ul id="usernameList" class="space-y-2 max-h-60 overflow-y-auto">
                                <?php
                                $conn_userlist = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                if (!$conn_userlist->connect_error) {
                                    $res_userlist = $conn_userlist->query("SELECT username FROM users ORDER BY username ASC");
                                    while ($u = $res_userlist->fetch_assoc()) {
                                        echo '<li><button type="button" class="select-username w-full text-left px-3 py-2 rounded hover:bg-blue-100 text-gray-700" data-username="'.htmlspecialchars($u['username']).'">'.htmlspecialchars($u['username']).'</button></li>';
                                    }
                                    $res_userlist->close();
                                }
                                $conn_userlist->close();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Login Button -->
                <button
                    type="submit"
                    class="login-btn w-full py-2 font-semibold rounded-full focus:outline-none glass-header px-6 py-4 text-white relative z-10">
                    LOGIN
                </button>
            </form>
        </main>
    </div>
    <footer class="flex flex-col items-center justify-center mt-8 mb-4">
        <p class="text-white font-bold text-lg">
            Powered by <span class="text-blue-800">Media Tech Annur2Almurtadlo</span>
        </p>
        <p class="text-blue-100 text-sm mt-1">
            Versi Web: <?php
                $version = '2.0.0';
                $versionFile = __DIR__ . '/../VERSION';
                if (file_exists($versionFile)) {
                    $version = trim(file_get_contents($versionFile));
                }
                echo htmlspecialchars($version);
            ?>
        </p>
    </footer>
</body>

<script>
    // Username modal logic
    document.addEventListener('DOMContentLoaded', function() {
        const rememberMeLabel = document.getElementById('rememberMeLabel');
        const usernameModal = document.getElementById('usernameModal');
        const closeUsernameModal = document.getElementById('closeUsernameModal');
        const usernameList = document.getElementById('usernameList');
        const usernameInput = document.getElementById('username');
        if (rememberMeLabel && usernameModal && closeUsernameModal && usernameList && usernameInput) {
            rememberMeLabel.addEventListener('click', function(e) {
                e.preventDefault();
                usernameModal.classList.remove('hidden');
            });
            closeUsernameModal.addEventListener('click', function() {
                usernameModal.classList.add('hidden');
            });
            usernameModal.addEventListener('click', function(e) {
                if (e.target === usernameModal) usernameModal.classList.add('hidden');
            });
            usernameList.querySelectorAll('.select-username').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    usernameInput.value = this.dataset.username;
                    usernameModal.classList.add('hidden');
                });
            });
        }
    });
    // Toggle show/hide password
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');
        let show = false;
        togglePassword.addEventListener('click', function() {
            show = !show;
            passwordInput.type = show ? 'text' : 'password';
            eyeIcon.innerHTML = show
                ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.978 9.978 0 012.042-3.362m1.528-1.68A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.973 9.973 0 01-4.293 5.032M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />'
                : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
        });
    });
</script>
</html>