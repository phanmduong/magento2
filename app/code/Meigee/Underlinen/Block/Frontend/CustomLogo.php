<?php
namespace Meigee\Underlinen\Block\Frontend;    
use \Magento\Framework\UrlInterface;
use \Magento\Store\Model\ScopeInterface;

class CustomLogo  extends \Magento\Theme\Block\Html\Header\Logo
{
    protected $_urlBuilder;
    private $cnf;
    
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageHelper,
        UrlInterface $urlBuilder,
        array $data = []
    ) 
    {
          parent::__construct($context, $fileStorageHelper, $data);
          $this->cnf = $this->_scopeConfig->getValue('underlinen_general/underlinen_logo', ScopeInterface::SCOPE_STORE);   
    }
    
    
    public function getLogoSrc($cnfName = 'custom_logo_image', $cnfStatus='custom_logo_status')
    {
        if ($this->cnf[$cnfStatus])
        {
            $base_url = $this->_urlBuilder->getBaseUrl(['_type' => UrlInterface::URL_TYPE_MEDIA]);
            return $base_url .'/logo/'. $this->cnf[$cnfName];
        }
        else
        {
            return parent::getLogoSrc();
        }
    }
    
    public function getLogoAlt($cnfName = 'custom_logo_alt')
    {
        if ($this->cnf['custom_logo_status'])
        {
            return $this->cnf[$cnfName];
        }
        else
        {
            return parent::getLogoAlt();
        }
    }
    
    
    
    
}
