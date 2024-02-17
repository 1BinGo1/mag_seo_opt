<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Siberfx\YandexMetrika\YandexMetrika;

class YandexController extends Controller
{
    protected static $yandexMetrikaObject = null;
    protected $urlManagement = 'https://api-metrika.yandex.net/stat/v1/data';

    public function loadData() {
        if (empty($_GET['site'])){
            return response()->json([
                'data' => ''
            ]);
        }
        else{
            if ($_GET['site'] == "28352696"){
                return response()->json([
                    "LCP" => [
                        "0" => "site#1_lcp_1",
                        "1" => "site#1_lcp_2",
                        "2" => "site#1_lcp_3",
                        "3" => "site#1_lcp_3",
                        "4" => "site#1_lcp_4",
                        "5" => "site#1_lcp_5",
                        "6" => "site#1_lcp_6",
                        "7" => "site#1_lcp_8",
                        "8" => "site#1_lcp_9"
                    ],
                    "FCP" => [
                        "0" => "site#1_fcp_1",
                        "1" => "site#1_fcp_2",
                        "2" => "site#1_fcp_3",
                        "3" => "site#1_fcp_3",
                        "4" => "site#1_fcp_4",
                        "5" => "site#1_fcp_5",
                        "6" => "site#1_fcp_6",
                        "7" => "site#1_fcp_8",
                        "8" => "site#1_fcp_9"
                    ],
                    "CLS" => [
                        "0" => "site#1_cls_1",
                        "1" => "site#1_cls_2",
                        "2" => "site#1_cls_3",
                        "3" => "site#1_cls_3",
                        "4" => "site#1_cls_4",
                        "5" => "site#1_cls_5",
                        "6" => "site#1_cls_6",
                        "7" => "site#1_cls_8",
                        "8" => "site#1_cls_9"
                    ],
                    "SI" => [
                        "0" => "site#1_si_1",
                        "1" => "site#1_si_2",
                        "2" => "site#1_si_3",
                        "3" => "site#1_si_3",
                        "4" => "site#1_si_4",
                        "5" => "site#1_si_5",
                        "6" => "site#1_si_6",
                        "7" => "site#1_si_8",
                        "8" => "site#1_si_9"
                    ],
                    "TBT" => [
                        "0" => "site#1_tbt_1",
                        "1" => "site#1_tbt_2",
                        "2" => "site#1_tbt_3",
                        "3" => "site#1_tbt_3",
                        "4" => "site#1_tbt_4",
                        "5" => "site#1_tbt_5",
                        "6" => "site#1_tbt_6",
                        "7" => "site#1_tbt_8",
                        "8" => "site#1_tbt_9"
                    ],
                    "FID" => [
                        "0" => "site#1_fid_1",
                        "1" => "site#1_fid_2",
                        "2" => "site#1_fid_3",
                        "3" => "site#1_fid_3",
                        "4" => "site#1_fid_4",
                        "5" => "site#1_fid_5",
                        "6" => "site#1_fid_6",
                        "7" => "site#1_fid_8",
                        "8" => "site#1_fid_9"
                    ],
                    "TTI" => [
                        "0" => "site#1_tti_1",
                        "1" => "site#1_tti_2",
                        "2" => "site#1_tti_3",
                        "3" => "site#1_tti_3",
                        "4" => "site#1_tti_4",
                        "5" => "site#1_tti_5",
                        "6" => "site#1_tti_6",
                        "7" => "site#1_tti_8",
                        "8" => "site#1_tti_9"
                    ],
                    "TTFB" => [
                        "0" => "site#1_ttfb_1",
                        "1" => "site#1_ttfb_2",
                        "2" => "site#1_ttfb_3",
                        "3" => "site#1_ttfb_3",
                        "4" => "site#1_ttfb_4",
                        "5" => "site#1_ttfb_5",
                        "6" => "site#1_ttfb_6",
                        "7" => "site#1_ttfb_8",
                        "8" => "site#1_ttfb_9"
                    ]
                ]);
            }
            if ($_GET['site'] == "60742804"){
                return response()->json([
                    "LCP" => [
                        "0" => "site#2_lcp_1",
                        "1" => "site#2_lcp_2",
                        "2" => "site#2_lcp_3",
                        "3" => "site#2_lcp_3",
                        "4" => "site#2_lcp_4",
                        "5" => "site#2_lcp_5",
                        "6" => "site#2_lcp_6",
                        "7" => "site#2_lcp_8",
                        "8" => "site#2_lcp_9"
                    ],
                    "FCP" => [
                        "0" => "site#2_fcp_1",
                        "1" => "site#2_fcp_2",
                        "2" => "site#2_fcp_3",
                        "3" => "site#2_fcp_3",
                        "4" => "site#2_fcp_4",
                        "5" => "site#2_fcp_5",
                        "6" => "site#2_fcp_6",
                        "7" => "site#2_fcp_8",
                        "8" => "site#2_fcp_9"
                    ],
                    "CLS" => [
                        "0" => "site#2_cls_1",
                        "1" => "site#2_cls_2",
                        "2" => "site#2_cls_3",
                        "3" => "site#2_cls_3",
                        "4" => "site#2_cls_4",
                        "5" => "site#2_cls_5",
                        "6" => "site#2_cls_6",
                        "7" => "site#2_cls_8",
                        "8" => "site#2_cls_9"
                    ],
                    "SI" => [
                        "0" => "site#2_si_1",
                        "1" => "site#2_si_2",
                        "2" => "site#2_si_3",
                        "3" => "site#2_si_3",
                        "4" => "site#2_si_4",
                        "5" => "site#2_si_5",
                        "6" => "site#2_si_6",
                        "7" => "site#2_si_8",
                        "8" => "site#2_si_9"
                    ],
                    "TBT" => [
                        "0" => "site#2_tbt_1",
                        "1" => "site#2_tbt_2",
                        "2" => "site#2_tbt_3",
                        "3" => "site#2_tbt_3",
                        "4" => "site#2_tbt_4",
                        "5" => "site#2_tbt_5",
                        "6" => "site#2_tbt_6",
                        "7" => "site#2_tbt_8",
                        "8" => "site#2_tbt_9"
                    ],
                    "FID" => [
                        "0" => "site#2_fid_1",
                        "1" => "site#2_fid_2",
                        "2" => "site#2_fid_3",
                        "3" => "site#2_fid_3",
                        "4" => "site#2_fid_4",
                        "5" => "site#2_fid_5",
                        "6" => "site#2_fid_6",
                        "7" => "site#2_fid_8",
                        "8" => "site#2_fid_9"
                    ],
                    "TTI" => [
                        "0" => "site#2_tti_1",
                        "1" => "site#2_tti_2",
                        "2" => "site#2_tti_3",
                        "3" => "site#2_tti_3",
                        "4" => "site#2_tti_4",
                        "5" => "site#2_tti_5",
                        "6" => "site#2_tti_6",
                        "7" => "site#2_tti_8",
                        "8" => "site#2_tti_9"
                    ],
                    "TTFB" => [
                        "0" => "site#2_ttfb_1",
                        "1" => "site#2_ttfb_2",
                        "2" => "site#2_ttfb_3",
                        "3" => "site#2_ttfb_3",
                        "4" => "site#2_ttfb_4",
                        "5" => "site#2_ttfb_5",
                        "6" => "site#2_ttfb_6",
                        "7" => "site#2_ttfb_8",
                        "8" => "site#2_ttfb_9"
                    ]
                ]);
            }
            if ($_GET['site'] == "56741710"){
                return response()->json([
                    "LCP" => [
                        "0" => "site#3_lcp_1",
                        "1" => "site#3_lcp_2",
                        "2" => "site#3_lcp_3",
                        "3" => "site#3_lcp_3",
                        "4" => "site#3_lcp_4",
                        "5" => "site#3_lcp_5",
                        "6" => "site#3_lcp_6",
                        "7" => "site#3_lcp_8",
                        "8" => "site#3_lcp_9"
                    ],
                    "FCP" => [
                        "0" => "site#3_fcp_1",
                        "1" => "site#3_fcp_2",
                        "2" => "site#3_fcp_3",
                        "3" => "site#3_fcp_3",
                        "4" => "site#3_fcp_4",
                        "5" => "site#3_fcp_5",
                        "6" => "site#3_fcp_6",
                        "7" => "site#3_fcp_8",
                        "8" => "site#3_fcp_9"
                    ],
                    "CLS" => [
                        "0" => "site#3_cls_1",
                        "1" => "site#3_cls_2",
                        "2" => "site#3_cls_3",
                        "3" => "site#3_cls_3",
                        "4" => "site#3_cls_4",
                        "5" => "site#3_cls_5",
                        "6" => "site#3_cls_6",
                        "7" => "site#3_cls_8",
                        "8" => "site#3_cls_9"
                    ],
                    "SI" => [
                        "0" => "site#3_si_1",
                        "1" => "site#3_si_2",
                        "2" => "site#3_si_3",
                        "3" => "site#3_si_3",
                        "4" => "site#3_si_4",
                        "5" => "site#3_si_5",
                        "6" => "site#3_si_6",
                        "7" => "site#3_si_8",
                        "8" => "site#3_si_9"
                    ],
                    "TBT" => [
                        "0" => "site#3_tbt_1",
                        "1" => "site#3_tbt_2",
                        "2" => "site#3_tbt_3",
                        "3" => "site#3_tbt_3",
                        "4" => "site#3_tbt_4",
                        "5" => "site#3_tbt_5",
                        "6" => "site#3_tbt_6",
                        "7" => "site#3_tbt_8",
                        "8" => "site#3_tbt_9"
                    ],
                    "FID" => [
                        "0" => "site#3_fid_1",
                        "1" => "site#3_fid_2",
                        "2" => "site#3_fid_3",
                        "3" => "site#3_fid_3",
                        "4" => "site#3_fid_4",
                        "5" => "site#3_fid_5",
                        "6" => "site#3_fid_6",
                        "7" => "site#3_fid_8",
                        "8" => "site#3_fid_9"
                    ],
                    "TTI" => [
                        "0" => "site#3_tti_1",
                        "1" => "site#3_tti_2",
                        "2" => "site#3_tti_3",
                        "3" => "site#3_tti_3",
                        "4" => "site#3_tti_4",
                        "5" => "site#3_tti_5",
                        "6" => "site#3_tti_6",
                        "7" => "site#3_tti_8",
                        "8" => "site#3_tti_9"
                    ],
                    "TTFB" => [
                        "0" => "site#3_ttfb_1",
                        "1" => "site#3_ttfb_2",
                        "2" => "site#3_ttfb_3",
                        "3" => "site#3_ttfb_3",
                        "4" => "site#3_ttfb_4",
                        "5" => "site#3_ttfb_5",
                        "6" => "site#3_ttfb_6",
                        "7" => "site#3_ttfb_8",
                        "8" => "site#3_ttfb_9"
                    ]
                ]);
            }
        }
        return response()->json([
            "LCP" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "FCP" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "CLS" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "SI" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "TBT" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "FID" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "TTI" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ],
            "TTFB" => [
                "0" => "test",
                "1" => "test",
                "2" => "test",
                "3" => "test",
                "4" => "test",
                "5" => "test",
                "6" => "test",
                "7" => "test",
                "8" => "test"
            ]
        ]);
    }

    public function getOAUTHKey(){
        return "y0_AgAAAAAOcEs7AAtNmgAAAAD7OphRAACA8ZnZYs5MtZ2iJRbk1Pki-PjuJw";
    }

    public function getCountersFull(){
        $response = Http::withHeaders([
            'Authorization' => 'OAuth ' . $this->getOAUTHKey(),
        ])->get('https://api-metrika.yandex.net/management/v1/counters');
        return $response->json();
    }

    public function getCountersShort(){
        $counters = collect();
        $response = $this->getCountersFull();
        foreach ($response['counters'] as $counter){
            $item = array();
            $item['id'] = $counter['id'];
            $item['name'] = $counter['name'];
            $item['create_time'] = $counter['create_time'];
            $item['site'] = $counter['site'];
            $counters->push($item);
        }
        return response()->json([
            'data' => $counters
        ]);
    }

    public static function getYandexMetrikaObject()
    {
        if (static::$yandexMetrikaObject === null) {
            static::$yandexMetrikaObject = new YandexMetrika();
        }
        return static::$yandexMetrikaObject;
    }

    public function getMetricData()
    {
//        if (!empty($_GET['site'])){
//            $urlParams = [
//                'ids'           => $_GET['site'],
//                'date1'         => (new Carbon($_GET['date1']))->format('Y-m-d'),
//                'date2'         => (new Carbon($_GET['date2']))->format('Y-m-d'),
//                'metrics'    => 'ym:s:visits',
//                'sort'       => '-ym:s:visits',
//            ];
//            return response()->json(self::getYandexMetrikaObject()->getRequestToApi($urlParams));
//        }
        $urlParams = [
            'ids'           => '56741710',
            'date1'         => Carbon::today()->format('Y-m-d'),
            'date2'         => Carbon::today()->format('Y-m-d'),
            'metrics'    => 'ym:s:visits',
            'sort'       => '-ym:s:visits',
        ];
        return response()->json(self::getYandexMetrikaObject()->getRequestToApi($urlParams));
    }

}
