<?php

require 'vendor/autoload.php';

use Statusio\StatusioClient;

class MetricTest extends PHPUnit_Framework_TestCase {
    private $statusioClient;

    public function __construct()
    {
        // Setup
        $this->statusioClient = new StatusioClient('', '');
    }

    public function testStatusSummary() {
        $response = $this->statusioClient->MetricUpdate('568d8a3e3cada8c2490000dd', '568d8ab5efe35d412f0006f8',
            22.58,
            1395981878000,
            [
                "2014-03-28T05:43:00+00:00",
                "2014-03-28T06:43:00+00:00",
                "2014-03-28T07:43:00+00:00",
                "2014-03-28T08:43:00+00:00",
                "2014-03-28T09:43:00+00:00",
                "2014-03-28T10:43:00+00:00",
                "2014-03-28T11:43:00+00:00",
                "2014-03-28T12:43:00+00:00",
                "2014-03-28T13:43:00+00:00",
                "2014-03-28T14:43:00+00:00",
                "2014-03-28T15:43:00+00:00",
                "2014-03-28T16:43:00+00:00",
                "2014-03-28T17:43:00+00:00",
                "2014-03-28T18:43:00+00:00",
                "2014-03-28T19:43:00+00:00",
                "2014-03-28T20:43:00+00:00",
                "2014-03-28T21:43:00+00:00",
                "2014-03-28T22:43:00+00:00",
                "2014-03-28T23:43:00+00:00",
                "2014-03-29T00:43:00+00:00",
                "2014-03-29T01:43:00+00:00",
                "2014-03-29T02:43:00+00:00",
                "2014-03-29T03:43:00+00:00"
            ],
            [
                "20.70",
                "20.00",
                "19.20",
                "19.80",
                "19.90",
                "20.10",
                "21.40",
                "23.00",
                "27.40",
                "28.70",
                "27.50",
                "29.30",
                "28.50",
                "27.20",
                "28.60",
                "28.70",
                "25.90",
                "23.40",
                "22.40",
                "21.40",
                "19.80",
                "19.50",
                "20.00"
            ],
            20.07,
            1395463478000,
            [
                "2014-03-22T04:43:00+00:00",
                "2014-03-23T04:43:00+00:00",
                "2014-03-24T04:43:00+00:00",
                "2014-03-25T04:43:00+00:00",
                "2014-03-26T04:43:00+00:00",
                "2014-03-27T04:43:00+00:00",
                "2014-03-28T04:43:00+00:00"
            ],
            [
                "23.10",
                "22.10",
                "22.20",
                "22.30",
                "22.10",
                "18.70",
                "17.00"
            ],
            10.63,
            1393476280000,
            [
                "2014-02-28T04:43:00+00:00",
                "2014-03-01T04:43:00+00:00",
                "2014-03-02T04:43:00+00:00",
                "2014-03-03T04:43:00+00:00",
                "2014-03-04T04:43:00+00:00",
                "2014-03-05T04:43:00+00:00",
                "2014-03-06T04:43:00+00:00",
                "2014-03-07T04:43:00+00:00",
                "2014-03-08T04:43:00+00:00",
                "2014-03-09T04:43:00+00:00",
                "2014-03-10T04:43:00+00:00",
                "2014-03-11T04:43:00+00:00",
                "2014-03-12T04:43:00+00:00",
                "2014-03-13T04:43:00+00:00",
                "2014-03-14T04:43:00+00:00",
                "2014-03-15T04:43:00+00:00",
                "2014-03-16T04:43:00+00:00",
                "2014-03-17T04:43:00+00:00",
                "2014-03-18T04:43:00+00:00",
                "2014-03-19T04:43:00+00:00",
                "2014-03-20T04:43:00+00:00",
                "2014-03-21T04:43:00+00:00",
                "2014-03-22T04:43:00+00:00",
                "2014-03-23T04:43:00+00:00",
                "2014-03-24T04:43:00+00:00",
                "2014-03-25T04:43:00+00:00",
                "2014-03-26T04:43:00+00:00",
                "2014-03-27T04:43:00+00:00",
                "2014-03-28T04:43:00+00:00"
            ],
            [
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "0.00",
                "18.50",
                "18.60",
                "18.40",
                "16.60",
                "16.80",
                "17.90",
                "19.90",
                "21.30",
                "22.80",
                "20.00",
                "17.30",
                "19.10",
                "21.50",
                "22.40",
                "22.50",
                "22.00",
                "21.80"
            ]);
        $this->assertEquals('no', $response->status->error);
    }
}