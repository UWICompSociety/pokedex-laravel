## Instructions

To run the application, you will need to have nodejs, npm, redis and composer installed on your machine.

 ## Errors

 # Connection Refused
- Reason
 This is typically due to the redis server is not currently running

- Fix
On linux create an instance of the redis server and dtach it from the terminal using the following command:
nohup redis-server &

# Predis/Client Error
- Reason
The redis library is not included in the default installation of laravel

- Fix
Use composer to pull in the package by using the command
composer require predis/predis