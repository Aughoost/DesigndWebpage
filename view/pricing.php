<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Inspection</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="finisher-header.es5.min.js" type="text/javascript"></script>
  
</head>
<body class="bg-gray-50 header finisher-header absolute inset-0 -z-10">
   

  <section class="max-w-4xl mx-auto py-12 px-4">

<h2 class="text-4xl font-extrabold text-gray-900 text-center">
        Book <span class="text-purple-600">Your Inspection</span>
      </h2>
  <!-- <h1 class="text-3xl text-white-600  text-center">Book Your Inspection</h1>
    -->
  
  <form id="inspectionForm" method="POST" action="../Checkout/checkout.php" class="space-y-8">
    

<section class="max-w-4xl mx-auto py-6 px-4"> <!-- reduced from py-12 to py-6 -->

    <!-- Step 1 -->
    <div class="flex items-start space-x-4 mb-4 bg-white p-6 rounded-lg shadow">
      <div class="flex-shrink-0">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-lg">1</div>
      </div>
      <div class="flex-1 space-y-3">
        <h2 class="text-xl font-semibold">Choose Inspection Type</h2>
        <select id="inspectionType" name="inspectionType" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="13" data-price="469.00">Full written report 1 bedroom ($469.00)</option>
          <option value="14" data-price="499.00">Full written report 2 bedrooms ($499.00)</option>
          <option value="15" data-price="525.00">Full written report 3 bedrooms ($525.00)</option>
          <option value="16" data-price="549.00">Full written report 4 bedrooms ($549.00)</option>
        </select>
      </div>
    </div>

    <!-- Step 2: Addons -->
   
<div class="flex flex-col mb-4 space-y-4 bg-white p-6 rounded-lg shadow">
  <div class="flex items-start space-x-4">
    <div class="flex-shrink-0">
      <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-lg">2</div>
    </div>
    <div class="flex-1 space-y-3">
      <h2 class="text-xl font-semibold">Select Addons</h2>

      <div class="space-y-3">
        <label class="block cursor-pointer">
          <input type="checkbox" name="addons[]" value="methTest" data-price="299.00" class="peer hidden">
          <div class="flex justify-between items-center p-4 border border-gray-300 rounded-lg hover:border-blue-500 transition peer-checked:border-blue-500 peer-checked:bg-blue-50">
            <span>Methamphetamine Test</span>
            <span>($299.00)</span>
          </div>
        </label>

        <label class="block cursor-pointer">
          <input type="checkbox" name="addons[]" value="urgentReport" data-price="225.00" class="peer hidden">
          <div class="flex justify-between items-center p-4 border border-gray-300 rounded-lg hover:border-blue-500 transition peer-checked:border-blue-500 peer-checked:bg-blue-50">
            <span>Urgent Report Fee</span>
            <span>($225.00)</span>
          </div>
        </label>

        <label class="block cursor-pointer">
          <input type="checkbox" name="addons[]" value="extraSleep" data-price="225.00" class="peer hidden">
          <div class="flex justify-between items-center p-4 border border-gray-300 rounded-lg hover:border-blue-500 transition peer-checked:border-blue-500 peer-checked:bg-blue-50">
            <span>Extra Sleep Out</span>
            <span>($225.00)</span>
          </div>
        </label>
      </div>

    </div>
  </div>
</div>



    <!-- Step 3: Personal Details -->
    <div class="flex items-start mb-4 space-x-4 bg-white p-6 rounded-lg shadow">
      <div class="flex-shrink-0">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-lg">3</div>
      </div>
      <div class="flex-1 space-y-3">
        <h2 class="text-xl font-semibold">Enter Your Details</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="name" placeholder="Full Name *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="text" name="company" placeholder="Company" class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="email" name="email" placeholder="Email *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="tel" name="phone" placeholder="Phone *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </div>

    <!-- Step 4: Inspection Address -->
    <div class="flex items-start mb-4 space-x-4 bg-white p-6 rounded-lg shadow">
      <div class="flex-shrink-0">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-lg">4</div>
      </div>
      <div class="flex-1 space-y-3">
        <h2 class="text-xl font-semibold">Enter Inspection Details</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="contactPerson" placeholder="Contact Person *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="tel" name="contactPhone" placeholder="Contact Phone *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="text" name="inspectionAddress" id="inspectionAddress" placeholder="Inspection Address *" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <input type="datetime-local" name="preferredDate" class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </div>

    <div class="flex items-start mb-4 space-x-4 bg-white p-6 rounded-lg shadow">
  <!-- Step number -->
  <div class="flex-shrink-0">
    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-lg">
      5
    </div>
  </div>

  <!-- Content -->
  <div class="flex-1 space-y-3">
    <h2 class="text-xl font-semibold">Choose Payment Method</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Bank Deposit -->
      <label class="relative cursor-pointer">
        <input type="radio" name="payment" value="bank" class="peer hidden" />
        <div
          class="border border-gray-300 rounded-lg p-4 flex justify-between items-center transition
                 hover:border-blue-400 peer-checked:border-blue-600 peer-checked:bg-blue-50">
          <span class="font-medium">Bank Deposit</span>
        </div>
      </label>

      <!-- Credit Card -->
      <label class="relative cursor-pointer">
        <input type="radio" name="payment" value="credit" class="peer hidden" />
        <div
          class="border border-gray-300 rounded-lg p-4 flex justify-between items-center transition
                 hover:border-blue-400 peer-checked:border-blue-600 peer-checked:bg-blue-50">
          <span class="font-medium">Credit Card</span>
        </div>
      </label>
    </div>
  </div>
