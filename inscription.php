<?php

require_once "libs/header.php";
?>


<section class="text-gray-600 body-font pt-50 flex justify-center">
    
    <div class="container flex flex-wrap items-center justify-center">
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-10 flex flex-col w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font text-center mb-5">Inscription</h2>
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Prénom</label>
                <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="first-name" class="leading-7 text-sm text-gray-600">Nom</label>
                <input type="text" id="first-name" name="first-name" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-600">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">S'inscrire</button>
            <p class="text-xs text-center text-gray-500 mt-3">Déjà un compte ? <a href="login.php" class="hover:text-black">Connectez-vous ici</a></p>
        </div>
    </div>
</section>

<?php
require_once "libs/footer.php";

?>