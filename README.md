# Oneclick_wp_ansible for ubuntu 16.04 64 bit 

#test run 2 nodes and 1 host controller ansible


# Packages requiments

-ansible version 2.4.0.0

-Python 2.7.12



# How to install 
sudo apt-add-repository ppa:ansible/ansible

sudo 
apt-get update

sudo apt-get install ansible

cd /etc/ansible/ && rm -rf /etc/ansible/*

git clone https://github.com/alupalo/oneclick_wp_ansible.git 

mv oneclick_wp_ansible/* /etc/ansible/ && rm -rf /etc/ansible/oneclick_wp_ansible



# How to use 
changes IP and hostname on node1,node2 in file "/etc/ansible/host"



[wp_host]

192.xx.xx.xx server_hostname=node01 hostname=node01

192.xx.xx.xx server_hostname=node02 hostname=node02




# changes variables wordpress in file "/etc/ansible/site.yml"


#variables for wordpress
 
vars:
   
  dir_roles: /etc/ansible/roles
   
  mysql_root_password: changes_password_root
   
  wp_db_user: wpuser
   
  wp_db_password: wppassword
   
  wp_db_name: wordpress



# how to run deploy Oneclick-wp-ansible

ansible-playbook -i host site.yml



success!!
