@extends("Layout.app")
@section("title","Services")
@section("content")

<!-- HERO -->
<section class="text-center py-24 bg-gradient-to-b from-gray-900 to-gray-950">
  <h2 class="text-5xl font-bold">
    Our <span class="text-blue-400">Services</span>
  </h2>

  <p class="mt-6 text-gray-400 max-w-2xl mx-auto">
    Everything you need to build, deploy, and scale modern applications on the cloud.
  </p>
</section>

<!-- SERVICES GRID -->
<section class="px-8 py-16">

  <div class="grid md:grid-cols-3 gap-8">

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">☁️ Cloud Hosting</h3>
      <p class="mt-3 text-gray-400">
        High-performance cloud hosting with instant deployment and zero downtime.
      </p>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">💾 Cloud Storage</h3>
      <p class="mt-3 text-gray-400">
        Secure and scalable storage for all your files and application data.
      </p>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">🔐 Security</h3>
      <p class="mt-3 text-gray-400">
        Enterprise-level security with encryption and firewall protection.
      </p>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">⚡ CDN Network</h3>
      <p class="mt-3 text-gray-400">
        Fast global content delivery for low-latency performance worldwide.
      </p>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">🔄 Backup System</h3>
      <p class="mt-3 text-gray-400">
        Automated backups to keep your data safe and recoverable anytime.
      </p>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:scale-105 transition">
      <h3 class="text-xl font-bold text-blue-400">📊 Monitoring</h3>
      <p class="mt-3 text-gray-400">
        Real-time analytics and monitoring for your applications and servers.
      </p>
    </div>

  </div>

</section>

@endsection