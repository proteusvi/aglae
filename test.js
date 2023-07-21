
//variables utilisées
var entrees = [];
var entreesEnListe = "";

//functions principales
function run(){
    while(true){
        choixUtilisateur();
    }

}

function choixUtilisateur(){
    switch(prompt("Que souhaitez-vous faire ?\nadd : ajouter une entrée\n"+
                                      "print : lister les entrées et calculer le total")){
        
        case "add" : ajouterEntree();
                     return;
        case "print" : presenter();
                     return;
        default : alert("Entrez une commande valide, s'il vous plaît.");
    }
}

function ajouterEntree(){
    entrees.push(demanderMouvement());
}

function presenter(){
    recupEntrees();
    alert("Voici la liste des entrées faites, suivie du total :\n"+entreesEnListe+"\n \n         Total : "+calculTotal()+" CHF");
}

//fonctions auxiliaires

function demanderMouvement(){
    let proposition = "?";
    while(isNaN(proposition)){
        proposition = prompt("Quel mouvement souhaitez-vous entrer, en francs suisses ?\n"
                +"Attention, séparer les francs des centimes par un point '.',"
                +" et exprimer une dépense en la précédent d'un moins '-'.\n \n"
                +"Merci de ne pas noter '.-', 'francs' ou autre 'CHF'.\n"
                +"Exemple : '75.45', '-40.00' ou '420.30'.");
    }
    return proposition;
}

function calculTotal(){
    let total = 0;
    for(let i=0 ; i<entrees.length ; i++){
        total += parseFloat(entrees[i]);
    }
    return total.toFixed(2);
}

function recupEntrees(){
    for(let i=0 ; i<entrees.length ; i++){
        if(entrees[i]<0){
            entreesEnListe = entreesEnListe+parseFloat(entrees[i]).toFixed(2)+" CHF\n";
        }
        else{
            entreesEnListe = entreesEnListe+parseFloat(entrees[i]).toFixed(2)+" CHF\n";
        }
        
    }
}