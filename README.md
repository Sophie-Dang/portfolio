# Composer + Webpack-npm-windows-10
1- Telecharge Xammp Apache + MariaDB + PHP + Perl https://www.apachefriends.org/fr/index.html
    (Une fois ouvert l'aplication on dois active Apache et MySQL pour demarer un server virtuelle, sache que le dosier Localhost se truve a l'interieur de dosier d'installation par defaut C:\xampp\htdocs Vous pouver creer un dosier dedans pour acceder avec localhost/votredosier)

2- Telecharge git https://git-scm.com/ (sur la partie choising de default editor on coche la 4eme use Visual Studio Code as Git default editor, puis on laisse le reste par defaut) Important d'installe git dans le meme disque que visual studio par defaut C:

3- Telecharge Composer for Windows - https://getcomposer.org/download/  Composer-Setup.exe
   Puis execute Composer.exe et suivre les instructions (cocher dev-mode, une fois demande php on le trouve sur C:\xampp\php\php.exe on ne met pas de proxy).

4- Telecharge https://nodejs.org/en/ (la version 12.16.1 c'est la seul que a functioné en rolation a la version de mes projets) 
 Une fois demande si on veux installe les outil necesaire on coche. Une fois le terminal semi-transparent s'ouvre on click sur une touche pour demarer l'instalation d'extra pas space pas enter. saché que a la fin de l'install Visual studio ... reste coince apres 10 min on clique sur T puis nous dit de Enter for exit.

5- Telecharge webpack https://github.com/o-clock-wave/WP-modele-webpack
on l'ouvre avec Visual Studio puis on va configurer le terminal avec lequelle on va travaillé. on coche sur la partie droite power shell puis on clique sur selectione le shell par defaut puis on clique sur Git Bash, on suprime les terminaux ouvert puis on ouvre un nouveau et selui est le terminal git. 

5.1- Sur package.json dans la ligne 5 on change export pour set il doi reste comme ça
"start": "set NODE_ENV=watch && webpack-dev-server --progress --colors --watch --config webpack.config.dev.js", 

faire un npm run start et change sur chrome 0.0.0.0:3000 pour localhost:3000 (si cuand on fait npm run start marche pas il faut suprime node_module et refaire npm install puis ça dois marcher)




# Installation de WordPress avec Composer
1. Renommer le dossier cloné
2. Supprimer le `.git` avec `sudo rm -R .git`
1. Télécharger WordPress, ses plugins, ses thèmes avec la commande `composer install`
2. Créer la base de données
3. Compléter dans le fichier `wp-config.php` (copie de `wp-config-sample.php`):
   1. Les informations de connexion à la base de données
   2. Les clés de salage
   3. L'URL de la page d'accueil
   4. Passer la constante `WP_DEBUG` à `true`
   5. Sélectionner l'environnement souhaité (`production`, `development` ou `staging`)
4. Modifier les droits des dossiers et fichiers avec les commandes sur linux
    ```
    sudo chown -R <user>:www-data .
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess
    ```
5. Installer WordPress :tada:
