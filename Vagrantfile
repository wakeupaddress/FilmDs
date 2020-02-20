# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "centos/7"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # NOTE: This will enable public access to the opened port
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder ".", "/vagrant"
  config.vm.synced_folder ".", "/var/www/html", mount_options:['dmode=777','fmode=777']

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Enable provisioning with a shell script. Additional provisioners such as
  # Ansible, Chef, Docker, Puppet and Salt are also available. Please see the
  # documentation for more information about their specific syntax and use.
  config.vm.provision "shell", inline: <<-SHELL

    cp /etc/yum/pluginconf.d/fastestmirror.conf /etc/yum/pluginconf.d/fastestmirror.conf.org

    sed -e "s/^include_only//" /etc/yum/pluginconf.d/fastestmirror.conf
    sed -e "s/^prefer//" /etc/yum/pluginconf.d/fastestmirror.conf

cat << EOS | sudo tee -a /etc/yum/pluginconf.d/fastestmirror.conf
include_only=.jp
prefer=ftp.iij.ad.jp
EOS

    echo SELinux 無効化
    setenforce 0
    sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config

    echo TimeZone
    timedatectl set-timezone Asia/Tokyo

    localedef -f UTF-8 -i ja_JP ja_JP.utf8
    localectl set-locale LANG=ja_JP.utf8
    localectl set-keymap jp106

    yum update -y

    firewall-cmd --permanent --zone=public --add-service=http
    firewall-cmd --permanent --zone=public --add-service=https
    firewall-cmd --reload

    echo PHP 7.4
    yum install -y epel-release
    rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
    yum install -y --enablerepo=remi,remi-php74 php php-zip php-devel php-mbstring php-pdo php-xml php-bcmath php-mysqlnd

    echo apache
    yum install -y httpd
    systemctl start httpd.service
    systemctl enable httpd.service

    echo MySQL8
    rm -rf /var/lib/mysql/*
    yum remove mysql-server

    yum install -y https://dev.mysql.com/get/mysql80-community-release-el7-3.noarch.rpm
    yum -y install mysql-community-server

    mv /etc/my.cnf /etc/my.cnf.org
    cp /var/www/html/my.cnf.org /etc/my.cnf

    mkdir -p /var/log/mysql
    chown -R mysql:mysql /var/log/mysql

    systemctl start mysqld
    systemctl enable mysqld
    rm -f /var/log/mysqld.log

    DB_OLD_PASSWORD=`sudo cat /var/log/mysql/mysql-error.log | grep 'temporary password' | awk -F ': ' '{print $NF}'`
    DB_NEW_PASSWORD=`cat /var/www/html/db.config | grep 'password=' | sed -e 's/password=//'`
    sudo mysqladmin -p${DB_OLD_PASSWORD} password ${DB_NEW_PASSWORD}
  SHELL
end
