zf2-module-qrcode
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
        return new ViewModel(array('img'=> $qr->getParameters()));
    ```

2. In the view

   ```php
	<img src="<?php echo $this->img; ?>" />
    ```
