# Startup
1. Edit the `SITENAME` and `XXX.XXX` in the Vagrantfile
2. Run `vagrant up`
3. Run `vagrant ssh` then `cd /var/www/public` then `composer update` then `logout`

# Install ProcessWire
1. Add the site's IP to your hostfile
2. Navigate to the site in browser, follow instructions to install PW.

**Database Creds**
- DBNAME: scotchbox
- DBUSER: root
- DBPASS: root

# Install Node Packages
**From within the project...**

1. Run `yarn install`
2. Run `gulp`

# Lastly...
Click on "Refresh" under "Modules"
