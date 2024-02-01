# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrant file for setting up three virtual machines: a user vm, a admin vm, and a database vm.
Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu-jammy"

  # Setting up the user vm for the customer website.
	config.vm.define "userserver" do |userserver|

	  userserver.vm.hostname = "userserver"

		userserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"

		userserver.vm.network "private_network", ip: "192.168.100.11"

		userserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

		userserver.vm.provision :shell, path: "setup/userserver_setup.sh"

		userserver.vm.provider "virtualbox" do |vb|
			vb.cpus = 1
			vb.memory = "512"
		end

	end

  # Setting up the admin vm for the staff website.
  config.vm.define "adminserver" do |adminserver|

	  adminserver.vm.hostname = "adminserver"

		adminserver.vm.network "forwarded_port", guest: 80, host: 8082, host_ip: "127.0.0.1"

		adminserver.vm.network "private_network", ip: "192.168.100.12"

		adminserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

		adminserver.vm.provision :shell, path: "setup/adminserver_setup.sh"

		adminserver.vm.provider "virtualbox" do |vb|
			vb.cpus = 1
			vb.memory = "512"
		end

	end

  # Setting up the database vm for hosting the database that stores the clothing items
  config.vm.define "dbserver" do |dbserver|

	  dbserver.vm.hostname = "dbserver"

		dbserver.vm.network "private_network", ip: "192.168.100.13"

		dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

		dbserver.vm.provision :shell, path: "setup/dbserver_setup.sh"

		dbserver.vm.provider "virtualbox" do |vb|
			vb.cpus = 2
			vb.memory = "2048"
		end

	end

end