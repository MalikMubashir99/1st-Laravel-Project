@extends('Layout.app')

@section("title","About")

@section("content")

<!-- HERO -->
<section class="text-center py-24 bg-gradient-to-b from-gray-900 to-gray-950">
  <h2 class="text-5xl font-bold">
    About <span class="text-blue-400">Cloud Verse</span>
  </h2>

  <p class="mt-6 text-gray-400 max-w-2xl mx-auto">
    We are building the future of cloud computing with simple, fast and scalable infrastructure for everyone.
  </p>
</section>

<!-- ABOUT CONTENT -->
<section class="px-8 py-16">
  <div class="grid md:grid-cols-2 gap-12 items-center">

    <!-- TEXT -->
    <div>
      <h3 class="text-3xl font-bold text-blue-400">Who We Are</h3>
      <p class="mt-4 text-gray-400 leading-relaxed">
        Cloud Verse is a modern cloud platform designed for developers, startups, and enterprises.
        Our goal is to make cloud hosting simple, affordable, and powerful without complexity.
      </p>

      <p class="mt-4 text-gray-400 leading-relaxed">
        From high-speed servers to global deployment, we ensure your applications run smoothly anywhere in the world.
      </p>
    </div>

    <!-- CARD -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8">
      <h4 class="text-xl font-semibold text-blue-400">Our Mission</h4>
      <p class="mt-4 text-gray-400">
        To empower developers and businesses with next-generation cloud tools that are fast, secure, and scalable.
      </p>

      <div class="mt-6 grid grid-cols-2 gap-4 text-center">
        <div class="p-4 bg-gray-800 rounded-xl">
          <p class="text-2xl font-bold text-blue-400">99.9%</p>
          <p class="text-gray-400 text-sm">Uptime</p>
        </div>

        <div class="p-4 bg-gray-800 rounded-xl">
          <p class="text-2xl font-bold text-blue-400">24/7</p>
          <p class="text-gray-400 text-sm">Support</p>
        </div>

        <div class="p-4 bg-gray-800 rounded-xl">
          <p class="text-2xl font-bold text-blue-400">50+</p>
          <p class="text-gray-400 text-sm">Servers</p>
        </div>

        <div class="p-4 bg-gray-800 rounded-xl">
          <p class="text-2xl font-bold text-blue-400">Global</p>
          <p class="text-gray-400 text-sm">Reach</p>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection