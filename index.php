<?php

date_default_timezone_set('UTC');

include_once 'alicloud-php-updaterecord/V20150109/AlicloudUpdateRecord.php';

use Roura\Alicloud\V20150109\AlicloudUpdateRecord;

$AccessKeyId     = 'LTAI5tRKV9fRZ2BHG4mq2Wqt';
$AccessKeySecret = 'SVAXOvHLWy7LrR0ltpiSCl1RyvM1Zq';
$updater         = new AlicloudUpdateRecord($AccessKeyId, $AccessKeySecret);

$newIp = $_SERVER['REMOTE_ADDR']; // New IP

$updater->setDomainName('xzhang.ink');
$updater->setRecordType('A');
$updater->setRR('@');
$updater->setValue($newIp);

print_r($updater->sendRequest());
