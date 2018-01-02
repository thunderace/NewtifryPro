# Présentation

NewtifryPro est une déclinaison de Newtifry. Son but est de s'affranchir de la présence d'un serveur tiers pour l'envoi de messages.
Pour fonctionner, NewtifryPro a besoin d'un senderID sur le téléphone Android et d'une clé API pour l'envoi de message de la plateforme de votre choix.

La première chose à faire est donc d'obtenir ce couple SenderID/Clé API.

# Etape 1 : Obtenir le senderID et le jeton Firebase
Ces deux éléments sont fournis par Google. 
Rendez vous dans la [console Google Cloud Platform](https://console.cloud.google.com/) :
  * Cliquez sur *Sélectionner un projet* (en haut à gauche de l'écran, à droite fde 'Google cloud Platform'), cliquez sur le '+', entrez un nom pour votre projet (nptutorial dans notre cas) et cliquez sur *Créer*
  * Patientez le temps de la création du projet par Google...
  * Lorsque le projet sera créé, il apparaitra dans la liste en haut à gauche, le senderID est le numéro de votre projet et se trouve sur la page d'accueil dans le cadre *Informations sur le proje*
  * Allez dans *APIs & Services/Bibliothèque*, chercher le service *Google Cloud Messaging*, cliquez dessus et cliquez sur *Activer*,
  * Allez dans *APIs & Identifiants*, cliquez sur *Créer des identifiants* et choisissez *Clé API*, une ligne 'Clé API 1' doit apparaitre, copiez la clé, c'est la clé d'identification qui sera utilisée pour envoyer les messages,

# Etape 2 : Configurer NewtifryPro
Au premier lancement, NewtifryPro vous indique que vous votre appreil n'est pas inscrit : Dans le menu, selectionnez *Inscription*, saisissez le SenderID obtenu précédemment et cliquez sur OK.
Lorsque l'inscription est terminée, votre appareil est prêt à recevoir des messages.

# Etape 3 : Envoyer un message
Pour envoyer un message à votre appareil, il faut obtenir son identifiant : Dans le menu, selectionnez *Paramètres* et cliquez sur *Identifiant de l'appareil*, l'application vous propose d'envoyer cet identifiant par mail.

Pour ce premier envoi, nous allons utiliser l'API PHP. Télécharger l'API PHP à cette adresse : https://github.com/thunderace/NewtifryPro-php
Dans le fichier example.php, remplacer *YourGoogleAPIKEY* par le jeton obtenu à l'étape 1 et remplacer *MyFirstGCMDeviceID* par l'identifiant de l'appareil que vous avez reçu par mail.
Il ne reste plus quà exécuter : php example.php. après quelques secondes à quelques minutes de patience, vous allez recevoir le message sur votre appareil.

L'API est disponible en PHP, NodeJS. Des plugins existent pour jeedom et node-RED. Un exemple pour arduino est également disponible dans ce repository.
L'API pour accéder à l'interface SMS de NewtifryPro est également disponible.
