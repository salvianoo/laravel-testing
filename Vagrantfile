# -*- mode: ruby -*-
# # vi: set ft=ruby :

VAGRANT_API_VERSION = 2

Vagrant.configure(VAGRANT_API_VERSION) do |config|
  # config.vm.box = "ubuntu/xenial64"
  config.vm.box = "ubuntu/trusty64"

  config.vm.network "forwarded_port", guest: 8000, host: 8877
  config.vm.network "private_network", type: "dhcp"
  config.vm.synced_folder "/Users/salviano/Code/testes-laravel/app-demo", "/var/www/html/", nfs: true

  config.vm.provision "shell", path: "/Users/salviano/Code/testes-laravel/install.sh"
end
