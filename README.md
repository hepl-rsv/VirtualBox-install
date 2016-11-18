# Machines virtuelle

## installation


```
For machine second :
host        ServerTest
user        jc
mp          dev
```


### config virtualbox
1. Télécharger la dernière version d'ubuntu serveur __LTS__ (Long Time Support), soit ìci `ubuntu-16.04.1-server-i386`
1. Installer virtualbox
1. Cliquer sur "_Nouvelle_".
![](./assets/img/virtualbox/1.png)

1. Nommer votre nouvelle machine virtuelle, choisir son "_type_" (Linux) et sa "_version_" (ubuntu 64bit). Laisser les autres paramètres inchangés. Ensuite faire "_Créer_".
![](./assets/img/virtualbox/2.png)

1. Vous pouvez changer l'emplacement du dossier, mais ici nous le laisserons par défaut. Maintenant cliquer sur "_Créer_".
![](./assets/img/virtualbox/3.png)

1. Cliquer du droit sur votre nouvelle machine et sélectionner "_Configuration_".
![](./assets/img/virtualbox/4.png)

1. Cliquer ensuite sur l'onglet "_Stockage_" -> "_Controleur : IDE_" -> "_Vide_" et enfin cliquer sur la petite image en forme de disque.
![](./assets/img/virtualbox/5.png)

1. Sélectionner "_Choisissez un fichier de disque optique virtuel..._"
![](./assets/img/virtualbox/6.png)

1. Sélectionner votre image d'ubuntu serveur, cliquer sur "_Ouvrir_" et ensuite faire "_OK_" pour sortir du menu.
![](./assets/img/virtualbox/7.png)

1. Vous pouvez à présent sélectionner "_Démarrer_" pour lancer la partie [Configuration du serveur](#config-serveur).
![](./assets/img/virtualbox/8.png)


### config serveur
1. Votre machine démarre.
![](./assets/img/serveur/1.png)

1. Sélectionner "_English_"(pour sélectionner quelque chose appuyer sur la touche `ENTER` pour vous déplacer utiliser les flèches du clavier ou `TAB`).
![](./assets/img/serveur/2.png)

1. Sélectionner "_Install Ubuntu Server_".
![](./assets/img/serveur/3.png)

1. Sélectionner à nouveau "_English_".
![](./assets/img/serveur/4.png)

1. Sélectionner "_other_".
![](./assets/img/serveur/5.png)

1. Sélectionner "_Europe_".
![](./assets/img/serveur/6.png)

1. Sélectionner "_Belgium_".
![](./assets/img/serveur/7.png)

1. Laisser par défaut.
![](./assets/img/serveur/8.png)

1. Sélectionner "_Yes_" pour qu'Ubuntu détecte votre clavier et répondez aux quelques questions qu'il va vous poser.
![](./assets/img/serveur/9.png)

1. Maintenant il sait quel clavier vous avez et faire "_Continue_".
![](./assets/img/serveur/10.png)

1. Vous allez avoir des écrans de chargement.
![](./assets/img/serveur/11.png)

1.  Ne rien faire jusqu'à ce que vous ayez ceci. Maintenant entrez le "_Hostname_" de votre machine (c'est le nom que prendra la machine sur le réseau).
![](./assets/img/serveur/12.png)

1. Ici vous allez choisir le nom complet de votre compte utilisateur.
![](./assets/img/serveur/13.png)

1. Ici vous allez choisir le nom de votre compte utilisateur.
![](./assets/img/serveur/14.png)

1. Maintenant vous allez choisir le mot de passe de votre compte. Vous allez devoir l'entrer une seconde fois pour le confirmer.
![](./assets/img/serveur/15.png)

1. Si vous avez choisit un mot de passe trop faible, vous aurez ce message qui apparait, faire "_Yes_" pour continuer avec ce mot de passe.
![](./assets/img/serveur/16.png)

1. Choisir "_No_" car il nous demande si on veut crypter les données du serveur.
![](./assets/img/serveur/17.png)

1. Vous allez avoir une fenêtre de chargement.
![](./assets/img/serveur/18.png)

1. Vérifier que vous êtes correctement localisé, si oui faites "_Yes_".
![](./assets/img/serveur/19.png)

1. Vous allez avoir à nouveau une fenêtre de chargement.
![](./assets/img/serveur/20.png)

1. Laisser les paramètres par défaut.
![](./assets/img/serveur/21.png)

1. Encore laisser par défaut.
![](./assets/img/serveur/22.png)

1. Sélectionner "_Yes_".
![](./assets/img/serveur/23.png)

1. Encore laisser par défaut et faire "_Continue_".
![](./assets/img/serveur/24.png)

1. Sélectionner "_Yes_".
![](./assets/img/serveur/25.png)

1. Vous allez avoir une fenêtre de chargement.
![](./assets/img/serveur/26.png)

1. Ne rien encoder et faire "_Continue_".
![](./assets/img/serveur/27.png)

1. Encore une page de chargement.
![](./assets/img/serveur/28.png)

1. Laisser "_No automatic updates_".
![](./assets/img/serveur/29.png)

1. Maintenant avec la touche `ESPACE`, cocher __"openSSH server"__ et laisser __"standard system utilisties"__ .
![](./assets/img/serveur/30.png)

1. Page de chargement.
![](./assets/img/serveur/31.png)

1. Sélectionner "_Yes_".
![](./assets/img/serveur/32.png)

1. Le serveur finit de se configuerer.
![](./assets/img/serveur/33.png)

1. Et voilà, vous avez terminé l'installation. Faire "_Continue_" pour accéder au serveur.
![](./assets/img/serveur/34.png)


## COMMANDES :

```
sudo shutdown now
```
> pour arrêter le système + mp user
