<?php
/**
 * @category  Vihadigitalcom
 * @package   Vihadigitalcom_FacebookPixel
 * @author    Vihadigitalcom
 * @copyright Copyright (c) 2017 Vihadigitalcom (http://vdcstore.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License
 */

namespace Vihadigitalcom\FacebookPixel\Block\Adminhtml;

use Magento\Framework\Data\Form\Element\AbstractElement;

class About extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @var \Vihadigitalcom\FacebookPixel\Helper\Data
     */
    public $helper;
    
    /**
     * Constructor
     *
     * @param \Vihadigitalcom\FacebookPixel\Helper\Data $helper
     */
    public function __construct(\Vihadigitalcom\FacebookPixel\Helper\Data $helper)
    {
        $this->helper = $helper;
    }
    
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $version  = $this->helper->getExtensionVersion();
        $logopath = 'http://vdcstore.com/media/vdc_facebookpixel_extensions/vdc.jpg';
        $html     = <<<HTML
<div style="background: url('$logopath') no-repeat scroll 15px 15px #f8f8f8; 
border:1px solid #ccc; min-height:100px; margin:5px 0; 
padding:15px 15px 15px 140px;">
<p>
<strong>Vihadigitalcom Facebook Pixel Extension v$version</strong><br />
Adds Facebook Pixel with Dynamic Ads code on appropriate pages. Passes W3C 
validation. Easy to install and use.
</p>
<p>
Website: <a href="http://vdcstore.com" target="_blank">www.vdcstore.com</a>
<br />Like, share and follow us on 
<a href="https://www.facebook.com/vdc.commerce.3" target="_blank">Facebook</a>, 
<a href="https://plus.google.com/109682738789016111806" target="_blank">Google+</a>, 
<a href="https://in.pinterest.com/vdcstore" target="_blank">Pinterest</a>, and 
<a href="https://twitter.com/StoreVdc" target="_blank">Twitter</a>.<br />
If you have any questions send email at 
<a href="mailto:service@vihadigitalcommerce.com">service@vihadigitalcommerce.com</a>.
</p>
</div>
HTML;
        return $html;
    }
}
