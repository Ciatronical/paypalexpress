<?php

/**
 * Paypal configuration mapper
 *
 * Class Paypal_Models_Mapper_PaypalConfigMapper
 */
class Paypalexpress_Models_Mapper_PaypalExpressSettingsMapper extends Application_Model_Mappers_Abstract
{

    /**
     * @var string
     */
    protected $_dbTable = 'Paypalexpress_Models_Dbtables_PaypalExpressSettingsDbtable';

    /**
     * @var string
     */
    protected $_model = 'Paypalexpress_Models_Models_PaypalExpressSettingsModel';

    /**
     * @param Paypal_Models_Models_PaypalConfigModel $config
     * @throws Exceptions_SeotoasterException
     */
     
     
     
     
    public function save($config)
    {
        if (!$config instanceof $this->_model) {
            throw new Exceptions_SeotoasterException('Given parameter should be ' . $this->_model . ' instance');
        }
        $data = array(

            
            'prodID' => $config->getProdID(),
            'sandID' => $config->getSandID(),
            'useSandbox' => $config->getUseSandbox(),
            'usePaypalfee' => $config->getUsePaypalfee(),
            'paypalfee' => $config->getPaypalfee()

        );
        $where = "id=1";
        $this->getDbTable()->update($data, $where);

    }

    /**
     * Get all config
     *
     * @return array|null
     */
    public function selectSettings()
    {
        return $this->fetchAll();
    }

}