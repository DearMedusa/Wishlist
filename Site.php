<?php
	class Site{
    /**
     * methode publique statique headerHTML, acceptant un unique parametre correspondant * au titre de la page en cours de generation. Cette methode permet de generer tout * le code HTML allant de la declaration du Doctype a la balise ouvrante <body>.
     */

    public static function header(){
        echo <<<HEADER
            <!DOCTYPE HTML>
            <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <title>Consultation liste Utilisateurs</title>
                </head>
                <body>
                <h1>Utilisateur: </h1>
HEADER;
    }

    /**
     * methode publique statique footerHTML, n’acceptant aucun parametre, permettant de * generer la fin d’un document HTML (en commençant par la balise </body>).
     */
    public static function footer(){
        echo <<<FOOTER
                </body>
                </html>
FOOTER;
    }
}
?>
