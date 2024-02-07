<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YandexController extends Controller
{
    public function loadData() {
        if (empty($_GET['site'])){
            return response()->json([
                'data' => ''
            ]);
        }
        else{
            if ($_GET['site'] == "site_#1"){
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
            if ($_GET['site'] == "site_#2"){
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
            if ($_GET['site'] == "site_#3"){
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
    }
}
