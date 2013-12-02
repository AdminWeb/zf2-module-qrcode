QR Code for Zend Framework 2
=================

A zend framework 2 module for generate qr code using the google api.

See more in https://developers.google.com/chart/infographics/docs/qr_codes

#### Usage:

1. In the controller

   ```php
	$qr = $this->getServiceLocator()->get('QRCode');
        $qr->isHttps(); // or $qr->isHttp();
        $qr->setData('Lorem Ipsum');
        $qr->setDimensions(50, 50);
        return new ViewModel(array('img'=> $qr->getResult()));
    ```

2. In the view

   ```php
	<img src="<?php echo $this->img; ?>" />
    ```

[![Total Downloads](https://poser.pugx.org/simkimsia/utility_behaviors/d/total.png)](https://packagist.org/packages/adminweb/qrcode-zf2-module)
[![Latest Stable Version](https://poser.pugx.org/simkimsia/utility_behaviors/v/stable.png)](https://packagist.org/packages/adminweb/qrcode-zf2-module)