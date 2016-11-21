# What do you need
  * A SenderId to register your device on Google GCM service.
  * An Firebase Token (old API Key) to send messages to your device
  * The GCM Id of your device (Device ID)

# 1 : Get the senderID and Firebase token
  * Open the [Firebase Console](https://console.firebase.google.com/) :
  * Log in,
  * If you haven’t created an API project yet, click *Create Project*,
  * Find your Firebase project and click Project Name,
  * Click the setting icon and select *Project Setting* menu
  * Select *Could Messaging* tab and get Firebase Token and Sender ID.

# 2 : Configurer NewtifryPro
nce you have your Sender ID, you can register your device. In NewtifryPro: 
  * Open the menu
  * Select *Register* entry
  * Enter your Sender ID
  * Wait for registration success
  * Open the menu again
  * Select *Preferences*
  * Select *Test*
  * After a variable delay, you should receive a test message in NewtifryPro

# 3 : Envoyer un message
You need your DeviceID. In NewtifryPro :
  * Open the menu,
  * Select *Preferences*
  * Select *Email Device ID*
  * Enter your email address
  * Send the email.
Once you have your device ID, you can use the php script : https://github.com/thunderace/NewtifryPro-php or the nodejs script : https://github.com/thunderace/NewtifryPro-node
You are ready to send notifications!
  
