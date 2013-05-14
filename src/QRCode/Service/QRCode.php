<?php

namespace QRCode\Service;

class QRCode {

    private $properties = array();
    private $https = false;
    private $endpoint = null;
    
    const END_POINT = 'chart.googleapis.com/chart?';

    function __construct() {
        $this->setCharset();
        $this->setCorrectionLevel();
        $this->setTypeChart();
    }
    
    public function isHttp()
    {
        $this->endpoint = 'http://'.self::END_POINT;
    }
    public function isHttps()
    {
        $this->endpoint = 'https://'.self::END_POINT;
    }

    public function setTypeChart($chart = 'qr') {
        $this->properties['cht'] = $chart;
    }

    public function getTypeChart() {
        return $this->properties['cht'];
    }

    public function getParameters() {
        return $this->endpoint.http_build_query($this->properties);
    }

    public function setDimensions($w, $h) {
        if (is_int($w) && is_int($h)) {
            $this->properties['chs'] = "{$w}x{$h}";
        } else {
            throw new \InvalidArgumentException('The parameter $w and $h must be integer type');
        }
    }

    public function getDimensions() {
        return $this->properties['chs'];
    }

    public function setCharset($charset = 'UTF-8') {
        $this->properties['choe'] = $charset;
    }

    public function getCharset() {
        return $this->properties['choe'];
    }
    
    public function setCorrectionLevel($cl = 'L',$m = 0)
    {
        $this->properties['chld'] = "{$cl}|{$m}";
    }
    public function getCorrectionLevel()
    {
        return $this->properties['chld'] ;
    }
    
    public function setData($data)
    {
        $this->properties['chl'] = urlencode($data);
    }
    public function getData()
    {
        return $this->properties['chl'];
    }

}
