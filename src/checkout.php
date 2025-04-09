<?php
    session_start();
    ob_start();
    require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RISOL ME!! - Checkout</title>
  <link href="./output.css" rel="stylesheet">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-white">
  <header class="py-4 px-6 border-b border-gray-200">
    <div class="text-orange-500 font-bold text-xl"><a href="landing.php">RISOL ME!!</a></div>
  </header>

  <main class="max-w-5xl mx-auto px-4">
    <!-- Progress Bar Section -->
    <div class="bg-gray-600 py-6 px-4 mb-8 flex items-center">
      <div class="bg-gray-400 rounded-full p-4 mr-4">
        <i class="fas fa-clipboard text-white"></i>
      </div>
      <div>
        <h2 class="text-white font-medium">Fill in Your Details</h2>
        <p class="text-gray-300 text-sm">Complete Checkout</p>
      </div>
    </div>

    <!-- Customer Information Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Customer Information</h2>
      <p class="text-gray-600 mb-6">Enter Your Personal Details</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-1">Full Name</label>
          <input type="text" placeholder="Enter your full name" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">Email Address</label>
          <input type="email" placeholder="Enter your email" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">Phone Number</label>
          <input type="tel" placeholder="Enter your phone number" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div class="md:flex justify-end items-end">
          <button class="bg-black text-white py-2 px-6 rounded w-full md:w-auto">Next</button>
        </div>
      </div>
    </div>

    <!-- Shipping Address Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Shipping Address</h2>
      <p class="text-gray-600 mb-6">Enter Your Shipping Details</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-1">Street Address</label>
          <input type="text" placeholder="Enter your street address" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">City</label>
          <input type="text" placeholder="Enter your city" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">State/Province</label>
          <input type="text" placeholder="Enter your state/province" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">Zip/Postal Code</label>
          <input type="text" placeholder="Enter your zip/postal code" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">Country</label>
          <input type="text" placeholder="Enter your country" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div class="md:flex justify-end items-end">
          <button class="bg-black text-white py-2 px-6 rounded w-full md:w-auto">Proceed to Payment</button>
        </div>
      </div>
    </div>

    <!-- Payment Information Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Payment Information</h2>
      <p class="text-gray-600 mb-6">Enter Your Payment Details</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium mb-1">Credit/Debit Card Number</label>
          <input type="text" placeholder="Enter your card number" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">Expiration Date</label>
          <input type="text" placeholder="MM/YY" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div>
          <label class="block text-sm font-medium mb-1">CVV</label>
          <input type="text" placeholder="Enter CVV" class="w-full p-2 border border-gray-300 rounded">
        </div>
        
        <div class="md:flex justify-end items-end gap-4">
          <button class="bg-white border border-gray-300 py-2 px-4 rounded">Save Payment Information</button>
          <button class="bg-black text-white py-2 px-6 rounded">Review Order</button>
        </div>
      </div>
    </div>

    <!-- Shipping Method Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Shipping Method</h2>
      <p class="text-gray-600 mb-6">Select Your Preferred Shipping Option</p>
      
      <div class="flex flex-col md:flex-row gap-6">
        <div class="md:w-1/3">
          <button class="bg-black text-white py-2 px-6 rounded w-full">Apply</button>
        </div>
        
        <div class="md:w-2/3">
          <div class="flex justify-between items-center p-3 border border-gray-200 rounded mb-3">
            <div>
              <div class="font-medium">Standard Shipping</div>
              <div class="text-sm text-gray-500">3-5 business days</div>
            </div>
            <div class="font-medium">10,000</div>
          </div>
          
          <div class="flex justify-between items-center p-3 border border-gray-200 rounded">
            <div>
              <div class="font-medium">Express Shipping</div>
              <div class="text-sm text-gray-500">1-2 business days</div>
            </div>
            <div class="font-medium">15,000</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Promotional Code Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Promotional Code</h2>
      <p class="text-gray-600 mb-6">Enter Your Discount Code</p>
      
      <div class="flex flex-col md:flex-row gap-6">
        <div class="md:w-1/3">
          <!-- Empty for alignment -->
        </div>
        
        <div class="md:w-2/3 flex gap-4">
          <input type="text" placeholder="Enter your code" class="flex-grow p-2 border border-gray-300 rounded">
          <button class="bg-black text-white py-2 px-6 rounded whitespace-nowrap">Apply Code</button>
        </div>
      </div>
    </div>

    <!-- Order Summary Section -->
    <div class="mb-10">
      <h2 class="text-2xl font-bold mb-2">Order Summary</h2>
      <p class="text-gray-600 mb-6">Review Your Order</p>
      
      <div class="flex flex-col md:flex-row gap-6">
        <div class="md:w-1/3">
          <button class="bg-black text-white py-2 px-6 rounded w-full mb-6">Place Order</button>
          
          <div class="space-y-4">
            <div class="flex items-center gap-3">
              <div class="bg-orange-100 p-2 rounded">
                <span class="text-orange-500">📦</span>
              </div>
              <span>Product Name</span>
              <span class="ml-auto">10,000</span>
            </div>
            
            <div class="flex items-center gap-3">
              <div class="bg-orange-100 p-2 rounded">
                <span class="text-orange-500">🚚</span>
              </div>
              <span>Shipping</span>
              <span class="ml-auto">5,000</span>
            </div>
            
            <div class="flex items-center gap-3">
              <div class="bg-orange-100 p-2 rounded">
                <span class="text-orange-500">💰</span>
              </div>
              <span>Total Amount Due</span>
              <span class="ml-auto font-bold">15,000</span>
            </div>
          </div>
        </div>
        
        <div class="md:w-2/3">
          <div class="rounded-lg overflow-hidden">
            <img src="../image/image9.png" alt="Risoles" class="w-full object-cover" />
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="py-6 px-4 border-t border-gray-200">
    <div class="max-w-5xl mx-auto">
      <div class="text-orange-500 font-bold text-xl mb-6">RISOL ME!!</div>
      
      <div class="flex gap-4">
        <a href="#" class="text-gray-500 hover:text-gray-700">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-700">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-700">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="#" class="text-gray-500 hover:text-gray-700">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </footer>
</body>
</html>