# Envoyer un message NewtifryPro avec eedomus
Vous allez avoir besoin d'un serveur Apache/PHP externe (ou tout autre serveur web de votre choix)
  
Sur la eedomus : (Je n'ai pas de box eedomus, je laisse le soin aux possesseurs d'affiner cette partie)
  * Créer un actionneur HTTP (http://doc.eedomus.com/view/Pilotage_HTTP) avec l'adresse http://YOURWEBSERVERADDRESS/eedomus.php?source=The+Source&title=The+Title&message=The+Message&priority=1
  

Sur le serveur Apache : 
  * Copier le fichier eedomus.php à la racine du serveur web
  * Dans le fichier eedomus.php : 
    * Remplacer *YourFirebaseToken* par votre jeton Firebase,
    * Remplacer *MyFirstGCMDeviceID* par l'identifiant de votre appareil.

