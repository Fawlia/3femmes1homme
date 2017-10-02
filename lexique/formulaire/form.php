<!DOCTYPE html> 

<html lang="fr"> 
    <head> 
        <meta charset="utf-8"/> 
        <meta name="language" content="fr">
        <meta property="og:title" content="Lexique html - Balise &lt;form&gt;">
        <meta property="og:type" content="Site web - Balises HTML5">
        <meta property="og:image" content="../images/html.png">
        <meta property="og:image:width" content="87">
        <meta property="og:image:height" content="120">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:url" content="https://magalih.promo-5.codeur.online/3femmes1homme/lexique/formulaire/form.php">
        <meta name="description" content="information sur la balise Balise &lt;form&gt; avec une courte description et exemple ">
        <meta name="keywords" content="HTML, form, Balise &lt;form&gt;, Description, Développement, tutoriel, exemple">
        <title>Lexique html - Balise &lt;form&gt;</title> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head> 

<body>
    <?php
        include '../header.php';
    ?>

    <main> 
        <h2>La balise &lt;form&gt; </h2>
            
         <!-- Description -->
         <section class="des">
            <h3>Description</h3>
                <p>L'élément HTML &lt;form&gt; représente une section d'un document qui contient des contrôles interactifs permettant à un utilisateur d'envoyer des données à un serveur web.</p>
         </section>   
        <!-- Attribut -->
        <section class="att">
            <h3>Attributs</h3>
                <p>2 attributs sont constament utilisés au sein de la balise &lt;form&gt;. L'attribut <strong>"action"</strong> à qui l'on donne une valeur de type "url" pour savoir où envoyer les infos récoltées dans le formulaire. L'attribut <strong>"method"</strong> détermine la manière avec laquelle on envoie ces informations soit avec la valeur "post", soit avec la valeur "get".  </p>
                <p>Les éléments les plus utilisés à l'intérieur d'un formulaire pour échanger explicitement des informations sont les suivant : </p>
                    <ul class="liste">
                        <li>&lt;button&gt;</li>
                        <li>&lt;input&gt; avec les différents types qui lui sont associés (submit, text, checkbox ...)</li>
                        <li>&lt;select&gt;</li>
                        <li>&lt;label&gt;</li>
                        <li>&lt;textarea&gt;</li>
                    </ul> 
        </section>
        <!-- Exemple -->
            
        <!-- Exemple code -->
        <section class="ex">
            <h3>Exemple</h3>
                <figure class="ecode">
                    <img src="../images/exemplecodeform.png" width="402" height="212" alt="exemple code form"/>
                    <figcaption>"Code écrit en utilisant la balise &lt;form&gt;"</figcaption>
                </figure>
                
        <!-- Exemple IRL -->            
                <figure class="eimg">
                    <img src="../images/exempleirlform.png" width="253" height="92" alt="resultat exemple form"/>
                    <figcaption>"Résultat réel de l'écriture du code avec la balise &lt;form&gt;"</figcaption>
                </figure>
        </section>
        
         
    </main>

</body> 
</html> 