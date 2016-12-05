# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    $sitename       = "SITENAME"
    $ipaddress      = "192.168.XXX.XXX" 

    # Get that box set up!
    config.vm.box = "scotch/box"
    config.vm.hostname = "scotchbox"
    config.vm.provider "virtualbox" do |v|
      v.name = $sitename
    end

    # Here's how the box interacts with your system!
    config.vm.network "private_network", ip: $ipaddress
    config.vm.synced_folder ".", "/var/www/public", :mount_options => ["dmode=777", "fmode=666"]

    # Set the Timezone for the Box
    if Vagrant.has_plugin?("vagrant-timezone")
        config.timezone.value = "America/New_York"
    end

    # Update Composer On Every Provision
    config.vm.provision "shell" do |s|
        s.inline = "sudo composer self-update"
    end

    # trying to fix uploads for ProcessWire
    config.vm.provision "shell", inline: <<-SHELL
        sudo bash -c \'echo export "always_populate_raw_post_data = -1" >> /etc/php5/apache2/conf.d/user.ini\'

        sudo service apache2 restart
    SHELL

    # Now we remind ourselves to add this new site to the hosts file via ghost
    config.vm.provision "shell", inline: "printf '\rsudo ghost add " + $sitename + " " + $ipaddress + "'"

end
