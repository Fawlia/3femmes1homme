<!DOCTYPE html> 

<html lang="fr"> 
    <head> 
        <meta charset="utf-8"/>
        <meta name="language" content="fr">
        <meta property="og:title" content="Lexique html - Balise &lt;meta&gt;">
        <meta property="og:type" content="Site web - Balises HTML5">
        <meta property="og:image" content="../images/html.png">
        <meta property="og:image:width" content="87">
        <meta property="og:image:height" content="120">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:url" content="https://magalih.promo-5.codeur.online/3femmes1homme/lexique/structure/meta.php">
        <meta name="description" content="information sur la balise &lt;meta&gt; avec une courte description et exemple ">
        <meta name="keywords" content="HTML, Description, Développement, tutoriel, Métadonnée, exemple, méta, Balise &lt;meta&gt;">
        <title>Lexique html - Balise &lt;meta&gt;</title>
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head> 

<body>
    <?php
        include '../header.php';
    ?>

    <main> 

        <h2> Balise &lt;meta&gt; </h2>
        <section class="des"> 
            <h3> Description </h3>
                <p>Fournit des métadonnées sur la page courante. Ces informations sont traités par les navigateurs et moteurs de recherche. Elle est communément utilisé pour : fournir des informations sur la page; associé un ensemble de mots clés, préciser l'auteur... </p>
        </section>

        <section class="att">
            <h3> Attribut </h3> 
                <p> Les attributs Obligatoires : </p>
                <ul class="liste">  
                    <li> Charset : Déclare l'encodage utilisé par la page. </li>
                    <li> Content : Fournit la valeur associé avec l'attribut http_equiv ou l'attribut name suivant le contexte utilisé.</li>
                    <li> Http-equiv : Attribut pouvant prendre des valeurs pré-définies représente un objet pouvant modifier le comportement des serveurs ou des agents utilisateur. </li>
                    <li> Name : Définit le nom d'une métadonée au niveau du document. </li>
                </ul>
        </section>

        <section class="ex">       
            <h3> Exemples </h3> 
                <figure class="exemple"><img src="../images/meta.png" alt="Quelques ligne de code" width="647" height="163"/>
                <figcaption> Utilisation de la balise &lt;meta&gt;</figcaption></figure>
        </section>
    </main>

</body> 
</html> 