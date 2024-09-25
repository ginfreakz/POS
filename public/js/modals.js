document.addEventListener('DOMContentLoaded', () => {
    const modalTemplate = document.getElementById('modal-template');
    const modalContent = modalTemplate.querySelector('.modal-content');

    // Modal mapping object with new content for Modal 2
    const modalMapping = {
        modal1: `
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
                    <img src="https://via.placeholder.com/150" alt="Illustration" class="max-w-full h-auto">
                </div>
            </div>
        `,
        modal2: `
            <div class="text-center">
                <div class="bg-gray-800 text-white py-2 rounded-t-lg">
                    <h2 class="text-lg font-bold">Price Check</h2>
                </div>
                <div class="bg-white py-8 px-4 rounded-b-lg">
                    <input id="itemCodeInput" type="text" placeholder="Enter item code" class="border border-gray-300 w-full px-4 py-2 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500">
                </div>
            </div>
        `,
        modal3: `
            <div class="text-center">
                <div class="bg-gray-800 text-white py-2 rounded-t-lg">
                    <h2 class="text-lg font-bold">Information</h2>
                </div>
                <div class="bg-white py-8 px-4 rounded-b-lg">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/100x100?text=!" alt="Warning Icon" class="mx-auto">
                    </div>
                    <h2 class="text-xl font-semibold">Do you wish to flag this transaction?</h2>
                    <div class="mt-6 flex justify-center space-x-4">
                        <button id="disagreeButton" class="bg-red-500 text-white px-6 py-2 rounded-md">Disagree</button>
                        <button id="agreeButton" class="bg-gray-800 text-white px-6 py-2 rounded-md">Agree</button>
                    </div>
                </div>
            </div>
        `,
    };

    // Example items data (you can replace this with an API call or actual data)
    const itemsData = {
        "12345": {
            name: "TELUR AYAM NEGERI TBG",
            price: "Rp. 29.000",
            promotions: [
                "TES PWP ENERGEN, Rp 9.900 (SPM)",
                "TES PWP ENERGEN, Rp 9.900 (SPM)",
                "TES PWP ENERGEN, Rp 9.900 (SPM)",
                "TES PWP ENERGEN, Rp 9.900 (SPM)",
                "TES PWP ENERGEN, Rp 9.900 (SPM)",
                "TES PWP ENERGEN, Rp 9.900 (SPM)"
            ]
        },
        // Add more items as necessary
    };

    // Function to handle item code entry in modal2
    function handleItemCodeEntry(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            const itemCode = event.target.value.trim();
            if (itemCode) {
                displayItemDetails(itemCode);
            }
        }
    }

    // Function to display item details based on item code
    function displayItemDetails(itemCode) {
        const item = itemsData[itemCode];
        if (item) {
            const promotionsHTML = item.promotions.map(promo => `<li>${promo}</li>`).join('');
            modalContent.innerHTML = `
                <div class="bg-gray-800 text-white py-2 px-4 rounded-t-lg flex justify-between">
                    <div><h2 class="text-lg font-bold">Item Name</h2><p>${item.name}</p></div>
                    <div><h2 class="text-lg font-bold">Item Price</h2><p>${item.price}</p></div>
                </div>
                <div class="bg-white py-4 px-4 rounded-b-lg">
                    <h3 class="text-md font-semibold">Promotion Lists</h3>
                    <ul class="bg-gray-100 py-2 px-4 rounded-md">${promotionsHTML}</ul>
                    <div class="mt-4 text-center">
                        <p class="text-red-600">Press Enter to purchase this item</p>
                        <p class="text-red-600">Press C to close this popup</p>
                    </div>
                </div>
            `;
        } else {
            modalContent.innerHTML = `<p class="text-red-600">Item code not found. Please try again.</p>`;
        }
    }

    // Close modal functionality
    modalTemplate.querySelector('.close-modal').addEventListener('click', () => {
        modalTemplate.classList.add('hidden');
    });

    // Handle global keypress to open modals, but not when inside inputs
    document.addEventListener('keydown', (e) => {
        // Prevent triggering modal switches if the focus is on an input field
        if (document.activeElement.tagName === 'INPUT') return;

        if (e.key === '1') {
            modalContent.innerHTML = modalMapping['modal1'];
            modalTemplate.classList.remove('hidden');
        } else if (e.key === '2') {
            modalContent.innerHTML = modalMapping['modal2'];
            modalTemplate.classList.remove('hidden');
            const inputField = document.getElementById('itemCodeInput');
            inputField.addEventListener('keydown', handleItemCodeEntry);
        } else if (e.key === '3') {
            modalContent.innerHTML = modalMapping['modal3'];
            modalTemplate.classList.remove('hidden');
            document.getElementById('disagreeButton').addEventListener('click', () => {
                modalTemplate.classList.add('hidden');
            });
            document.getElementById('agreeButton').addEventListener('click', () => {
                cancelTransaction();
            });
        }
    });

    function cancelTransaction() {
        // Logic for cancelling the transaction
        console.log('Transaction cancelled');
        modalTemplate.classList.add('hidden'); // Close the modal
        // Redirect, show a message, or perform other actions
    }
});