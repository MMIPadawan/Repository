This file gives you an overview of your instance directories.

/private	is where you can store private files
/snapshot	is where snapshots of your disk will be available

/lamp0          is your main folder seen as /srv/data from your code
        /tmp    is where temporary files are stored
        /db     is where your database is stored
        /var
                /admin          is a restricted internal directory
                /log
                        /apache is the directory for Apache logs
                        /boot   is the directory for your instance logs
                        /cron   is the directory for your cron jobs logs
                        /db     is the directory for the database logs
                        /www    is the directory for your instance language logs
                /php            is the working directory for php (sessions...)
                /mysql          is the working directory for mysql
                /pgsql          is the working directory for postgres
                /cron           is the working directory for anacron
        /web
                /vhosts         is where vhost directories will be available once configured
                        /yourvhost.tld          is where you put private directory for related vhost
                        /yourvhost.tld/htdocs/  is where you put your public code for related vhost
                /includes       is the default includes_path where you can put your shared PHP librairies
        /trash  is where vhost directories will be move once unconfigured
        /home   contains your home directory
/vhosts         is a symlink to /lamp0/web/vhosts
