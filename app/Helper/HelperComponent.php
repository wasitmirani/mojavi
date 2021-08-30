<?php

namespace App\Helper;

class HelperComponent
{

    public static function SideBar()
    {
        return [
            // [
            //     "heading" => "Management",
            //     "menu" => [
            //         "title" => 'User Management',
            //         "icon" => "people",
            //         "color_code" => "",
            //         "can" => "",
            //         "v-can" => "",
            //         "sub_menu" => [
            //             setSubMenu(
            //                 null,
            //                 "Users",
            //                 "supervisor_account",
            //                 null,
            //                 null,
            //                 "/users",
            //             ),
            //             setSubMenu(
            //                 null,
            //                 "Roles",
            //                 null,
            //                 null,
            //                 null,
            //                 "/roles",
            //             ),
            //         ]
            //     ]

            // ],
            [
                "heading" => "Apps & Pages",
                "menu" => [
                    "title" => 'Dashboard',
                    "icon" => "home",
                    "color_code" => "",
                    // "can" => "",
                    // "v-can" => "",
                    "sub_menu" => [
                        setSubMenu(
                            null,
                            "Dashboard",
                            "article",
                            null,
                            null,
                            "/dashboard",
                        ),
                      


                    ]
                    ],


            ],
       



        ];
        }
    }

