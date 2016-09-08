***Deploy mzl.net***

1) Start Droplet ( Ubuntu 16.04 x64 - https://cloud.digitalocean.com/droplets/new )
2) run ansible - ansible-playbook -i hosts site.yml
3) enjoy


***ToDo***

1) mariadb
2) firewall




==============================================================

http://docs.ansible.com/modules.html

From playbooks, Ansible modules are executed in a very similar way:

- name: reboot the servers
  action: command /sbin/reboot -t now
Which can be abbreviated to:

- name: reboot the servers
  command: /sbin/reboot -t now

==============================================================







  
