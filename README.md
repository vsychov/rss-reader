Home assignment: 

Your task is to create simple RSS reader web application with following views:
 1) User registration - form with e-mail and password fields + e-mail verification using ajax. 
 Existence of already registered e-mail should be checked “on the fly” via ajax call when writing e-mail address and before submitting form. 
 After registration user should receive confirmation e-mail. 
 
 2) Login form with e-mail address and password Logins are permitted only for successfully verified e-mail addresses.
 
 3) RSS feed view After successful login display top 20 news from following RSS feed https://www.delfi.lv/rss/?channel=delfi 
 You should do this task by showing your best experience in UX, UI, backend stuff.
 There are no restrictions on frameworks (PHP and/or JS) used. 
 
Please send the code (archive or link to github) and instructions how to set it up once completed. Best of luck, and we are hoping to see the hometask back within a week.

# Install
yarn install
yarn build
composer install

and then run `php bin/console server:run`

# Screenshots
Main page: https://www.dropbox.com/s/nk776yc523ogphm/Screenshot%202019-05-09%2018.28.42.png?dl=0

Login page: https://www.dropbox.com/s/4kianprs4q41bdo/Screenshot%202019-05-09%2018.29.00.png?dl=0

Register page: https://www.dropbox.com/s/u904nrtxcxtnhd1/Screenshot%202019-05-09%2018.29.16.png?dl=0
