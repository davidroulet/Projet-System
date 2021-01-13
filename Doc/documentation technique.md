# Documentation technique

Bob est un développeur qui vient de rejoindre l'équipe de développement de GREENPurple. Ce document répond aux questions qu'il se pose

### A quoi sert ce TRUC ? Qui l'utilise et pourquoi ?Ce projet a comme but de crée une platforme de "location" de poste de travaillenous pouvons louer des machines en passant par un site web et si connecter via "RDP" a ces machinesLe public cible est tout personne pour quel quconque raisson aurait besoin d'un post de travaille virtuelle Pourquoi? le but sera a térme de reduire la consomation de materiel informatique en se connecten a ces machines via un smartphone  
### Dans quel contexte (technique) fonctionne ce TRUC ?
Tout les different service sont hebergé sur une machines cette machine fera Hyperviseur avec VMware ESXI 6.5.0 comme system d'operationle DNS, le serveur web seront Hebergé sur une machine Virtuel LinuxPour les Machines clients elle seront hébérgé en parelle aussi dans des VM la referance du serveur et :HP ProLiant MicroServer Gen8
### Qu'est-ce que je dois faire pour pouvoir essayer ce TRUC ?

### Quelles sont les données / informations que ce TRUC manipule ?
le systeme manipulera des machines virutelle a la demande du client il y aura une base de donnée pour le site web qui répertoria les compte client les offres de commandes et les abbonment deja enrgistré 
### De quels composants le TRUC est-il fait ? 
de cuivre et d'autre matiére persieuse 

### Quelles technologies est-ce que je dois connaître pour pouvoir développer ce TRUC ? 
le php pour le site weble sql pour la gestion de base de donnéesle bash pour le script et la gestion du serveur web et DNSVMware ESXI pour la gestion de la platformele SSH,FTP pour la Gestion de l'invrasctructurela connextion RDP pour la connextion au machines cliente
PHP SQL pour faire un site web dynamique
le bash pour pourvoir utilisé VMware ESXI en ligne de commande et administré d'autre service (ces services marche sur du linux pour des questions de performence)VMware ESXI platforme pour hypervisé deja vus en cours voici pourquoi nous l'avont choisi
SSH,FTP gestion de base de la plupart des serveurs RDP pour avoir un moyen simple et natif a windows pour pouvoir ce conneter a des machines
### Qu'est-ce que je dois installer sur mon poste de travail pour pouvoir commencer à bosser sur ce TRUC ?
Pour le site Web:Un editeur PHP, une base de donnée MYSQLles données de la base ainsi que le site webPour l'hyperviseurUn naviagteur, un client SSH , un client FTP.

## M'enfin ... ?Pour le site web nous avons du utilisé une library supplementaire qui es SSH2SSH2 nous permet de nous connecter au serveur en SSH pour executer des scriptNous nous connecton avec un mot de passe et utilisateur et non un cerifica 

