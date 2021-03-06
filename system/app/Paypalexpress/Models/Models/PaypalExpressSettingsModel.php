<?php
/**
 * Paypal configuration model
 *class Paypalexpress_Models_Models_PaypalExpressSettingsModel extends Application_Model_Models_Abstract
 * Class Paypal_Models_Models_PaypalConfigModel
 */
//class xxx extends Application_Model_Models_Abstract
class Paypalexpress_Models_Models_PaypalExpressSettingsModel extends Application_Model_Models_Abstract
{

    protected $_id = '';
    protected $_prodID = '';
    protected $_sandID = '';
    protected $_useSandbox = '';
	protected $_usePaypalfee= '';
	protected $_paypalfee= '';

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
        //$_id=$id;
        return $this;
    }

   

    public function getProdID()
    {
        return $this->_prodID;
    }

    public function setProdID($prodID)
    {
    	
        $this->_prodID = $prodID;
        //$_prodID=$prodID;
        return $this;
    }


    public function getSandID()
    {
        return $this->_sandID;
    }

    public function setSandID($sandID)
    {
        $this->_sandID = $sandID;
       
        return $this;
    }


    
    public function getUseSandbox()
    {
        return $this->_useSandbox;
    }

    public function setUseSandbox($useSandbox)
    {
        $this->_useSandbox = $useSandbox;
       
        return $this;
    }
    
    
      public function getUsePaypalfee()
    {
        return $this->_usePaypalfee;
    }

    public function setUsePaypalfee($usePaypalfee)
    {
        $this->_usePaypalfee = $usePaypalfee;
       
        return $this;
    }
    
    public function getPaypalfee()
    {
        return $this->_paypalfee;
    }

    public function setPaypalfee($paypalfee)
    {
        $this->_paypalfee = $paypalfee;
       
        return $this;
    }
    
    
  

}
