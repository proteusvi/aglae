# Développement
## Avant de commencer.
## Comment lancer l'application.
1. Sourcer les .aliases puis toutes les commande docker à lancer dans le répretoire docker : 
```bash
 $ source .aliases
 $ cd docker
```
2. taper start pour lancer docker ou :
```bash
 $ docker compose up -d
```
3. déployer symfony dans votre conteneur php :
```bashaglae.local.ch:u

$ start
$ connect php
wodby@php.container:/var/www/html $ composer install
```
4. Dans le browser de votre choix, taper l'URL http://aglae.local.ch:8000/ \
ou cliquer sur le lien : [ouvrir dans votre navigateur](http://aglae.local.ch:8000)

Pour que cela fonctionne, il faut ajouter la ligne :
```bash
127.0.0.1   aglae.local.ch
```
- dans le fichier /etc/hosts en tant que root.
