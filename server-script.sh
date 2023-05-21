#!/bin/bash
sudo yum -y update
sudo yum -y install ruby
sudo yum -y install wget
cd /home/ec2-user
sudo chmod +x ./install
sudo ./install auto
sudo yum install -y python-pip
sudo pip install awscli
sudo dnf update -y
sudo dnf install postgresql15
sudo yum install php
sudo yum install php-pgsql
sudo yum install -y httpd
sudo systemctl enable httpd
sudo systemctl start httpd
