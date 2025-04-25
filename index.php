<?php

require_once "libs/header.php";

?>

<!--Presentation-->
<section class="text-gray-600 body-font">
    <div class="container py-50 mx-auto flex-col flex-nowrap">
        <div class="lg:w-4/6 mx-auto ">
            <div class="rounded-lg  overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="asset\image\img_accueil.png">
            </div>
            <div class="flex flex-col sm:flex-row mt-10 shadow-lg shadow-green-400 justify-self-center">
                <div class=" prez">
                    <div class="w-40 h-10 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                        <img src="asset\image\logo1.png" alt="Logo Ecoride">
                    </div>
                    <div class="flex flex-col items-center text-center ">
                        <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Ecoride</h2>
                        <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
                        <p class="text-base">La solution écologique ET économique pour tous vos trajets.</p>
                    </div>
                </div>
                <div class=" sm:w-2/3 sm:pl-8  sm:border-l border-gray-200 sm:border-t-0 border-t sm:mt-0 text-center sm:text-left">
                    <p class="leading-relaxed text-lg mb-4">
                        Envie de voyager autrement ?<br> <br>Chez Ecoride, on croit qu’il est possible de se déplacer tout en respectant la planète. Notre plateforme de covoiturage met en relation conducteurs et passagers pour partager un trajet, réduire leur empreinte carbone et faire des économies, tout simplement.<br>
                        Que vous soyez conducteur avec des places disponibles ou passager à la recherche d’un trajet pratique et économique, Ecoride vous accompagne à chaque étape.<br><br>
                        🔍 Recherchez un trajet en quelques clics<br>
                        🚗 Réservez votre place grâce à un système de crédits simple et sécurisé<br>
                        🤝 Rencontrez des personnes qui partagent vos valeurs<br>
                </div>
            </div>
        </div>
    </div>
</section>

<!--SearchBar-->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Trouvez votre trajet dès maintenant avec Ecoride</h1>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
            <div class="relative flex-grow w-full">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Ville de départ</label>
                <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="leading-7 text-sm text-gray-600">Ville d'arrivée</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative flex-grow w-full">
                <label for="date" class="leading-7 text-sm text-gray-600">date</label>
                <input type="date" id="date" name="date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Rechercher</button>
        </div>
    </div>
</section>

<!--Galerie ville accessible par Ecoride-->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Visitez ces villes grace à Ecoride</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">De nouveaux trajets sont proposés régulièrement grace à notre grande communauté ! </p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\paris.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Paris</h1>
                        <p class="leading-relaxed">Une balade romantique à chaque coin de rue, entre monuments iconiques et terrasses ensoleillées</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\lille.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Lille</h1>
                        <p class="leading-relaxed">Un concentré de bonne humeur, de culture et d’authenticité dans le Nord au grand cœur.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\lyon.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Lyon</h1>
                        <p class="leading-relaxed">Un mélange parfait de gastronomie, patrimoine et douceur de vivre au bord des deux fleuves.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\nice.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Nice</h1>
                        <p class="leading-relaxed">Soleil, mer turquoise et palmiers… l’évasion méditerranéenne par excellence.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\strasbourg.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Strasbourg</h1>
                        <p class="leading-relaxed">Un souffle de tradition et de charme alsacien au fil des canaux.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="asset\image\toulouse.webp">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h1 class="title-font text-lg font-medium text-green-500 mb-3">Toulouse</h1>
                        <p class="leading-relaxed">Une ville chaleureuse au charme du Sud, entre briques roses et ambiance conviviale.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

require_once "libs/footer.php";

?>