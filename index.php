<?php require "Fragments/head.php" ?>


    <script src="Script/Carousel.js" defer></script>
    <link rel="stylesheet" href="Style/index.css">

</head>
<body>
    <header>
        <div class="index background">
            <div class="index white"></div>
        </div>
        <div class="header background">
            <a class="header name_tag" href="index.php">
                <div class="header name_tag">
                    <img class="logo_img" src="Materiels/Logo/Logo_Numéri_Coloré.png">
                    <h1 class="logo_text">uméri</h1>
                </div>
            </a>
            <div class="header menu">
                <a href="qui-sommes-nous.php">Qui sommes-nous ?</a>
                <a href="Telechargement.php">Tarif/Téléchargement</a>
                <a href="Contact.php">Contact</a>
            </div>
        </div>
        <div class="header_content">
            <div class="header_text">
                <div>
                    <h1>LE FUTUR ENTRE</h1>
                    <h1>VOS MAINS !</h1>
                </div>
                <a href="Telechargement.php" class="button_link JoinUs">Rejoins nous >></a>
            </div>
            <img class="mockup_pc" src="Materiels/Mockups et Elements Graphiques/Laptop_mockup_01.png">
        </div>
    </header>
    <main>
        <div class="AboutUs content">
            <h1 class="AboutUs title">Ne te casse plus jamais la tête pour ton logo !</h1>
            <h2 class="AboutUs sub-title">Transforme tes dessins en logo avec <span class="AboutUs click">4</span> clicks !</h2>
            <span class="AboutUs separator"></span>
            <p class="AboutUs text"><span class="AboutUs numéri">Numéri</span> est un logiciel simple d’utilisation qui, grâce à une IA, transforme tes dessins en logos, icons voir même bannière. Derrière le logiciel, se cache une IA de dernière génération qui te fait gagner du temps. Il te suffit juste à dessiner ton logo et d’envoyer ton dessin dans le logiciel. Et la magie opère ! </p>
            <a class="button_link AboutUs" href="qui-sommes-nous.php">En savoir plus >></a>
        </div>
        <div class="carousel_div">
            <div class="carousel elements">
                <span></span>
                <span></span>
            </div>
            <div class="carousel content">
                <div class="carousel title">
                    <h1>Ils nous font confiance :</h1>
                </div>
                <div class="carousel frame">
                    <div class="items">
                        <div class="item active">
                            <img src="Materiels/Logo/ADBE.svg">
                        </div>
                        <div class=" item next">
                            <img src="Materiels/Logo/Canva_icon_2021.svg">
                        </div>
                        <div class="item">
                            <img src="Materiels/Logo/Figma-logo.svg">
                        </div>
                        <div class="item">
                            <img src="Materiels/Logo/Logo_French_Tech.png">
                        </div>                        
                        <div class="item prev">
                            <img src="Materiels/Logo/logo_MDS.png">
                        </div>
                        <div class="button-container">
                            <div class="button"><i class="fas fa-angle-left"></i></div>
                            <div class="button"><i class="fas fa-angle-right"></i></div>
                        </div>
	                </div>
                </div>
            </div>
        </div>
        <div class="promotion_div">
            <div class="promotion background"></div>
            <div class="promotion content">
                <div class="promotion text">
                    <h1>Deviens le pro de Numéri !</h1>
                    <h2>Viens essayer sa version <a href="Telechargement.php">gratuite ></a></h2>
                </div>
                <div class="promotion image">
                    <img src="Materiels/Mockups et Elements Graphiques/Numeri.png">
                </div>
            </div>
        </div>
    </main>
<?php require "Fragments/footer.php"?>