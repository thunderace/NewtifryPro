# Présentation

NewtifryPro est une déclinaison de Newtifry. Son but est de s'affranchir de la présence d'un serveur tiers pour l'envoi de messages.
Pour fonctionner, NewtifryPro a besoin d'un senderID sur le téléphone Android et d'un jeton Firebase pour l'envoi de message de la plateforme de votre choix.

La première chose à faire est donc d'obtenir ce couple SenderID/Jeton Firebase.

# Etape 1 : Obtenir le senderID et le jeton Firebase
Ces deux éléments sont fournis par Google. 
Rendez vous dans la [console Firebase](https://console.firebase.google.com/) :
  * Identifiez vous si ce n'est déjà fait,
  * Cliquez sur *Créer un projet*, entrer un nom pour votre projet (nptutorial dans notre cas),votre pays et cliquez sur *Créer un projet*
  * Patientez le temps de la création du projet par Google...
  * Cliquez sur la roue dentée située à droite du nom de votre projet et *Paramètres du projet*,
  * Cliquez sur l'onglet *CLOUD MESSAGING*, sauvegardez le chaine *Jeton Firebase Cloud Messaging* et le nombre *ID de l'expéditeur* (SenderID).

# Etape 2 : Configurer NewtifryPro
Au premier lancement, NewtifryPro vous indique que vous votre appreil n'est pas inscrit : Dans le menu, selectionnez *Inscription*, saisissez le SenderID obtenu précédemment et cliquez sur OK.
Lorsque l'inscription est terminée, votre appareil est prêt à recevoir des messages.

# Etape 3 : Envoyer un message
Pour envoyer un message à votre appareil, il faut obtenir son identifiant : Dans le menu, selectionnez *Paramètres* et cliquez sur *Identifiant de l'appareil*, l'application vous propose d'envoyer cet identifiant par mail.

Pour ce premier envoi, nous allons utiliser l'API PHP. Télécharger l'API PHP à cette adresse : https://github.com/thunderace/NewtifryPro-php
Dans le fichier example.php, remplacer *YourGoogleAPIKEY* par le jeton obtenu à l'étape 1 et remplacer *MyFirstGCMDeviceID* par l'identifiant de l'appareil que vous avez reçu par mail.
Il ne reste plus quà exécuter : php example.php. après quelques secondes à quelques minutes de patience, vous allez recevoir le message sur votre appareil.
