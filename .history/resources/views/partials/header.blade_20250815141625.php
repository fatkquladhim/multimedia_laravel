<header class="bg-white dark:bg-slate-800 shadow-sm p-4 md:p-6 glass-effect ">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <button id="mobileMenuToggle" class="md:hidden p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                                <i class="fas fa-bars text-xl"></i>
                            </button>
                            <button id="sidebarToggle" class="hidden md:block p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                                <i class="fas fa-bars text-xl"></i>
                            </button>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400"><?php echo date('l, d F Y'); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 md:space-x-4">
                            <button id="darkModeToggle" class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white focus:outline-none">
                                <i class="fas fa-moon text-xl dark:hidden"></i>
                                <i class="fas fa-sun text-xl hidden dark:block"></i>
                            </button>
                            <!-- <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white">
                                <i class="fas fa-bell text-xl"></i>
                            </button> -->
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center overflow-hidden">
                                    <img src="../../uploads/profiles/<?php echo $profile_photo; ?>" alt="Profile Photo" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div class="flex items-center space-x-2">
                                    <a href="../profile/profile_view.php" class="flex items-center space-x-1 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                        <span class="font-medium text-gray-800 dark:text-white"><?php echo $profile_name; ?></span>
                                        <i class="fas fa-chevron-down text-gray-600 dark:text-gray-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>