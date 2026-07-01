@extends("Layout.app")
@section("title","Index")
@section('content')
<!-- HERO SECTION -->
<section class="text-center px-6 py-28 bg-gradient-to-b from-blue-900 to-gray-950">
  <h2 class="text-5xl font-bold leading-tight">
    Welcome to <span class="text-blue-400">Cloud Verse</span>
  </h2>

  <p class="mt-6 text-gray-300 text-lg max-w-2xl mx-auto">
    Powerful, secure and scalable cloud hosting solutions built for developers, startups and modern businesses.
  </p>

  <div class="mt-8 flex justify-center gap-4">
    <button class="px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-xl font-semibold">
      Get Started
    </button>

    <button class="px-6 py-3 border border-gray-600 hover:border-white rounded-xl">
      Learn More
    </button>
  </div>
</section>

<!-- FEATURES -->
<section class="px-8 py-20 bg-gray-950">
  <h3 class="text-3xl font-bold text-center mb-12">Why Cloud Verse?</h3>

  <div class="grid md:grid-cols-3 gap-8">

    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800 hover:scale-105 transition">
      <h4 class="text-xl font-semibold text-blue-400">⚡ Fast Performance</h4>
      <p class="mt-3 text-gray-400">
        Lightning fast cloud infrastructure optimized for speed and reliability.
      </p>
    </div>

    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800 hover:scale-105 transition">
      <h4 class="text-xl font-semibold text-blue-400">🔒 Secure System</h4>
      <p class="mt-3 text-gray-400">
        Advanced security layers to keep your data protected 24/7.
      </p>
    </div>

    <div class="p-6 bg-gray-900 rounded-2xl border border-gray-800 hover:scale-105 transition">
      <h4 class="text-xl font-semibold text-blue-400">🌐 Global Access</h4>
      <p class="mt-3 text-gray-400">
        Deploy your apps worldwide with our global cloud network.
      </p>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="text-center py-20 bg-blue-950/40 border-t border-gray-800">
  <h3 class="text-3xl font-bold">Start building with Cloud Verse today</h3>
  <p class="text-gray-300 mt-3">No setup hassle. Just powerful cloud tools.</p>

  <button class="mt-6 px-8 py-3 bg-blue-500 hover:bg-blue-600 rounded-xl font-semibold">
    Join Now
  </button>
</section>

@endsection