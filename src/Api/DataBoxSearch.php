<?php

namespace Defr\CzechDataBox\Api;

class DataBoxSearch extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = array(
  'tIdDbInput' => 'Defr\\CzechDataBox\\Api\\tIdDbInput',
  'tReqStatusOutput' => 'Defr\\CzechDataBox\\Api\\tReqStatusOutput',
  'tDbReqStatus' => 'Defr\\CzechDataBox\\Api\\tDbReqStatus',
  'tDbOwnerInfo' => 'Defr\\CzechDataBox\\Api\\tDbOwnerInfo',
  'tDbOwnersArray' => 'Defr\\CzechDataBox\\Api\\tDbOwnersArray',
  'tDbUserInfo' => 'Defr\\CzechDataBox\\Api\\tDbUserInfo',
  'tDbUsersArray' => 'Defr\\CzechDataBox\\Api\\tDbUsersArray',
  'tFindDBInput' => 'Defr\\CzechDataBox\\Api\\tFindDBInput',
  'tFindDBOuput' => 'Defr\\CzechDataBox\\Api\\tFindDBOuput',
  'tCreateDBInput' => 'Defr\\CzechDataBox\\Api\\tCreateDBInput',
  'tCreateDBOutput' => 'Defr\\CzechDataBox\\Api\\tCreateDBOutput',
  'tDeleteDBInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBInput',
  'tUpdateDBInput' => 'Defr\\CzechDataBox\\Api\\tUpdateDBInput',
  'tAddDBUserInput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserInput',
  'tAddDBUserOutput' => 'Defr\\CzechDataBox\\Api\\tAddDBUserOutput',
  'tDelDBUserInput' => 'Defr\\CzechDataBox\\Api\\tDelDBUserInput',
  'tUpdDBUserInput' => 'Defr\\CzechDataBox\\Api\\tUpdDBUserInput',
  'tNewAccDataInput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataInput',
  'tNewAccDataOutput' => 'Defr\\CzechDataBox\\Api\\tNewAccDataOutput',
  'tOwnerInfoInput' => 'Defr\\CzechDataBox\\Api\\tOwnerInfoInput',
  'tDisableExternallyInput' => 'Defr\\CzechDataBox\\Api\\tDisableExternallyInput',
  'tGetDBUsersOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBUsersOutput',
  'tCheckDBOutput' => 'Defr\\CzechDataBox\\Api\\tCheckDBOutput',
  'tActivateInput' => 'Defr\\CzechDataBox\\Api\\tActivateInput',
  'tActivateOutput' => 'Defr\\CzechDataBox\\Api\\tActivateOutput',
  'tCreateDBPFOInfoInput' => 'Defr\\CzechDataBox\\Api\\tCreateDBPFOInfoInput',
  'tCreateDBPFOInfoOutput' => 'Defr\\CzechDataBox\\Api\\tCreateDBPFOInfoOutput',
  'tDummyInput' => 'Defr\\CzechDataBox\\Api\\tDummyInput',
  'tGetOwnInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput',
  'tGetUserInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetUserInfoOutput',
  'tGetPasswInfoOutput' => 'Defr\\CzechDataBox\\Api\\tGetPasswInfoOutput',
  'tChngPasswInput' => 'Defr\\CzechDataBox\\Api\\tChngPasswInput',
  'tGetDBListInput' => 'Defr\\CzechDataBox\\Api\\tGetDBListInput',
  'tGetDBListOutput' => 'Defr\\CzechDataBox\\Api\\tGetDBListOutput',
  'tDeleteDBPromptlyInput' => 'Defr\\CzechDataBox\\Api\\tDeleteDBPromptlyInput',
  'tPDZInfoInput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoInput',
  'tPDZRec' => 'Defr\\CzechDataBox\\Api\\tPDZRec',
  'tPDZRecArray' => 'Defr\\CzechDataBox\\Api\\tPDZRecArray',
  'tPDZInfoOutput' => 'Defr\\CzechDataBox\\Api\\tPDZInfoOutput',
);

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'C:\www\CzechDataBox\Resources\db_search.wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
  'features' => 1,
), $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param tFindDBInput $parameter
     *
     * @return tFindDBOuput
     */
    public function FindDataBox(tFindDBInput $parameter)
    {
        return $this->__soapCall('FindDataBox', array($parameter));
    }

    /**
     * @param tIdDbInput $parameter
     *
     * @return tCheckDBOutput
     */
    public function CheckDataBox(tIdDbInput $parameter)
    {
        return $this->__soapCall('CheckDataBox', array($parameter));
    }

    /**
     * @param tGetDBListInput $parameter
     *
     * @return tGetDBListOutput
     */
    public function GetDataBoxList(tGetDBListInput $parameter)
    {
        return $this->__soapCall('GetDataBoxList', array($parameter));
    }

    /**
     * @param tPDZInfoInput $parameter
     *
     * @return tPDZInfoOutput
     */
    public function PDZInfo(tPDZInfoInput $parameter)
    {
        return $this->__soapCall('PDZInfo', array($parameter));
    }
}
