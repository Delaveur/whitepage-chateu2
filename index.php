<?php include 'inc/header.php'; ?>
  <!-- Hero Section -->
  <section class="relative h-screen bg-cover bg-center" style="background-image: url('/images/test.png')">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center p-4">
      <h1 class="text-5xl md:text-7xl font-bold text-white mb-4">Un héritage royal d'art et d'architecture</h1>
      <p class="text-xl md:text-2xl text-white mb-8">Découvrez la beauté du classicisme français, des jardins et de l'histoire</p>
      <button onclick="location.href='/preparer-ma-visite/informations-pratiques/'" class="bg-[#1B365D] hover:bg-[#142846] text-white px-6 py-3 rounded-2xl text-lg shadow-lg transition">Explorer</button>
    </div>
  </section>

  <!-- About Section -->
  <section class="max-w-5xl mx-auto py-16 px-4 text-center">
    <h2 class="text-4xl font-bold mb-6">À propos du domaine</h2>
    <p class="text-lg leading-relaxed">Ce magnifique domaine représente des siècles de réalisations artistiques, une grande architecture et des jardins époustouflants qui continuent d'inspirer les visiteurs du monde entier. Promenez-vous à travers l'histoire et découvrez la beauté intemporelle dans chaque détail.</p>
  </section>

  <!-- Example Section with Animated Overlay -->
  <section id="explorer" class="gradient-bg py-20 px-4 fade-in">
    <h1 class="text-5xl font-bold text-center mb-8 text-[#4b2c20]">Bienvenue dans un palais d'élégance</h1>
    <p class="text-center text-xl max-w-2xl mx-auto mb-12 text-[#5b3d2e]">Découvrez la beauté intemporelle, des jardins exquis et une architecture magnifique.</p>
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
      <a href="/galerie/" class="gold-hover rounded-2xl shadow-xl">
        <img src="/images/galerie.png" alt="Highlight 1" class="rounded-2xl w-full h-full object-cover">
        <div class="info-overlay rounded-2xl">
          <h3 class="text-2xl font-bold mb-2">La Galerie des Glaces</h3>
          <p>Explorez la célèbre galerie, symbole de la grandeur royale, où les miroirs reflètent la splendeur du palais.</p>
        </div>
      </a>
      <a href="/fontaines/" class="gold-hover rounded-2xl shadow-xl">
        <img src="/images/fontaines.png" alt="Highlight 2" class="rounded-2xl w-full h-full object-cover">
        <div class="info-overlay rounded-2xl">
          <h3 class="text-2xl font-bold mb-2">Les Jardins et Fontaines</h3>
          <p>Promenez-vous dans les jardins à la française, avec leurs fontaines majestueuses et leur paysage soigneusement conçu.</p>
        </div>
      </a>
      <a href="/opera/" class="gold-hover rounded-2xl shadow-xl">
        <img src="/images/opera.png" alt="Highlight 3" class="rounded-2xl w-full h-full object-cover">
        <div class="info-overlay rounded-2xl">
          <h3 class="text-2xl font-bold mb-2">L’Opéra Royal</h3>
          <p>Découvrez l'Opéra Royal, une merveille architecturale où l’art et la musique se rencontrent dans une atmosphère majestueuse.</p>
        </div>
      </a>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Galerie</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <img src="/images/1.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="/images/5.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="/images/2.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="/images/4.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="/images/6.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
      <img src="/images/3.png" alt="Gallery Image" class="rounded-2xl shadow-lg hover:scale-105 transition">
    </div>
  </section>

  <!-- Timeline Section -->
  <section class="bg-[#F4EDE4] py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-12">Chronologie historique</h2>
    <div class="relative max-w-4xl mx-auto border-l-4 border-[#C9A54D] pl-8">
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">1661</h3>
        <p>Début de la construction du grand domaine.</p>
      </div>
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">1682</h3>
        <p>Résidence officielle de la monarchie française établie.</p>
      </div>
      <div class="mb-10">
        <h3 class="text-2xl font-semibold">XIXe siècle</h3>
        <p>Efforts de restauration et ouverture au public.</p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Aujourd'hui</h3>
        <p>Un symbole du patrimoine culturel et de l'excellence architecturale.</p>
      </div>
    </div>
  </section>

  <!-- Architecture Details Section -->
  <section class="max-w-6xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Points forts architecturaux</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="relative group hover:cursor-pointer">
        <img src="/images/2-1.png" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
          <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Escalier Royal</h3>
            <p class="text-sm">Un symbole de l'élégance royale et d'un design raffiné.</p>
          </div>
        </div>
      </div>
      <div class="relative group hover:cursor-pointer">
        <img src="/images/2-2.png" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
          <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Jardins à la Française</h3>
            <p class="text-sm">Des aménagements paysagers minutieux et une beauté intemporelle.</p>
          </div>
        </div>
      </div>
      <div class="relative group hover:cursor-pointer">
        <img src="/images/2-3.png" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
          <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Salle des Gardes</h3>
            <p class="text-sm">Un hall historique où l'art et l'architecture se rencontrent.</p>
          </div>
        </div>
      </div>
      <div class="relative group hover:cursor-pointer">
        <img src="/images/2-4.png" alt="Architectural detail" class="rounded-2xl shadow-lg group-hover:opacity-80 transition">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition rounded-2xl flex items-end p-4">
          <div class="text-white">
            <h3 class="text-xl font-semibold mb-1">Fontaines Magnifiques</h3>
            <p class="text-sm">Des fontaines impressionnantes qui incarnent la beauté de l'architecture du jardin.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contacts" class="bg-[#f4ede4] py-16 px-4">
    <h2 class="text-4xl font-bold text-center mb-10">Contact</h2>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
      <div class="relative w-full h-full">
        <iframe src="https://maps.google.com/maps?q=15%20Rue%20du%20Général%20Leclerc,%2078000%20Versailles,%20France&t=&z=13&ie=UTF8&iwloc=&output=embed" class="w-full h-full min-h-[500px] rounded-2xl shadow-lg border-0"></iframe>
        <div class="absolute bottom-4 left-4 bg-white bg-opacity-90 rounded-xl p-4 shadow-lg">
          <p class="text-lg mb-1"><strong>Email:</strong> consultation@ittechservices.com</p>
          <p class="text-lg mb-1"><strong>Phone:</strong> +33 6 72 58 39 14</p>
          <p class="text-lg"><strong>Address:</strong> 15 Rue du Général Leclerc, 78000, Versailles, France</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col justify-center">
        <!-- Contact Form -->
        <form action="contact.php" method="POST">
          <div class="mb-4">
            <label for="lastName" class="block mb-2">Nom de famille</label>
            <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
          </div>
          <div class="mb-4">
            <label for="firstName" class="block mb-2">Prénom</label>
            <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
          </div>
          <div class="mb-4">
            <label for="message" class="block mb-2">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded-lg"></textarea>
          </div>
          <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">Envoyer</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Final Block -->
  <section class="relative h-72 bg-cover bg-center" style="background-image: url('final-background.jpg')">
    <div class="absolute inset-0 bg-gradient-to-r from-[#1b365d]/70 to-[#7c2d30]/70 flex justify-center items-center text-center p-4">
      <h2 class="text-4xl md:text-5xl font-bold text-white">Plus qu'un palais. Un mode de vie.</h2>
    </div>
  </section>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>