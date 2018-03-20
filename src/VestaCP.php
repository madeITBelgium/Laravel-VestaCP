<?php

namespace MadeITBelgium\VestaCP;

use GuzzleHttp\Client;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2018 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.0.txt    LGPL
 */
class VestaCP
{
    protected $version = '0.0.1';
    private $server;
    private $hash;

    private $client;

    private $lastResultCode;

    /**
     * Construct VestaCP.
     *
     * @param $server
     * @param $hash
     * @param $client
     */
    public function __construct($server, $hash, $client = null)
    {
        $this->server = $server;
        $this->hash = $hash;

        if ($client == null) {
            $this->client = new Client([
                'base_uri' => 'https://'.$server.':8083',
                'timeout'  => 5.0,
                'headers'  => [
                    'User-Agent' => 'Made I.T. Vesta SDK V'.$this->version,
                    'Accept'     => 'application/json',
                ],
            ]);
        } else {
            $this->client = $client;
        }
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Execute API call.
     *
     * @param $endpoint
     * @param $returnCode
     * @param $parameters
     */
    public function call($command, $returnCode = '', $parameters = [])
    {
        $requestData = [
            'hash'       => $this->hash,
            'cmd'        => $command,
            'returncode' => $returnCode,
        ];

        $i = 1;
        foreach ($parameters as $val) {
            $requestData['arg'.$i++] = $val;
        }
        $requestData['arg'.$i++] = 'json';

        $response = $this->client->request('GET', '/api/');
        if ($response->getStatusCode() == 200) {
            $body = (string) $response->getBody();
        } else {
            throw \Exception('Vesta error: '.$response->getStatusCode());
        }

        $this->lastResultCode = 0;

        if (!$this->isJson($body) || is_numeric($body)) {
            $this->checkResultCode($body);

            return true;
        }

        return json_decode($body, true);
    }

    private function isJson($body)
    {
        json_decode($body);

        return json_last_error() == JSON_ERROR_NONE;
    }

    private function checkResultCode($output)
    {
        switch ($output) {
            case 0: return true; break; //Command Successful

            case 1: throw new \Exception('Not enough arguments provided'); break;
            case 2: throw new \Exception('Object or argument is not valid'); break;
            case 3: throw new \Exception('Object doesn\'t exist'); break;
            case 4: throw new \Exception('Object already exists'); break;
            case 5: throw new \Exception('Object is suspended'); break;
            case 6: throw new \Exception('Object is already unsuspended'); break;
            case 7: throw new \Exception('Object can\'t be deleted because is used by the other object'); break;
            case 8: throw new \Exception('Object cannot be created because of hosting package limits'); break;
            case 9: throw new \Exception('Wrong password'); break;
            case 10: throw new \Exception('Object cannot be accessed be the user'); break;
            case 11: throw new \Exception('Subsystem is disabled'); break;
            case 12: throw new \Exception('Configuration is broken'); break;
            case 13: throw new \Exception('Not enough disk space to complete the action'); break;
            case 14: throw new \Exception('Server is to busy to complete the action'); break;
            case 15: throw new \Exception('Connection failed. Host is unreachable'); break;
            case 16: throw new \Exception('FTP server is not responding'); break;
            case 17: throw new \Exception('Database server is not responding'); break;
            case 18: throw new \Exception('RRDtool failed to update the database'); break;
            case 19: throw new \Exception('Update operation failed'); break;
            case 20: throw new \Exception('Service restart failed'); break;
        }
    }

    public function user()
    {
        $user = new Command\User();
        $user->setVestaCP($this);

        return $user;
    }

    public function domain()
    {
        $domain = new Command\Domain();
        $domain->setVestaCP($this);

        return $domain;
    }

    public function getLastResultCode()
    {
        return $this->lastResultCode;
    }

    public function getLastResultMessage()
    {
        $this->lastResultMessage;
    }
}
