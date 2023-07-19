# Développement
## Avant de commancer.
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
3. Dans le browser de votre choix, taper l'URL http://aglae.local.ch:8000/ \
Pour que cela fonctionne, il faut ajouter la ligne :
```bash
localhost   aglae.local.ch
```
- dans le fichier /etc/hosts en tant que root.
