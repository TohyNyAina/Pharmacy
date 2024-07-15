<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- ========================================================================NAVBAR================================================================================ -->
    <!-- Navbar -->
    <header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Navbar gauche -->
            <div class="flex items-center space-x-3">
                <img src="../../../../MVC-Pharmacie/assets/img/logo.jpg" alt="Samsung Logo" class="h-12">
                <p>Pharmacy</p>
                <a href="../../../../MVC-Pharmacie/View/client/medicament.php" class="text-gray-600 hover:text-gray-900">Boutique</a>
            </div>

            <!-- Navbar droite -->
            <div class="flex items-center space-x-3">
            
                <!--Bouton panier-->
                <a href="../../../../MVC-Pharmacie/View/client/panier.php" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                    </svg>
                </a>

                <!--Bouton Deconnexion-->
                <a href="../../../MVC-Pharmacie/Controller/utilisateurController.php?action=deconnecter" class="btn bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">
                    Deconnexion
                </a>
                
            </div>
        </div>
    </header> <br><br><br><br><br>

<!-- ========================================================================NAVBAR END================================================================================ -->    

<body class="bg-gray-100">
    <div>
        <h1 class="text-center text-3xl font-bold mb-5">Panier</h1>
    </div>
</body>

<!-- =====================================================================FOOTER========================================================================================= -->

<footer class="bg-green-900 py-12">
        <div class="container mx-auto px-6">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:order-2">
                    <a href="../../View//client/medicament.php" class="text-white hover:text-gray-900 mx-3">Boutique</a>
                </div>
                <div class="text-center md:text-right md:order-1">
                    <p class="text-white">Pharmacy &copy; 2024.Tous droits reservés.</p>
                </div>
            </div>
        </div>
    </footer>

<!-- =====================================================================FOOTER END===================================================================================== -->

</html>