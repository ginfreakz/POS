<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <!-- Header with Logo -->
    <div class="bg-white shadow-md">
        <div class="max-w-screen-xl mx-auto flex items-center p-4">
            <div class="w-1/2">
                <div class="bg-gray-400 p-4 rounded-md">
                    <span class="text-white text-lg font-bold">LOGO</span>
                </div>
            </div>
            <div class="w-1/2 flex justify-end items-center space-x-4">
                <!-- Icons or actions can go here -->
                <button class="p-2 text-gray-600">
                    <i class="fas fa-search"></i> <!-- Icon 1 -->
                </button>
                <button class="p-2 text-gray-600">
                    <i class="fas fa-bell"></i> <!-- Icon 2 -->
                </button>
                <button class="p-2 text-gray-600">
                    <i class="fas fa-user"></i> <!-- Icon 3 -->
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-screen-xl mx-auto grid grid-cols-3 gap-4 py-8">
        <!-- Left Table Section -->
        <div class="col-span-2 bg-white rounded-lg shadow-lg p-4">
            <table class="min-w-full table-auto">
                <thead class="bg-yellow-400 text-white">
                    <tr>
                        <th class="px-4 py-2">ITEM</th>
                        <th class="px-4 py-2">ITEM NAME</th>
                        <th class="px-4 py-2">QTY</th>
                        <th class="px-4 py-2">UNIT PRICE</th>
                        <th class="px-4 py-2">DISCOUNT</th>
                        <th class="px-4 py-2">SUBTOTAL</th>
                        <th class="px-4 py-2">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100 text-center">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">TELUR AYAM NEGERI TBG</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">29,000</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">29,000</td>
                        <td class="px-4 py-2">-</td>
                    </tr>
                    <tr class="bg-gray-100 text-center">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">TEH BOTOL SOSRO 300ML</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">4,000</td>
                        <td class="px-4 py-2">2000</td>
                        <td class="px-4 py-2">10,000</td>
                        <td class="px-4 py-2">-</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Right Sidebar Section -->
        <div class="col-span-1 space-y-4">
            <!-- Voucher and Points Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <div class="text-center text-sm text-gray-500">
                    <p>-------- --------</p>
                    <p>Total Voucher: ----</p>
                    <p>Total Point: ----</p>
                    <p>Valid Till: ----</p>
                    <p>Member Type: ----</p>
                </div>
            </div>

            <!-- Suggested Promo Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h3 class="text-lg font-semibold">Suggested Promo</h3>
                <ul class="text-sm text-gray-500 mt-2">
                    <li>TES PWP ENERGEN Rp. 9.800 (SPM)</li>
                    <li>TES PWP ENERGEN Rp. 9.800 (SPM)</li>
                    <li>TES PWP ENERGEN Rp. 9.800 (SPM)</li>
                    <li>TES PWP ENERGEN Rp. 9.800 (SPM)</li>
                    <!-- More promo items -->
                </ul>
            </div>

            <!-- Purchase Summary Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h3 class="text-lg font-semibold">Purchase Summary</h3>
                <div class="mt-2 text-sm text-gray-500">
                    <p>Total: <span class="font-bold">Rp. 100,000.00</span></p>
                    <p>Paid: <span class="font-bold">Rp. 95,000.00</span></p>
                    <p>Discount: <span class="text-red-500 font-bold">Rp. 5,000.00</span></p>
                    <p>Unpaid: <span class="text-red-500 font-bold">Rp. 5,000.00</span></p>
                </div>
            </div>

            <!-- Till Code Input Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <label for="till_code" class="block text-sm font-medium text-gray-700">Input Till Code</label>
                <input type="text" id="till_code" class="mt-1 p-2 w-full border rounded-md focus:ring-yellow-500 focus:border-yellow-500">
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto py-8">
         <!-- Button to trigger modals -->
         <button data-modal="modal1" class="open-modal bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
            Open Modal 1
        </button>
        <button data-modal="modal2" class="open-modal bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Open Modal 2
        </button>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white w-full max-w-lg mx-auto rounded-lg shadow-lg relative p-8">
                <!-- Close button -->
                <button id="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                    &times;
                </button>

                <!-- Modal content -->
                <div class="flex">
                    <div class="w-1/2 pr-4">
                        <h2 class="text-lg font-bold text-orange-600">See you next time, KASIR YRI!</h2>
                        <form class="mt-4">
                            <div class="mb-4">
                                <label for="userId" class="block text-gray-700">User ID</label>
                                <input type="text" id="userId" value="171171" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password</label>
                                <input type="password" id="password" placeholder="Enter your password" class="mt-1 block w-full px-3 py-2 border border-red-500 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm">
                                <p class="text-red-500 text-sm mt-1">Please enter a password to unlock the screen and press Enter</p>
                            </div>
                        </form>
                    </div>
                    <div class="w-1/2 border-l pl-4 flex items-center justify-center">
                        <!-- Image or illustration -->
                        <img src="https://via.placeholder.com/150" alt="Illustration" class="max-w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openModalBtn = document.getElementById('openModal');
            const modal = document.getElementById('modal');
            const closeModalBtn = document.getElementById('closeModal');

            if (openModalBtn && modal && closeModalBtn) {
                openModalBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });

                closeModalBtn.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });
            }
        });
    </script>
    <style>
        
    </style>
</body>
</html>