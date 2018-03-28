<?php

namespace MadeITBelgium\VestaCP\Object;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2019 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class DNSRecord
{
    private $id;
    private $record;
    private $type;
    private $priority;
    private $value;
    private $suspended;
    private $time;
    private $date;
    
    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'get-records') {
            return $this->listDnsRecords($data);
        }
    }

    private function listDnsRecords($data)
    {
        $result = [];
        foreach ($data as $data) {
            $obj = $this->parseDnsRecord($data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseDnsRecord($data)
    {
        $obj = new self();
        $obj->setId($data['ID']);
        $obj->setRecord($data['RECORD']);
        $obj->setType($data['TYPE']);
        $obj->setPriority($data['PRIORITY']);
        $obj->setValue($data['VALUE']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);
        return $obj;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getRecord(){
        return $this->record;
    }

    public function setRecord($record){
        $this->record = $record;
    }
    
    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getPriority(){
        return $this->priority;
    }

    public function setPriority($priority){
        $this->priority = $priority;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public function getSuspended(){
        return $this->suspended;
    }

    public function setSuspended($suspended){
        $this->suspended = $suspended;
    }

    public function getTime(){
        return $this->time;
    }

    public function setTime($time){
        $this->time = $time;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }
}
