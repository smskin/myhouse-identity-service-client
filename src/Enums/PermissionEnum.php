<?php

namespace SMSkin\IdentityServiceClient\Enums;

enum PermissionEnum: string
{
    case ROLE_SHOW_LIST = '478a7d74-42f1-4dec-97b0-787e98dbd716';
    case ROLE_CREATE_OR_UPDATE = '6038b966-e96a-4f93-971c-06ec925050ff';
    case USER_SHOW_LIST = '4c5dfe6c-c2db-4883-bdb2-78f2fae3e96a';
    case USER_CREATE_OR_UPDATE = '5c9f85e3-6216-4909-8048-544a098612bc';
    case HOUSE_SHOW_LIST = 'b6ad35f4-4630-43d3-9156-1b811cb7f887';
    case HOUSE_UPDATE = '3ea2d01d-7d5c-4fd5-9234-99a672fe7541';
    case HOUSE_FLAT_SHOW_LIST = 'd785c0e0-705c-459b-ada3-a651c994af3f';
    case HOUSE_MASS_CREATE_FROM_GIS_HOUSE = '90f29f8a-5932-4ba6-b000-4c00c0527423';
    case ORDER_GIS_REPORT = '7728e920-8043-4547-9dee-26950e066e6f';
    case ORDER_REFORMA_REPORT = '87ff216f-f8e3-4ebf-92f6-5db9cdecbd28';
    case ORDER_ROSREESTR_REPORT = 'b98e767e-b30a-42f1-9b4d-a28c000ef4ca';
    case MANAGEMENT_ORGANIZATION_SHOW_LIST = '0f45a990-8521-4058-be38-c171c01a5f6d';
    case MANAGEMENT_ORGANIZATION_UPDATE = '75a44eb5-69d8-459e-920b-ce7011c7bd92';
    case OMS_SHOW_LIST = '6bcbc318-08e0-4279-a5d2-e5eb4d09b4fc';
    case PAGE_CREATE_OR_UPDATE = '8ab5a867-6398-4832-a6ea-c0b2d94ee04e';
    case SYSTEM_VARIABLE_UPDATE = '8620fb45-efa6-4365-8212-9677c890fe69';
}