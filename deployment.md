Deployment Requirements and Instructions:

- Install Vagrant
- Setup local site running WPDistillery through Vagrant
- Install all-in-one migration plugin on local WordPress
- Setup sub-accounts for developers on tsoHost
- Access the staging and production sites hosted through tsoHost

This site was developed using a 3-stage technique. This includes a local site, which is entirely independent of the remaining two sites, being the staging and production sites. The local site is designed for making local changes on the WordPress file without having an effect on the two live sites, this might include major additions/changes to the site. The local site is also handy for making changes when the live sites are not accessible at the time. The staging site is the first of the live sites to recieve changes and is used as a testing environment for the real environment. The production site is the site that is used and should hold a site which has been testing using the former sites.

To set-up Vagrant and WPDistillery:

- Install Vagrant from https://www.vagrantup.com/downloads.
- Install Oracle VM Virtual Box from https://www.virtualbox.org/wiki/Downloads.
- Choose a command line of your choice (i.e. git bash).
- Check version by using command vagrant version.
- Use command git clone https://github.com/lindsaymarkward/WPDistillery projectNameOfChoice.
- Use command cd projectNameOfChoice to go into your projects directory.
- Once in the directory, use command vagrant up (this will take a while, as WordPress needs to install).
- Open Virtual Box and the machine which has been created. Login to scotchbox to start localhost.
- This version of WPDistillery changes the domain from localhost to 192.168.33.10. Use this address to check that the site has loaded correctly.

To access live sites:
There is an admin account that currently has 3 sub-accounts for developers. A new account can be created at anytime through tsoHost and each account can have different levels of access. Once an account is made:

- Login to my.tsoHost
- The WordPress site server can be accessed by clicking the WordPress product and then launch WordPress server (Refer to images).
- Once in the server, locate the settings tab to access/edit either the staging site or production site.
- Edit the staging site and locate the all-in-one migration button on the sidebar
- Export using this plugin by making the find line 0zo.bde.myftpupload.com (domain of staging site) and assign to 192.168.33.10 (domain of local site). Next click the export button and select file. The downloaded file will now be used in the local site.

To set-up local site:

- Add /wp-login.php to the end of the address and login using default username and password (admin for both).
- Install all-in-one migration through the WordPress plugins.
- Open all-in-one as above and locate the import button. Drag and drop the downloaded file.
- A message will come up when the import is complete and at this stage all sites should have the same content.

To access local site after restart:

- cd into projectNameOfChoice
- Use command vagrant up to startup machine
- Login to scotchbox
- Use 192.168.33.10 to access site
