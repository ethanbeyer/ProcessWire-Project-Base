# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    $sitename       = "SITENAME"                # SITENAME
    $ipaddress      = "192.168.XXX.XXX"         # VAGRANT IP ADDRESS

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

end
