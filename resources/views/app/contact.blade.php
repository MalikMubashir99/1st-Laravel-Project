@extends('Layout.app')
@section("title","Contact")

@section("content")

<!-- HERO -->
<section class="text-center py-24 bg-gradient-to-b from-gray-900 to-gray-950">
  <h2 class="text-5xl font-bold">
    Contact <span class="text-blue-400">Us</span>
  </h2>

  <p class="mt-6 text-gray-400 max-w-2xl mx-auto">
    Have questions? We’re here to help you build, scale, and grow with Cloud Verse.
  </p>
</section>

<!-- CONTACT SECTION -->
<section class="px-8 py-16">

  <div class="grid md:grid-cols-2 gap-12 items-start">

    <!-- CONTACT INFO -->
    <div>
      <h3 class="text-3xl font-bold text-blue-400">Get in Touch</h3>

      <p class="mt-4 text-gray-400 leading-relaxed">
        Reach out to our support team anytime. We usually respond within 24 hours.
      </p>

      <div class="mt-8 space-y-4 text-gray-300">

        <div class="flex items-center gap-3">
          <span class="text-blue-400">📍</span>
          <p>Karachi, Pakistan</p>
        </div>

        <div class="flex items-center gap-3">
          <span class="text-blue-400">📧</span>
          <p>support@cloudverse.com</p>
        </div>

        <div class="flex items-center gap-3">
          <span class="text-blue-400">📞</span>
          <p>+92 300 1234567</p>
        </div>

      </div>

      <div class="mt-8 p-6 bg-gray-900 border border-gray-800 rounded-2xl">
        <h4 class="text-blue-400 font-semibold">24/7 Support</h4>
        <p class="text-gray-400 mt-2">
          Our team is always available to help you with technical issues and setup.
        </p>
      </div>

    </div>

    <!-- FORM -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8">

      <h3 class="text-2xl font-bold mb-6">Send Message</h3>

      <form class="space-y-4">

        <input
          type="text"
          placeholder="Your Name"
          class="w-full p-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-blue-500"
        >

        <input
          type="email"
          placeholder="Your Email"
          class="w-full p-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-blue-500"
        >

        <textarea
          rows="5"
          placeholder="Your Message"
          class="w-full p-3 bg-gray-800 border border-gray-700 rounded-xl focus:outline-none focus:border-blue-500"
        ></textarea>

        <button
          type="submit"
          class="w-full bg-blue-500 hover:bg-blue-600 py-3 rounded-xl font-semibold"
        >
          Send Message
        </button>

      </form>

    </div>

  </div>

</section>

@endsection