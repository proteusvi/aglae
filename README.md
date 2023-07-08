![](pictures/Logo_Aglae_364.png)
# Aglae
Gestion des comptes pour association Aglae

Demande d'une application qui permet d'aider le trésorier à tenir les compte et à fournir un document physique
par dossier (Activité de l'association comportant des entrées et des dépenses) à remmetre aux entités qui 
fournissent de l'argent à l'association.

## Le but de l'application.
Permettre à n'importe qui de tenir les comptes de l'association simplement,
De pourvoir sortir à n'importe quel momment toutes les écritures dans un format simple, lisible et compréhensible
premettant à une entité de comprendre les entrées et les dépenses.
De pouvoir demander les justificatifs en relation avec telle ou telle écriture.
De permettre au trésorier en charge de pouvoir retrouver les justificatifs en lisant l'écriture dans le document.

## Le document attendu comprend :
- Le nom de l'association et logo.
- Le sujet concerné par les écritures.
- Le nom et logo des entités associées.
- Le montant à disposition avancé par les entités nommées.
- Le total des dépenses.
- Le total des entrées.
- La recette ou la perte net.
Toutes les écritures détaillées.

## Une Ecriture est présentée :
- Un numéro d'ordre par écriture.
- La date de l'écriture.
- Le libellé de l'écriture.
- Le montant.
Le montant est soit dans la colonne des dépenses soit dans la colonne des entrées.

![Insérer ici l'exemple de document](mon image)

## Les entités et leurs données :
| Association                 |1:n| Subventionneur |1:n| Dossier (sujet)   |1:n| Ecriture     |
|-----------------------------|---|----------------|---|-------------------|---|--------------|
| Id                          |   | Id             |   | Id                |   | Id           |
| Nom                         |   | Nom            |   | Date  de création |   | Numero ordre |
| Logo                        |   | Logo           |   | Date  de cloture  |   | Date         |
| Date  de création           |   |                |   | Nom               |   | Libelle      |
| Date début année académique |   |                |   | Budjet reçu       |   | Type         |
| Status                      |   |                |   | Total entrées     |   | Montant      |
| Description                 |   |                |   | Total sorties     |   |              |

- menu :
  - entrer une dépense.
  - entrer une entrée d'argent.
  - afficher bilan des dépenses et des gains.
  - exporter document (Rapport).
- Affichage du document
  - total des gain total des dépenses.
  - sous totaux par page
  - qui je suis 
  - de qui je dépends (plusieurs)
  - année en cours académique
  - quand elle débute
 - Tables
   - Association 1:1
   - Membres 1:n
   - Téléphones 1:n
   - Dossiers 1:n
   - 1:1 Dossier-Depenses 1:n
   - Depenses 1:n
   - 1:1 Dossier-Entrees 1:n
   - Entrees 1:n

```bash 
                                           +---------------------------+
                                           | Entité de dépendance      |
                                           +---------------------------+1
                                           | id                        +----------------------------------------+
                                          *| Nom                       |1                                       |
                          +----------------+ Adresse (id)              +-----------------------+                |
                          |                +---------------------------+                       |                |
                          |                                                                    |                |
                          |                                                                    |                |
                          +--------------------------------------------------------+           |1               |
                         1|                                                        |    +------+------------+   |
+-------------------------+---+           +-----------------------------+          |    | Adresse           |   |
| Association                 |           | Membre                      |          |    +-------------------+   |
+-----------------------------+           +-----------------------------+          |    | Rue               |   |
| Id                          |           | Id                          |          |    | Numero            |   |
| Nom                         |1         *| Nom                         |1         | 1  | Npa               |   |
| Date  de création           +-----------+ Prénom                      +---------------+ Ville             |   |
| Date début année académique |           | Adresse(id)                 |          |    | Canton            |   |
| Status                      |1          | npa                         |          |    | Pays              |   |
| Président (id membre)       +-----+     +-------------+---------------+          |    +-------------------+   |
+-----------------------------+     |                   |1                         |                            |
                                    |                   |                          |                            |
+-----------------------------+     |                   |                          |                            |
| Téléphone                   |     |                   |                          |                            |
+-----------------------------+     |                   |                          |                            |
| Id                          |*    |                   |                          |                            |
| libelle                     +-----+-------------------+                          |                            |
| pays                        |*                                                   |                            |
| Indicatif                   +---------------------------------------------------------------------------------+
| Numéro                      |                                                    |
+-----------------------------+                                                    |
                                                                                   |
+-----------------------------+                                                    |
| Dossier                     |                                                    |
+-----------------------------+*                                                   |
| Id                          +----------------------------------------------------+
| Date  de création           +-----------------+   +---------------------------+ 
| Date  de cloture            |1                |   | Ecriture                  |
| Nom                         +--------------+  |   +---------------------------+
+-----------------------------+1             |  |   | Id                        |
                                             |  |   | Numero ordre              |
                                             |  |   | Depense                   |
+-----------------------------+              |  |   | Entree                    |
| Depense                     |              |  |   +---------------------------+
+-----------------------------+*             |  |
| Id                          |              |  |
| Libelle                     |              |  |
| Date (Timestamp)            +--------------+  |
| Montant                     |                 |
+-----------------------------+                 |
                                                |
                                                |
+-----------------------------+                 |
| Entree                      |                 |
+-----------------------------+*                |
| Id                          +-----------------+
| Libelle                     | 
| Date  (Timestamp)           | 
| Montant                     |
+-----------------------------+

```
