<?php include 'inc/header.php'; ?>
  <!-- Hero Section -->
  <section class="relative h-screen bg-cover bg-center" style="background-image: url('your-hero-image.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center p-4">
      <h1 class="text-5xl md:text-7xl font-bold text-white mb-4">A Royal Heritage of Art and Architecture</h1>
      <p class="text-xl md:text-2xl text-white mb-8">Discover the beauty of French classicism, gardens and history</p>
      <button class="bg-[#1B365D] hover:bg-[#142846] text-white px-6 py-3 rounded-2xl text-lg shadow-lg transition">Explore</button>
    </div>
  </section>

  <!-- About Section -->
  <section class="max-w-5xl mx-auto py-16 px-4 text-center">
    <h2 class="text-4xl font-bold mb-6">About the Estate</h2>
    <p class="text-lg leading-relaxed">This magnificent estate represents centuries of artistic achievement, grand architecture, and breathtaking gardens that continue to inspire visitors from around the world. Walk through history and experience timeless beauty in every detail.</p>
  </section>

  <!-- Gallery Section -->
  <section class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Gallery</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <img src="gallery1.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="gallery2.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="gallery3.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="gallery4.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="gallery5.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="gallery6.jpg" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="bg-[#F4EDE4] py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-12">Historical Timeline</h2>
    <div class="relative max-w-4xl mx-auto border-l-4 border-[#C9A54D] pl-8">
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">1661</h3>
        <p>Construction begins on the grand estate.</p>
      </div>
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">1682</h3>
        <p>Official residence of the French monarchy established.</p>
      </div>
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">19th century</h3>
        <p>Restoration efforts and public opening.</p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Today</h3>
        <p>A symbol of cultural heritage and architectural excellence.</p>
      </div>
    </div>
  </section>

    <!-- Architecture Details Section -->
    <section class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Architectural Highlights</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <a href="detail1.html" class="relative group">
        <img src="detail1.jpg" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
            <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Grand Staircase</h3>
            <p class="text-sm">A symbol of royal elegance and refined design.</p>
            </div>
        </div>
        </a>
        <a href="detail2.html" class="relative group">
        <img src="detail2.jpg" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
            <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Royal Gardens</h3>
            <p class="text-sm">Intricate landscaping and timeless beauty.</p>
            </div>
        </div>
        </a>
        <a href="detail3.html" class="relative group">
        <img src="detail3.jpg" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
            <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Hall of Mirrors</h3>
            <p class="text-sm">The iconic gallery shimmering with light.</p>
            </div>
        </div>
        </a>
        <a href="detail4.html" class="relative group">
        <img src="detail4.jpg" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
            <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Golden Gate</h3>
            <p class="text-sm">A majestic entrance crafted in gold.</p>
            </div>
        </div>
        </a>
    </div>
    </section>

  <!-- Contact Section -->
  <section class="bg-[#f4ede4] py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Contact</h2>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
      <iframe src="https://maps.google.com/maps?q=17%20Avenue%20des%20Jardins,%2078000,%20France&t=&z=13&ie=UTF8&iwloc=&output=embed" class="w-full h-96 rounded-2xl shadow-lg border-0"></iframe>
      <div class="bg-white rounded-2xl shadow-lg p-8">
        <form>
          <input type="text" placeholder="First Name" class="w-full p-3 border rounded-xl mb-4">
          <input type="text" placeholder="Last Name" class="w-full p-3 border rounded-xl mb-4">
          <input type="email" placeholder="Email" class="w-full p-3 border rounded-xl mb-4">
          <textarea placeholder="Message" class="w-full p-3 border rounded-xl mb-4 h-32"></textarea>
          <button class="bg-[#1B365D] hover:bg-[#142846] text-white px-6 py-3 rounded-2xl shadow-lg transition">Send</button>
        </form>
        <div class="mt-6">
          <p class="text-lg"><strong>Email:</strong> consultation@ittechservices.com</p>
          <p class="text-lg"><strong>Phone:</strong> +33 1 23 45 67 89</p>
          <p class="text-lg"><strong>Address:</strong> 17 Avenue des Jardins, 78000, France</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final Block -->
  <section class="relative h-72 bg-cover bg-center" style="background-image: url('final-background.jpg')">
    <div class="absolute inset-0 bg-gradient-to-r from-[#1b365d]/70 to-[#7c2d30]/70 flex justify-center items-center text-center p-4">
      <h2 class="text-4xl md:text-5xl font-bold text-white">More than a palace. A way of life.</h2>
    </div>
  </section>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>