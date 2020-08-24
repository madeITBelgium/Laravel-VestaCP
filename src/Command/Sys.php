<?php

namespace MadeITBelgium\VestaCP\Command;


/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2018 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class Sys
{
    private $vestacp;

    /**
     * set VestaCP.
     *
     * @param $vestacp
     */
    public function setVestaCP($vestacp)
    {
        $this->vestacp = $vestacp;
    }

    /**
     * get VestaCP.
     *
     * @param $vestacp
     */
    public function getVestaCP()
    {
        return $this->vestacp;
    }
    
    /*
     * v-list-sys-clamd-config
     */
	public function listSysClamdConfig() {
        $response = $this->vestacp->call('v-list-sys-clamd-config');
        return $response;
    }

    /*
     * v-list-sys-dovecot-config
     */
    public function listSysDovecotConfig() {
        $response = $this->vestacp->call('v-list-sys-dovecot-config');
        return $response;
    }

    /*
     * v-list-sys-mail-status
     */
    public function listSysMailStatus() {
        $response = $this->vestacp->call('v-list-sys-mail-status');
        return $response;
    }

    /*
     * v-list-sys-php-config
     */
    public function listSysPhpConfig() {
        $response = $this->vestacp->call('v-list-sys-php-config');
        return $response;
    }

    /*
     * v-list-sys-users
     */
    public function listSysUsers() {
        $response = $this->vestacp->call('v-list-sys-users');
        return $response;
    }

    /*
     * v-list-sys-config
     */
    public function listSysConfig() {
        $response = $this->vestacp->call('v-list-sys-config');
        return $response;
    }

    /*
     * v-list-sys-info
     */
    public function listSysInfo() {
        $response = $this->vestacp->call('v-list-sys-info');
        return $response;
    }

    /*
     * v-list-sys-memory-status
     */
    public function listSysMemoryStatus() {
        $response = $this->vestacp->call('v-list-sys-memory-status');
        return $response;
    }

    /*
     * v-list-sys-proftpd-config
     */
    public function listSysProftpdConfig() {
        $response = $this->vestacp->call('v-list-sys-proftpd-config');
        return $response;
    }

    /*
     * v-list-sys-vesta-autoupdate
     */
    public function listSysVestaAutoupdate() {
        $response = $this->vestacp->call('v-list-sys-vesta-autoupdate');
        return $response;
    }

    /*
     * v-list-sys-cpu-status
     */
    public function listSysCpuStatus() {
        $response = $this->vestacp->call('v-list-sys-cpu-status');
        return $response;
    }

    /*
     * v-list-sys-interfaces
     */
    public function listSysInterfaces() {
        $response = $this->vestacp->call('v-list-sys-interfaces');
        return $response;
    }

    /*
     * v-list-sys-mysql-config
     */
    public function listSysMysqlConfig() {
        $response = $this->vestacp->call('v-list-sys-mysql-config');
        return $response;
    }

    /*
     * v-list-sys-rrd
     */
    public function listSysRrd() {
        $response = $this->vestacp->call('v-list-sys-rrd');
        return $response;
    }

    /*
     * v-list-sys-vesta-ssl
     */
    public function listSysVestaSsl() {
        $response = $this->vestacp->call('v-list-sys-vesta-ssl');
        return $response;
    }

    /*
     * v-list-sys-db-status
     */
    public function listSysDbStatus() {
        $response = $this->vestacp->call('v-list-sys-db-status');
        return $response;
    }

    /*
     * v-list-sys-ip
     */
    public function listSysIp() {
        $response = $this->vestacp->call('v-list-sys-ip');
        return $response;
    }

    /*
     * v-list-sys-network-status
     */
    public function listSysNetworkStatus() {
        $response = $this->vestacp->call('v-list-sys-network-status');
        return $response;
    }

    /*
     * v-list-sys-services
     */
    public function listSysServices() {
        $response = $this->vestacp->call('v-list-sys-services');
        return $response;
    }

    /*
     * v-list-sys-vesta-updates
     */
    public function listSysVestaUpdates() {
        $response = $this->vestacp->call('v-list-sys-vesta-updates');
        return $response;
    }

    /*
     * v-list-sys-disk-status
     */
    public function listSysDiskStatus() {
        $response = $this->vestacp->call('v-list-sys-disk-status');
        return $response;
    }

    /*
     * v-list-sys-ips
     */
    public function listSysIps() {
        $response = $this->vestacp->call('v-list-sys-ips');
        return $response;
    }

    /*
     * v-list-sys-nginx-config
     */
    public function listSysNginxConfig() {
        $response = $this->vestacp->call('v-list-sys-nginx-config');
        return $response;
    }

    /*
     * v-list-sys-shells
     */
    public function listSysShells() {
        $response = $this->vestacp->call('v-list-sys-shells');
        return $response;
    }

    /*
     * v-list-sys-vsftpd-config
     */
    public function listSysVsftpdConfig() {
        $response = $this->vestacp->call('v-list-sys-vsftpd-config');
        return $response;
    }

    /*
     * v-list-sys-dns-status
     */
    public function listSysDnsStatus() {
        $response = $this->vestacp->call('v-list-sys-dns-status');
        return $response;
    }

    /*
     * v-list-sys-languages
     */
    public function listSysLanguages() {
        $response = $this->vestacp->call('v-list-sys-languages');
        return $response;
    }

    /*
     * v-list-sys-pgsql-config
     */
    public function listSysPgsqlConfig() {
        $response = $this->vestacp->call('v-list-sys-pgsql-config');
        return $response;
    }

    /*
     * v-list-sys-spamd-config
     */
    public function listSysSpamdConfig() {
        $response = $this->vestacp->call('v-list-sys-spamd-config');
        return $response;
    }

    /*
     * v-list-sys-web-status
     */
    public function listSysWebStatus() {
        $response = $this->vestacp->call('v-list-sys-web-status');
        return $response;
    }
    
    public function getLastResultCode()
    {
        return $this->vestacp->getLastResultCode();
    }
}
