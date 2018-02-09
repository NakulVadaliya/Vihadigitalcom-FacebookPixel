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

class Info extends \Magento\Backend\Block\AbstractBlock implements
    \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * Retrieve element HTML markup.
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element  = null;
        $logopath = 'http://vdcstore.com/media/vdc_facebookpixel_extensions/vdc.jpg';
        $html     = <<<HTML
<div style="background: url('$logopath') no-repeat scroll 15px 15px #f8f8f8;
border:1px solid #ccc; min-height:100px; margin:5px 0;
padding:15px 15px 15px 140px;">
<p>
<strong>Magento Online Stores &amp; Extensions</strong><br />
<a href="http://vdcstore.com" target="_blank">Vdc</a>
offers a wide choice of products and services for your online business.
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
<div>
<p style="margin: 20px 0 20px 0;">
<strong>Products and services you might be interested in:</strong></p>
<a href="http://vdcstore.com/magento-2-facebook-pixel"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/facebook-pixel-for-magento.jpg"
     alt="Facebook Pixel" style="border:1px solid #ccc;" />
</a>
<a href="http://vdcstore.com/webpay-magento-2-extensions"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/webpay-magento-2-extensions.jpg"
     alt="Webpay" style="border:1px solid #ccc;" />
</a>
<a href="http://vdcstore.com/magento-2-to-economic-integration"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/economic-integration.jpg"
     alt="economic-integration" style="border:1px solid #ccc;" />
</a>
<a href="http://vdcstore.com/magento-2-saved-credit-card-payment-module"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/save credit card extension.jpg"
     alt="save credit card extension" style="border:1px solid #ccc;" />
</a>
<a href="http://vdcstore.com/magento-2-australia-post-shipping-extension"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/Australia post shipping.jpg"
     alt="Australia post shipping" style="border:1px solid #ccc;" />
</a>
<a href="http://vdcstore.com/magento-2-one-page-checkout"
   target="_blank" style="margin: 0 20px 20px 0; display: inline-block;">
<img src="http://vdcstore.com/media/vdc_facebookpixel_extensions/Responsive One Page Checkout.jpg"
     alt="Responsive One Page Checkout" style="border:1px solid #ccc;" />
</a>
</div>
HTML;
        return $html;
    }
}
