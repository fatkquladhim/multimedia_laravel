<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.1/build/qrcode.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <img src="{{ asset('image/rev-removebg-preview.png') }}" style="max-width:80px;">
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