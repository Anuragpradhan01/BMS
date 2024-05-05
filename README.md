# Email Bulk Manager 

## What is it?

Built with CodeIgniter use MailJet Markting API to send builk email at once.

![2](https://github.com/web-dev-nav/Bulk-Email-Manager/assets/110724391/1df59bff-155a-4576-8709-afff22c40d80)

# Config

## Setup database

1. Create Phpmyadmin database and Import the SQL/ sql file.
2. Change config inside .env (Hidden) or rename to add (dot) before env: .env

```php
 database.default.hostname = localhost
 database.default.database = u957918675_bulk_mailer
 database.default.username = u957918675_bulk_mailer
 database.default.password = |PjgwW|w4hI
```

# Signup for Mailjet Account
 1. Click here to signup for Mailjet: https://app.mailjet.com/signin
 2. Once account created, verify domain from which you would like to send emails. This is the sender domain that will be shown at the recipent inbox.
    
    ![image](https://github.com/web-dev-nav/Bulk-Email-Manager/assets/110724391/78fdf381-058e-4ac5-b86d-e0727f3ff3e0)

 4. Create API key and add verified domain on .env
    
```php
    MAILJET_API_KEY = f054e3c11db371956bdacd_KEY
    MAILJET_API_SECRET = e48f6971d67a5dc117224ec_SECRET
    MAILJET_SEND_MAIL = info@itmonkinc.com //VERIFIED DOMAIN
    MAILJET_COMPANY_NAME = Itmonk // YOUR FIRM NAME
```    

 # Extra Infromation

By default it using Mailjet free API to send emails. How many email you can send at once can be find here: https://www.mailjet.com/pricing/ or https://dev.mailjet.com/email/reference/overview/rate-limits/
Please note: The system still require futher developement if you are a developer you can find API documentation here: https://dev.mailjet.com/email/guides/send-api-v31/ OR https://dev.mailjet.com/email/reference/
"# BMS" 