</div>


    <!-- Totals -->
    <div class="bg-gray-800 text-white p-6 rounded-lg flex justify-between items-center">
      <div>
        <div>Subtotal: <span id="subtotalDisplay">$0.00</span></div>
        <div class="text-gray-400 text-sm">excl. GST: <span id="gstDisplay">$0.00</span></div>
      </div>
      <div class="text-2xl font-bold">Total: <span id="totalDisplay">$0.00</span></div>
    </div>

    <!-- Submit -->
<div class="mt-4 flex justify-center">
  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition transform hover:-translate-y-1 hover:scale-105">
    SUBMIT
  </button>
</div>

  </form>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const GST_RATE = 0.15;

  const inspectionSelect = document.getElementById('inspectionType');
  const addonCheckboxes = document.querySelectorAll('input[name="addons[]"][data-price]');
  const subtotalEl = document.getElementById('subtotalDisplay');
  const gstEl = document.getElementById('gstDisplay');
  const totalEl = document.getElementById('totalDisplay');

  const parsePrice = v => parseFloat(v) || 0;
  const formatMoney = n => '$' + n.toFixed(2);

  const getSelectedBasePrice = () => {
    const opt = inspectionSelect.options[inspectionSelect.selectedIndex];
    return parsePrice(opt?.dataset?.price);
  };

  const getAddonsTotal = () => {
    return Array.from(addonCheckboxes).reduce((sum, cb) => sum + (cb.checked ? parsePrice(cb.dataset.price) : 0), 0);
  };

  const updateTotals = () => {
    const base = getSelectedBasePrice();
    const addons = getAddonsTotal();
    const subtotal = base + addons;
    const gst = subtotal * GST_RATE;
    const total = subtotal + gst;

    subtotalEl.textContent = formatMoney(subtotal);
    gstEl.textContent = formatMoney(gst);
    totalEl.textContent = formatMoney(total);
  };

  // Listen for changes
  inspectionSelect.addEventListener('change', updateTotals);
  addonCheckboxes.forEach(cb => cb.addEventListener('change', updateTotals));

  // Initial calculation
  updateTotals();
  });
</script>

<!-- <script type="text/javascript">
new FinisherHeader({
  "count": 6,
  "size": {
    "min": 1100,
    "max": 1300,
    "pulse": 0
  },
  "speed": {
    "x": {
      "min": 0.1,
      "max": 0.3
    },
    "y": {
      "min": 0.1,
      "max": 0.3
    }
  },
  "colors": {
    "background": "#9138e5",
    "particles": [
      "#9696d1"
    ]
  },
  "blending": "overlay",
  "opacity": {
    "center": 1,
    "edge": 0.1
  },
  "skew": 0,
  "shapes": [
    "c"
  ]
});
</script> -->
<script type="text/javascript">
new FinisherHeader({
  "count": 6,
  "size": {
    "min": 1100,
    "max": 1300,
    "pulse": 0
  },
  "speed": {
    "x": { "min": 0.05, "max": 0.15 },
    "y": { "min": 0.05, "max": 0.15 }
  },
  "colors": {
    "background": "#f9fafb",
    "particles": ["#d1d5db","#cbd5e1","#e5e7eb"]
  },
  "blending": "normal",
  "opacity": { "center": 0.3, "edge": 0.05 },
  "skew": 0,
  "shapes": ["c"],
  "zIndex": -1  // makes sure it stays behind content
});
</script>

</body>
</html>
