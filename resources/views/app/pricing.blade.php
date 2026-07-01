@extends("Layout.app")
@section("title","Pricing")
@section("content")
<!-- HERO -->
<section class="text-center py-24 bg-gradient-to-b from-gray-900 to-gray-950">
  <h2 class="text-5xl font-bold">
    Simple <span class="text-blue-400">Pricing</span>
  </h2>

  <p class="mt-6 text-gray-400 max-w-2xl mx-auto">
    Choose the perfect plan for your cloud needs. No hidden charges, cancel anytime.
  </p>
</section>

<!-- PRICING CARDS -->
<section class="px-8 py-16">

  <div class="grid md:grid-cols-3 gap-8">

    <!-- BASIC -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 text-center hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">Basic</h3>
      <p class="text-gray-400 mt-2">For small projects</p>

      <h2 class="text-4xl font-bold mt-6">$10</h2>
      <p class="text-gray-500">/ month</p>

      <ul class="mt-6 space-y-2 text-gray-400">
        <li>✔ 1 Website</li>
        <li>✔ 20GB Storage</li>
        <li>✔ Basic Support</li>
      </ul>

      <button class="mt-6 px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-xl font-semibold">
        Choose Plan
      </button>
    </div>

    <!-- STANDARD (HIGHLIGHTED) -->
    <div class="bg-blue-600/10 border border-blue-500 rounded-2xl p-8 text-center hover:scale-105 transition relative">

      <div class="absolute top-4 right-4 bg-blue-500 text-xs px-3 py-1 rounded-full">
        Popular
      </div>

      <h3 class="text-xl font-bold text-blue-400">Standard</h3>
      <p class="text-gray-400 mt-2">Best for startups</p>

      <h2 class="text-4xl font-bold mt-6">$25</h2>
      <p class="text-gray-500">/ month</p>

      <ul class="mt-6 space-y-2 text-gray-300">
        <li>✔ 10 Websites</li>
        <li>✔ 100GB Storage</li>
        <li>✔ Priority Support</li>
      </ul>

      <button class="mt-6 px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-xl font-semibold">
        Choose Plan
      </button>
    </div>

    <!-- PREMIUM -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 text-center hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">Premium</h3>
      <p class="text-gray-400 mt-2">For large businesses</p>

      <h2 class="text-4xl font-bold mt-6">$50</h2>
      <p class="text-gray-500">/ month</p>

      <ul class="mt-6 space-y-2 text-gray-400">
        <li>✔ Unlimited Websites</li>
        <li>✔ 500GB Storage</li>
        <li>✔ 24/7 Support</li>
      </ul>

      <button class="mt-6 px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-xl font-semibold">
        Choose Plan
      </button>
    </div>

  </div>

</section>

@endsection