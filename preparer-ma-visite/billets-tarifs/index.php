<?php
$page_title = "Billets & Tarifs";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<section class="py-20 px-4 fade-in">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-bold mb-6 text-[#4b2c20]">Billets & Tarifs</h1>
        <p class="text-xl mb-10 text-[#5b3d2e]">Découvrez les différentes options de visite et choisissez celle qui vous convient le mieux.</p>
    </div>
    
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
        <div class="bg-[#f9f6f0] p-6 rounded-xl shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-[#4b2c20]">Billet Classique</h2>
            <p class="text-lg leading-8 text-justify">Accédez aux espaces emblématiques et profitez d’une découverte inoubliable.</p>
            <p class="text-lg leading-8 text-justify">Parcourez les grandes salles, admirez l’architecture somptueuse et plongez dans l’histoire.</p>
            <p class="text-lg leading-8 text-justify">Idéal pour une première visite et une immersion complète dans le patrimoine.</p>
            <p class="text-lg leading-8 text-justify">Une expérience libre, pour prendre le temps d’explorer à votre rythme.</p>
            <p class="text-lg leading-8 text-justify">Disponible tout au long de l’année avec différentes options de parcours.</p>
        </div>
        
        <div class="bg-[#f9f6f0] p-6 rounded-xl shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-[#4b2c20]">Visite Guidée</h2>
            <p class="text-lg leading-8 text-justify">Accompagné d’un guide expert, plongez dans les moindres détails du site.</p>
            <p class="text-lg leading-8 text-justify">Découvrez des anecdotes fascinantes et des accès privilégiés.</p>
            <p class="text-lg leading-8 text-justify">Une immersion enrichissante pour comprendre l’histoire et l’architecture.</p>
            <p class="text-lg leading-8 text-justify">Convient aux passionnés d’histoire et d’art souhaitant une approche approfondie.</p>
            <p class="text-lg leading-8 text-justify">Réservation recommandée pour garantir une place dans les créneaux disponibles.</p>
        </div>
    </div>
</section>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>