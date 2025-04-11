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
  <title>RISOL ME!! - Order List</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-white">
  <div class="max-w-4xl mx-auto p-6">
    <!-- Header -->
    <header class="py-4 border-b border-gray-200">
        <a href="landing.php"><div class="text-orange-500 font-bold text-3xl">RISOL ME!!</div></a>
      </header>

    <!-- Order List Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold mb-6">Order List</h2>
      
      <div class="space-y-4">
        <!-- Order #001 -->
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
          <div class="flex items-center">
            <div class="mr-4 bg-orange-100 p-2 rounded">
              <span class="text-orange-500">📦</span>
            </div>
            <div>
              <div class="font-medium">Order #001</div>
              <div class="text-sm text-gray-500">Order date: 2022-10-14</div>
            </div>
          </div>
          <div class="font-medium">Total: $20</div>
        </div>
        
        <!-- Order #002 -->
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
          <div class="flex items-center">
            <div class="mr-4 bg-orange-100 p-2 rounded">
              <span class="text-orange-500">📦</span>
            </div>
            <div>
              <div class="font-medium">Order #002</div>
              <div class="text-sm text-gray-500">Order date: 2022-06-20</div>
            </div>
          </div>
          <div class="font-medium">Total: $30</div>
        </div>
        
        <!-- Order #003 -->
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
          <div class="flex items-center">
            <div class="mr-4 bg-orange-100 p-2 rounded">
              <span class="text-orange-500">📦</span>
            </div>
            <div>
              <div class="font-medium">Order #003</div>
              <div class="text-sm text-gray-500">Order date: 2022-08-12</div>
            </div>
          </div>
          <div class="font-medium">Total: $25</div>
        </div>
      </div>
    </section>
    
    <!-- Filter and Sort Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold mb-6">Filter and Sort Options</h2>
      
      <div class="space-y-4">
        <!-- Filter by Date -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-red-100 p-2 rounded">
            <span class="text-red-500">📅</span>
          </div>
          <a href="#"><div class="font-medium">Filter by Date</div></a>
        </div>
        
        <!-- Filter by Status -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-gray-100 p-2 rounded">
            <span class="text-gray-500">🛒</span>
          </div>
          <a href="#"><div class="font-medium">Filter by Status</div></a>
        </div>
        
        <!-- Sort by Total Amount -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-yellow-100 p-2 rounded">
            <span class="text-yellow-500">💰</span>
          </div>
          <a href="#"><div class="font-medium">Sort by Total Amount</div></a>
        </div>
      </div>
    </section>
    
    <!-- Order Details Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold mb-6">Order Details</h2>
      
      <div class="space-y-4">
        <!-- Shipping Address -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-blue-100 p-2 rounded">
            <span class="text-blue-500">🏠</span>
          </div>
          <a href="#"><div class="font-medium">Shipping Address</div></a>
        </div>
        
        <!-- Payment Method -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-gray-100 p-2 rounded">
            <span class="text-gray-500">💳</span>
          </div>
          <a href="#"><div class="font-medium">Payment Method</div></a>
        </div>
        
        <!-- Tracking Information -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-orange-100 p-2 rounded">
            <span class="text-orange-500">🚚</span>
          </div>
          <a href="#"><div class="font-medium">Tracking Information</div></a>
        </div>
        
        <!-- Reorder Items -->
        <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
          <div class="mr-4 bg-blue-100 p-2 rounded">
            <span class="text-blue-500">🔄</span>
          </div>
          <a href="#"><div class="font-medium">Reorder Items</div></a>
        </div>
      </div>
    </section>
    
    <!-- Customer Support Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold mb-6">Customer Support</h2>
      
      <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
        <div class="mr-4 bg-gray-100 p-2 rounded">
          <span class="text-gray-500">📞</span>
        </div>
        <a href="#"><div class="font-medium">Contact Customer Support</div></a>
      </div>
    </section>
    
    <!-- Return/Exchange Options Section -->
    <section class="mb-10">
      <h2 class="text-2xl font-bold mb-6">Return/Exchange Options</h2>
      
      <div class="flex items-center p-4 bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
        <div class="mr-4 bg-blue-100 p-2 rounded">
          <span class="text-blue-500">↩️</span>
        </div>
        <a href="#"><div class="font-medium">Initiate Return/Exchange</div></a>
      </div>
    </section>
  </div>

  <footer class="bg-white py-8 px-6 border-t border-blue-300">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="text-xl font-bold text-orange-500 mb-4 md:mb-0">
            RISOL ME!!
        </div>
        <div class="flex space-x-4">
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-500" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>
</body>
</html>