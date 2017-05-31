Setting up local git respository and connecting to remote

~# open command line (terminal/bash)
~# git clone git@github.com:jcrowe85/usurance.git
- rename usurance folder to public
- cd into public
~# git init
//To commit your changes both in master or branches
- create test.html file
- place the following in test.html file and save: <!DOCTYPE html><html><head>git commit success</head><body><h1>Git Commit Successful</h1></body></html>
~# git add .
~# git commit -am "initial commit"
~# git push
- login to github.com to validate commit


Git commands

// unmerge previous merge and move to previous head

~# git reset --hard [head # or value]

// remove file staged for git commit 
~# git reset <file> 
~# git reset // too many files to remove each one

Git documentation
https://git-scm.com/blog/2010/03/02/undoing-merges.html



/// Congiure apache2 to run CGI script

~# sudo nano /etc/apache2/sites-available/001-cloud9.conf
- delete current file and copy/paste everything below between //Start and //End
// Start

<VirtualHost *:8080>
    DocumentRoot /home/ubuntu/workspace/public_html/
    ServerName https://${C9_HOSTNAME}:443
    LogLevel info
    ErrorLog /home/ubuntu/workspace/public_html/error.log
    CustomLog /home/ubuntu/workspace/public_html/access.log combined
    <Directory /home/ubuntu/workspace/public_html>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
 ScriptAlias /cgi-bin/ /home/ubuntu/workspace/public_html/cgi-bin/
<Directory /home/ubuntu/workspace/public_html/cgi-bin/>
   AllowOverride None
   Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
   Order allow,deny
   Allow from all
</Directory>
</VirtualHost>
ServerName https://${C9_HOSTNAME}
# vim: syntax=apache ts=4 sw=4 sts=4 sr noet

// End
- to save changes, press ctrl + x then type y and press enter
~# sudo a2enmod cgi
~# sudo service apache2 restart
// test cgi script by visiting life.php and submitting information



Emmet - coding shortcuts
// Emmet is a software that makes coding easy through shortcuts. Review the 'cheat sheet' url for further details

Cheat sheet - https://docs.emmet.io/cheat-sheet/

// installation from command line
~# npm install npm@latest -g
~# npm install --save emmett

