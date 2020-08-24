# API Support check vestaCP for more information. (65/413)


| Endpoint                                | SDK Class::Function                             | Output            | Version |
|-----------------------------------------|-------------------------------------------------|-------------------|---------|
|acknowledge-user-notification            |                                                 |                   |         |
|v-activate-plugin                        |                                                 |                   |         |
|v-activate-vesta-license                 |                                                 |                   |         |
|v-add-backup-host                        |                                                 |                   |         |
|v-add-cron-job                           |                                                 |                   |         |
|v-add-cron-letsencrypt-job               |                                                 |                   |         |
|v-add-cron-reports                       |                                                 |                   |         |
|v-add-cron-restart-job                   |                                                 |                   |         |
|v-add-cron-vesta-autoupdate              |                                                 |                   |         |
|v-add-database                           |                                                 |                   |         |
|v-add-database-host                      | Database::create                                | Boolean           | 0.1.0   |
|v-add-dns-domain                         | Domain::createDNS                               | Boolean           | 0.0.1   |
|v-add-dns-on-web-alias                   |                                                 |                   |         |
|v-add-dns-record                         | Domain::createDNSRecord                         | Boolean           | 0.0.1   |
|v-add-domain                             | Domain::create                                  | Boolean           | 0.0.1   |
|v-add-firewall-ban                       |                                                 |                   |         |
|v-add-firewall-chain                     |                                                 |                   |         |
|v-add-firewall-ipv6-ban                  |                                                 |                   |         |
|v-add-firewall-ipv6-chain                |                                                 |                   |         |
|v-add-firewall-ipv6-rule                 |                                                 |                   |         |
|v-add-firewall-rule                      |                                                 |                   |         |
|v-add-fs-archive                         |                                                 |                   |         |
|v-add-fs-directory                       |                                                 |                   |         |
|v-add-fs-file                            |                                                 |                   |         |
|v-add-letsencrypt-domain                 | Domain::addLetsencrypt                          | Boolean           | 0.0.1   |
|v-add-letsencrypt-mail-domain            |                                                 |                   |         |
|v-add-letsencrypt-user                   |                                                 |                   |         |
|v-add-letsencrypt-vesta                  |                                                 |                   |         |
|v-add-mail-account                       | Domain::createMailAcccount                      | Boolean           | 0.0.1   |
|v-add-mail-account-alias                 |                                                 |                   |         |
|v-add-mail-account-autoreply             |                                                 |                   |         |
|v-add-mail-account-forward               |                                                 |                   |         |
|v-add-mail-account-fwd-only              |                                                 |                   |         |
|v-add-mail-domain                        | Domain::createMail                              | Boolean           | 0.0.1   |
|v-add-mail-domain-antispam               |                                                 |                   |         |
|v-add-mail-domain-antivirus              |                                                 |                   |         |
|v-add-mail-domain-catchall               |                                                 |                   |         |
|v-add-mail-domain-dkim                   |                                                 |                   |         |
|v-add-mail-domain-ssl                    |                                                 |                   |         |
|v-add-plugin                             |                                                 |                   |         |
|v-add-remote-dns-domain                  |                                                 |                   |         |
|v-add-remote-dns-host                    |                                                 |                   |         |
|v-add-remote-dns-record                  |                                                 |                   |         |
|v-add-sys-firewall                       |                                                 |                   |         |
|v-add-sys-ip                             |                                                 |                   |         |
|v-add-sys-ipv6                           |                                                 |                   |         |
|v-add-sys-quota                          |                                                 |                   |         |
|v-add-sys-sftp-jail                      |                                                 |                   |         |
|v-add-user                               | User::create                                    | Boolean           | 0.0.1   |
|v-add-user-favourites                    |                                                 |                   |         |
|v-add-user-notification                  |                                                 |                   |         |
|v-add-user-package                       |                                                 |                   |         |
|v-add-user-sftp-jail                     |                                                 |                   |         |
|v-add-vesta-softaculous                  |                                                 |                   |         |
|v-add-web-domain                         |                                                 |                   |         |
|v-add-web-domain-alias                   |                                                 |                   |         |
|v-add-web-domain-backend                 |                                                 |                   |         |
|v-add-web-domain-ftp                     | Domain::createFtp                               | Boolean           | 0.0.1   |
|v-add-web-domain-httpauth                |                                                 |                   |         |
|v-add-web-domain-proxy                   |                                                 |                   |         |
|v-add-web-domain-ssl                     |                                                 |                   |         |
|v-add-web-domain-stats                   |                                                 |                   |         |
|v-add-web-domain-stats-user              |                                                 |                   |         |
|v-backup-user                            |                                                 |                   |         |
|v-backup-users                           |                                                 |                   |         |
|v-change-cron-job                        |                                                 |                   |         |
|v-change-database-host-password          |                                                 |                   |         |
|v-change-database-owner                  |                                                 |                   |         |
|v-change-database-password               | Database::changePassword                        | Boolean           | 0.1.0   |
|v-change-database-user                   |                                                 |                   |         |
|v-change-dns-domain-exp                  |                                                 |                   |         |
|v-change-dns-domain-ip                   |                                                 |                   |         |
|v-change-dns-domain-ipv6                 |                                                 |                   |         |
|v-change-dns-domain-soa                  |                                                 |                   |         |
|v-change-dns-domain-tpl                  |                                                 |                   |         |
|v-change-dns-domain-ttl                  |                                                 |                   |         |
|v-change-dns-record                      | Domain::changeDNSRecord                         | Boolean           | 0.1.0   |
|v-change-dns-record-id                   |                                                 |                   |         |
|v-change-domain-owner                    |                                                 |                   |         |
|v-change-firewall-ipv6-rule              |                                                 |                   |         |
|v-change-firewall-rule                   |                                                 |                   |         |
|v-change-fs-file-permission              |                                                 |                   |         |
|v-change-mail-account-password           | Domain::changeMailAccountPassword               | Boolean           | 0.1.0   |
|v-change-mail-account-quota              |                                                 |                   |         |
|v-change-mail-domain-catchall            |                                                 |                   |         |
|v-change-mail-domain-sslcert             |                                                 |                   |         |
|v-change-remote-dns-domain-exp           |                                                 |                   |         |
|v-change-remote-dns-domain-soa           |                                                 |                   |         |
|v-change-remote-dns-domain-ttl           |                                                 |                   |         |
|v-change-sys-config-value                |                                                 |                   |         |
|v-change-sys-hostname                    |                                                 |                   |         |
|v-change-sys-ip-name                     |                                                 |                   |         |
|v-change-sys-ip-nat                      |                                                 |                   |         |
|v-change-sys-ip-owner                    |                                                 |                   |         |
|v-change-sys-ip-status                   |                                                 |                   |         |
|v-change-sys-ipv6-name                   |                                                 |                   |         |
|v-change-sys-ipv6-owner                  |                                                 |                   |         |
|v-change-sys-ipv6-status                 |                                                 |                   |         |
|v-change-sys-language                    |                                                 |                   |         |
|v-change-sys-service-config              |                                                 |                   |         |
|v-change-sys-timezone                    |                                                 |                   |         |
|v-change-sys-vesta-ssl                   |                                                 |                   |         |
|v-change-user-contact                    |                                                 |                   |         |
|v-change-user-language                   |                                                 |                   |         |
|v-change-user-name                       |                                                 |                   |         |
|v-change-user-ns                         |                                                 |                   |         |
|v-change-user-package                    |                                                 |                   |         |
|v-change-user-password                   | User::changePassword                            | Boolean           | 0.1.0   |
|v-change-user-shell                      |                                                 |                   |         |
|v-change-user-template                   |                                                 |                   |         |
|v-change-web-domain-backend-tpl          |                                                 |                   |         |
|v-change-web-domain-docroot .            | Domain::changeDocroot                           | Boolean           | 0.1.0   |
|v-change-web-domain-ftp-password         | Domain::changeFtpPassword                       | Boolean           | 0.0.1   |
|v-change-web-domain-ftp-path             |                                                 |                   |         |
|v-change-web-domain-httpauth             |                                                 |                   |         |
|v-change-web-domain-ip                   |                                                 |                   |         |
|v-change-web-domain-ipv6                 |                                                 |                   |         |
|v-change-web-domain-name                 |                                                 |                   |         |
|v-change-web-domain-proxy-tpl            |                                                 |                   |         |
|v-change-web-domain-sslcert              |                                                 |                   |         |
|v-change-web-domain-sslhome              |                                                 |                   |         |
|v-change-web-domain-stats                |                                                 |                   |         |
|v-change-web-domain-tpl                  |                                                 |                   |         |
|v-check-fs-permission                    |                                                 |                   |         |
|v-check-letsencrypt-domain               |                                                 |                   |         |
|v-check-letsencrypt-domain-vesta         |                                                 |                   |         |
|v-check-user-password                    |                                                 |                   |         |
|v-check-vesta-license                    |                                                 |                   |         |
|v-copy-fs-directory                      |                                                 |                   |         |
|v-copy-fs-file                           |                                                 |                   |         |
|v-deactivate-vesta-license               |                                                 |                   |         |
|v-delete-backup-host                     |                                                 |                   |         |
|v-delete-cron-job                        |                                                 |                   |         |
|v-delete-cron-reports                    |                                                 |                   |         |
|v-delete-cron-restart-job                |                                                 |                   |         |
|v-delete-cron-vesta-autoupdate           |                                                 |                   |         |
|v-delete-database                        | Database::delete                                | Boolean           | 0.0.1   |
|v-delete-database-host                   |                                                 |                   |         |
|v-delete-databases                       |                                                 |                   |         |
|v-delete-dns-domain                      | Domain::deleteDNS                               | Boolean           | 0.0.1   |
|v-delete-dns-domains                     |                                                 |                   |         |
|v-delete-dns-domains-src                 |                                                 |                   |         |
|v-delete-dns-on-web-alias                |                                                 |                   |         |
|v-delete-dns-record                      | Domain::deleteDNSRecord                         | Boolean           | 0.0.1   |
|v-delete-domain                          | Domain::delete                                  | Boolean           | 0.0.1   |
|v-delete-firewall-ban                    |                                                 |                   |         |
|v-delete-firewall-chain                  |                                                 |                   |         |
|v-delete-firewall-ipv6-ban               |                                                 |                   |         |
|v-delete-firewall-ipv6-chain             |                                                 |                   |         |
|v-delete-firewall-ipv6-rule              |                                                 |                   |         |
|v-delete-firewall-rule                   |                                                 |                   |         |
|v-delete-fs-directory                    |                                                 |                   |         |
|v-delete-fs-file                         |                                                 |                   |         |
|v-delete-letsencrypt-domain              |                                                 |                   |         |
|v-delete-letsencrypt-mail-domain         |                                                 |                   |         |
|v-delete-mail-account                    | Domain::deleteMailAccount                       | Boolean           | 0.1.0   |
|v-delete-mail-account-alias              |                                                 |                   |         |
|v-delete-mail-account-autoreply          |                                                 |                   |         |
|v-delete-mail-account-forward            |                                                 |                   |         |
|v-delete-mail-account-fwd-only           |                                                 |                   |         |
|v-delete-mail-domain                     | Domain::deleteMail                              | Boolean           | 0.1.0   |
|v-delete-mail-domain-antispam            |                                                 |                   |         |
|v-delete-mail-domain-antivirus           |                                                 |                   |         |
|v-delete-mail-domain-catchall            |                                                 |                   |         |
|v-delete-mail-domain-dkim                |                                                 |                   |         |
|v-delete-mail-domains                    |                                                 |                   |         |
|v-delete-mail-domain-ssl                 |                                                 |                   |         |
|v-delete-remote-dns-domain               |                                                 |                   |         |
|v-delete-remote-dns-domains              |                                                 |                   |         |
|v-delete-remote-dns-host                 |                                                 |                   |         |
|v-delete-remote-dns-record               |                                                 |                   |         |
|v-delete-sys-firewall                    |                                                 |                   |         |
|v-delete-sys-ip                          |                                                 |                   |         |
|v-delete-sys-ipv6                        |                                                 |                   |         |
|v-delete-sys-quota                       |                                                 |                   |         |
|v-delete-sys-sftp-jail                   |                                                 |                   |         |
|v-delete-user                            |                                                 |                   |         |
|v-delete-user-backup                     |                                                 |                   |         |
|v-delete-user-backup-exclusions          |                                                 |                   |         |
|v-delete-user-favourites                 |                                                 |                   |         |
|v-delete-user-ips                        |                                                 |                   |         |
|v-delete-user-ipv6s                      |                                                 |                   |         |
|v-delete-user-notification               |                                                 |                   |         |
|v-delete-user-package                    |                                                 |                   |         |
|v-delete-user-sftp-jail                  |                                                 |                   |         |
|v-delete-vesta-softaculous               |                                                 |                   |         |
|v-delete-web-domain                      |                                                 |                   |         |
|v-delete-web-domain-alias                |                                                 |                   |         |
|v-delete-web-domain-backend              |                                                 |                   |         |
|v-delete-web-domain-ftp                  | Domain::deleteFtpUser                           | Boolean           | 0.0.1   |
|v-delete-web-domain-httpauth             |                                                 |                   |         |
|v-delete-web-domain-proxy                |                                                 |                   |         |
|v-delete-web-domains                     |                                                 |                   |         |
|v-delete-web-domain-ssl                  | Domain::deleteSsl                               | Boolean           | 0.1.0   |
|v-delete-web-domain-stats                |                                                 |                   |         |
|v-delete-web-domain-stats-user           |                                                 |                   |         |
|v-extract-fs-archive                     |                                                 |                   |         |
|v-generate-api-key                       |                                                 |                   |         |
|v-generate-password-hash                 |                                                 |                   |         |
|v-generate-ssl-cert                      |                                                 |                   |         |
|v-get-dns-domain-value                   |                                                 |                   |         |
|v-get-fs-file-type                       |                                                 |                   |         |
|v-get-mail-account-value                 |                                                 |                   |         |
|v-get-mail-domain-value                  |                                                 |                   |         |
|v-get-sys-timezone                       |                                                 |                   |         |
|v-get-sys-timezones                      |                                                 |                   |         |
|v-get-user-value                         |                                                 |                   |         |
|v-get-web-domain-value                   |                                                 |                   |         |
|v-insert-dns-domain                      |                                                 |                   |         |
|v-insert-dns-record                      |                                                 |                   |         |
|v-insert-dns-records                     |                                                 |                   |         |
|v-list-backup-host                       |                                                 |                   |         |
|v-list-cron-job                          |                                                 |                   |         |
|v-list-cron-jobs                         |                                                 |                   |         |
|v-list-database                          | Database::listDatabase                          |                   | 0.1.0   |
|v-list-database-host                     |                                                 |                   |         |
|v-list-database-hosts                    |                                                 |                   |         |
|v-list-databases                         | Database::listDatabases                         |                   | 0.1.0   |
|v-list-database-types                    |                                                 |                   |         |
|v-list-dns-domain                        | Domain::listDNSDomain                           | DNSDomain         | 0.0.1   |
|v-list-dns-domains                       | Domain::listDNSDomains                          | DNSDomain[]       | 0.0.1   |
|v-list-dns-records                       | Domain::listDNSRecords                          | DNSRecord[]       | 0.0.1   |
|v-list-dns-template                      |                                                 |                   |         |
|v-list-dns-templates                     |                                                 |                   |         |
|v-list-firewall                          |                                                 |                   |         |
|v-list-firewall-ban                      |                                                 |                   |         |
|v-list-firewall-ipv6                     |                                                 |                   |         |
|v-list-firewall-ipv6-ban                 |                                                 |                   |         |
|v-list-firewall-ipv6-rule                |                                                 |                   |         |
|v-list-firewall-rule                     |                                                 |                   |         |
|v-list-fs-directory                      |                                                 |                   |         |
|v-list-letsencrypt-user                  |                                                 |                   |         |
|v-list-mail-account                      |                                                 |                   |         |
|v-list-mail-account-autoreply            |                                                 |                   |         |
|v-list-mail-accounts                     | Domain::listMailAccounts                        | MailAccount[]     | 0.0.1   |
|v-list-mail-domain                       | Domain::listMailDomain                          | MailDomain        | 0.0.1   |
|v-list-mail-domain-dkim                  |                                                 |                   |         |
|v-list-mail-domain-dkim-dns              |                                                 |                   |         |
|v-list-mail-domains                      | Domain::listMailDomains                         | MailDomain[]      | 0.0.1   |
|v-list-mail-domain-ssl                   |                                                 |                   |         |
|v-list-plugin                            |                                                 |                   |         |
|v-list-plugins                           |                                                 |                   |         |
|v-list-remote-dns-hosts                  |                                                 |                   |         |
|v-list-sys-clamd-config                  | Sys::listSysClamdConfig                         |                   | 0.2.0   |
|v-list-sys-config                        | Sys::listSysConfig                              |                   | 0.2.0   |
|v-list-sys-cpu-status                    | Sys::listSysCpuStatus                           |                   | 0.2.0   |
|v-list-sys-db-status                     | Sys::listSysDbStatus                            |                   | 0.2.0   |
|v-list-sys-disk-status                   | Sys::listSysDiskStatus                          |                   | 0.2.0   |
|v-list-sys-dns-status                    | Sys::listSysDnsStatus                           |                   | 0.2.0   |
|v-list-sys-dovecot-config                | Sys::listSysDovecotConfig                       |                   | 0.2.0   |
|v-list-sys-info                          | Sys::listSysInfo                                |                   | 0.2.0   |
|v-list-sys-interfaces                    | Sys::listSysInterfaces                          |                   | 0.2.0   |
|v-list-sys-ip                            | Sys::listSysIp                                  |                   | 0.2.0   |
|v-list-sys-ips                           | Sys::listSysIps                                 |                   | 0.2.0   |
|v-list-sys-languages                     | Sys::listSysLanguages                           |                   | 0.2.0   |
|v-list-sys-mail-status                   | Sys::listSysMailStatus                          |                   | 0.2.0   |
|v-list-sys-memory-status                 | Sys::listSysMemoryStatus                        |                   | 0.2.0   |
|v-list-sys-mysql-config                  | Sys::listSysMysqlConfig                         |                   | 0.2.0   |
|v-list-sys-network-status                | Sys::listSysNetworkStatus                       |                   | 0.2.0   |
|v-list-sys-nginx-config                  | Sys::listSysNginxConfig                         |                   | 0.2.0   |
|v-list-sys-pgsql-config                  | Sys::listSysPgsqlConfig                         |                   | 0.2.0   |
|v-list-sys-php-config                    | Sys::listSysPhpConfig                           |                   | 0.2.0   |
|v-list-sys-proftpd-config                | Sys::listSysProftpdConfig                       |                   | 0.2.0   |
|v-list-sys-rrd                           | Sys::listSysRrd                                 |                   | 0.2.0   |
|v-list-sys-services                      | Sys::listSysServices                            |                   | 0.2.0   |
|v-list-sys-shells                        | Sys::listSysShells                              |                   | 0.2.0   |
|v-list-sys-spamd-config                  | Sys::listSysSpamdConfig                         |                   | 0.2.0   |
|v-list-sys-users                         | Sys::listSysUsers                               |                   | 0.2.0   |
|v-list-sys-vesta-autoupdate              | Sys::listSysVestaAutoupdate                     |                   | 0.2.0   |
|v-list-sys-vesta-ssl                     | Sys::listSysVestaSsl                            |                   | 0.2.0   |
|v-list-sys-vesta-updates                 | Sys::listSysVestaUpdates                        |                   | 0.2.0   |
|v-list-sys-vsftpd-config                 | Sys::listSysVsftpdConfig                        |                   | 0.2.0   |
|v-list-sys-web-status                    | Sys::listSysWebStatus                           |                   | 0.2.0   |
|v-list-user                              | User::get                                       | User              | 0.0.1   |
|v-list-user-backup                       |                                                 |                   |         |
|v-list-user-backup-exclusions            |                                                 |                   |         |
|v-list-user-backups                      |                                                 |                   |         |
|v-list-user-favourites                   |                                                 |                   |         |
|v-list-user-ips                          |                                                 |                   |         |
|v-list-user-log                          |                                                 |                   |         |
|v-list-user-notifications                |                                                 |                   |         |
|v-list-user-ns                           |                                                 |                   |         |
|v-list-user-package                      |                                                 |                   |         |
|v-list-user-packages                     |                                                 |                   |         |
|v-list-users                             | User::listUsers                                 | User[]            | 0.0.1   |
|v-list-users-stats                       |                                                 |                   |         |
|v-list-user-stats                        |                                                 |                   |         |
|v-list-web-domain                        | Domain::listWebDomain                           | WebDomain         | 0.0.1   |
|v-list-web-domain-accesslog              |                                                 |                   |         |
|v-list-web-domain-errorlog               |                                                 |                   |         |
|v-list-web-domains                       | Domain::listWebDomains                          | WebDomain[]       | 0.0.1   |
|v-list-web-domain-ssl                    |                                                 |                   |         |
|v-list-web-stats                         |                                                 |                   |         |
|v-list-web-templates                     |                                                 |                   |         |
|v-list-web-templates-backend             |                                                 |                   |         |
|v-list-web-templates-proxy               |                                                 |                   |         |
|v-move-fs-directory                      |                                                 |                   |         |
|v-move-fs-file                           |                                                 |                   |         |
|v-open-fs-config                         |                                                 |                   |         |
|v-open-fs-file                           |                                                 |                   |         |
|v-rebuild-config-dovecot          |                                                 |                   |         |
|v-rebuild-config-exim          |                                                 |                   |         |
|v-rebuild-config-httpd          |                                                 |                   |         |
|v-rebuild-config-nginx          |                                                 |                   |         |
|v-rebuild-cron-jobs          |                                                 |                   |         |
|v-rebuild-databases          |                                                 |                   |         |
|v-rebuild-dns-domain          |                                                 |                   |         |
|v-rebuild-dns-domains          |                                                 |                   |         |
|v-rebuild-mail-domains          |                                                 |                   |         |
|v-rebuild-user          |                                                 |                   |         |
|v-rebuild-web-domains          |                                                 |                   |         |
|v-restart-cron          |                                                 |                   |         |
|v-restart-dns          |                                                 |                   |         |
|v-restart-ftp          |                                                 |                   |         |
|v-restart-mail          |                                                 |                   |         |
|v-restart-proxy          |                                                 |                   |         |
|v-restart-service          |                                                 |                   |         |
|v-restart-system          |                                                 |                   |         |
|v-restart-web          |                                                 |                   |         |
|v-restart-web-backend          |                                                 |                   |         |
|v-restore-user          |                                                 |                   |         |
|v-schedule-letsencrypt-domain          |                                                 |                   |         |
|v-schedule-user-backup          |                                                 |                   |         |
|v-schedule-user-restore          |                                                 |                   |         |
|v-schedule-vesta-softaculous          |                                                 |                   |         |
|v-search-domain-owner          |                                                 |                   |         |
|v-search-fs-object          |                                                 |                   |         |
|v-search-object          |                                                 |                   |         |
|v-search-plugins          |                                                 |                   |         |
|v-search-user-object          |                                                 |                   |         |
|v-sign-letsencrypt-csr          |                                                 |                   |         |
|v-start-service          |                                                 |                   |         |
|v-stop-firewall          |                                                 |                   |         |
|v-stop-firewall-ipv6          |                                                 |                   |         |
|v-stop-service          |                                                 |                   |         |
|v-suspend-cron-job          |                                                 |                   |         |
|v-suspend-cron-jobs          |                                                 |                   |         |
|v-suspend-database          |                                                 |                   |         |
|v-suspend-database-host          |                                                 |                   |         |
|v-suspend-databases          |                                                 |                   |         |
|v-suspend-dns-domain          |                                                 |                   |         |
|v-suspend-dns-domains          |                                                 |                   |         |
|v-suspend-dns-record          |                                                 |                   |         |
|v-suspend-domain          |                                                 |                   |         |
|v-suspend-firewall-ipv6-rule          |                                                 |                   |         |
|v-suspend-firewall-rule          |                                                 |                   |         |
|v-suspend-mail-account          |                                                 |                   |         |
|v-suspend-mail-accounts          |                                                 |                   |         |
|v-suspend-mail-domain          |                                                 |                   |         |
|v-suspend-mail-domains          |                                                 |                   |         |
|v-suspend-remote-dns-host          |                                                 |                   |         |
|v-suspend-user          |                                                 |                   |         |
|v-suspend-web-domain          |                                                 |                   |         |
|v-suspend-web-domains          |                                                 |                   |         |
|v-sync-dns-cluster          |                                                 |                   |         |
|v-unsuspend-cron-job          |                                                 |                   |         |
|v-unsuspend-cron-jobs          |                                                 |                   |         |
|v-unsuspend-database          |                                                 |                   |         |
|v-unsuspend-database-host          |                                                 |                   |         |
|v-unsuspend-databases          |                                                 |                   |         |
|v-unsuspend-dns-domain          |                                                 |                   |         |
|v-unsuspend-dns-domains          |                                                 |                   |         |
|v-unsuspend-dns-record          |                                                 |                   |         |
|v-unsuspend-domain          |                                                 |                   |         |
|v-unsuspend-firewall-ipv6-rule          |                                                 |                   |         |
|v-unsuspend-firewall-rule          |                                                 |                   |         |
|v-unsuspend-mail-account          |                                                 |                   |         |
|v-unsuspend-mail-accounts          |                                                 |                   |         |
|v-unsuspend-mail-domain          |                                                 |                   |         |
|v-unsuspend-mail-domains          |                                                 |                   |         |
|v-unsuspend-remote-dns-host          |                                                 |                   |         |
|v-unsuspend-user          |                                                 |                   |         |
|v-unsuspend-web-domain          |                                                 |                   |         |
|v-unsuspend-web-domains          |                                                 |                   |         |
|v-update-database-disk          |                                                 |                   |         |
|v-update-databases-disk          |                                                 |                   |         |
|v-update-dns-templates          |                                                 |                   |         |
|v-update-firewall          |                                                 |                   |         |
|v-update-firewall-ipv6          |                                                 |                   |         |
|v-update-host-certificate          |                                                 |                   |         |
|v-update-letsencrypt-ssl          |                                                 |                   |         |
|v-update-mail-domain-disk          |                                                 |                   |         |
|v-update-mail-domains-disk          |                                                 |                   |         |
|v-update-sys-ip          |                                                 |                   |         |
|v-update-sys-ip-counters          |                                                 |                   |         |
|v-update-sys-queue          |                                                 |                   |         |
|v-update-sys-rrd          |                                                 |                   |         |
|v-update-sys-rrd-apache2          |                                                 |                   |         |
|v-update-sys-rrd-ftp          |                                                 |                   |         |
|v-update-sys-rrd-httpd          |                                                 |                   |         |
|v-update-sys-rrd-la          |                                                 |                   |         |
|v-update-sys-rrd-mail          |                                                 |                   |         |
|v-update-sys-rrd-mem          |                                                 |                   |         |
|v-update-sys-rrd-mysql          |                                                 |                   |         |
|v-update-sys-rrd-net          |                                                 |                   |         |
|v-update-sys-rrd-nginx          |                                                 |                   |         |
|v-update-sys-rrd-pgsql          |                                                 |                   |         |
|v-update-sys-rrd-ssh          |                                                 |                   |         |
|v-update-sys-vesta          |                                                 |                   |         |
|v-update-sys-vesta-all          |                                                 |                   |         |
|v-update-user-backup-exclusions          |                                                 |                   |         |
|v-update-user-counters          |                                                 |                   |         |
|v-update-user-disk          |                                                 |                   |         |
|v-update-user-package          |                                                 |                   |         |
|v-update-user-quota          |                                                 |                   |         |
|v-update-user-stats          |                                                 |                   |         |
|v-update-web-domain-disk          |                                                 |                   |         |
|v-update-web-domains-disk          |                                                 |                   |         |
|v-update-web-domain-ssl          |                                                 |                   |         |
|v-update-web-domains-stat          |                                                 |                   |         |
|v-update-web-domain-stat          |                                                 |                   |         |
|v-update-web-domains-traff          |                                                 |                   |         |
|v-update-web-domain-traff          |                                                 |                   |         |
|v-update-web-templates          |                                                 |                   |         |
