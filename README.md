# Mail Bomber

Mail Bomber is a tool that allows you to send hundreds of e-mails in a short time. This Mail Bomber connects with an active Gmail Account and uses this to send the e-mails.

## Requeriments
1. A Web Server (Apache, Nginx...)
2. PHP installed in Server
3. A Gmail Account (You must enable permissions for less secure applications).
 

## Installation
1. Clone this repository into your web server.
```bash
git clone https://github.com/pedrojanula/mail-bomber.git
```
2. Open `index.html` to use.


## Includes
You don't need to include anything. This mail bomber uses [PHPMailer](https://github.com/PHPMailer/PHPMailer) and it's included `(/libs/*.php)`

## Preparing a Gmail Account

In order to send mails from a gmail address using the mail bomber you must give permission to less secure applications. Follow these steps:

1. Sign in into your gmail account.
2. Go to [https://www.google.com/settings/security/lesssecureapps](https://www.google.com/settings/security/lesssecureapps)
3. Check the option "Enable".
4. Anything more. Enjoy.

## Usage

1. Run `index.html`
2. You must fill in all fields:
3. Press `SENT` button to start.
4. If the gmail account (address and password) is correct, everything should work properly.


## Fields

- **Gmail Address:** Your Gmail Address. The emails will be sent from this address.
- **Gmail Password:** Your Gmail Password. This mail bomber needs to connect into your gmail account for send the mails.
- **Your Name:** Name you want to use when sending mail. It's the name that appears.
- **Sent to:** E-mail destination.
- **Subject:** Subject of every mail.
- **Message:** Message of every mail.
- **Number of Mails to Send:** Specifies the number of emails to be sent. The value must be an integer.