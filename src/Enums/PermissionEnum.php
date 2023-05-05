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
    case HOUSE_UPDATE_CLASS = '50972dd3-cb39-47ac-8cc2-6768dd8d5013';
    case HOUSE_UPDATE_CATEGORY = '397b87dd-0c96-49e8-84a3-7c0397332402';
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
    case QUOTE_SHOW_LIST = 'c849235f-5078-4d4e-aa88-81a96bd6e1e8';
    case QUOTE_CREATE_OR_UPDATE = '107de799-c54c-4d29-b816-dc20ace92ed6';
    case SHOW_PERSONAL_USER_PAGE = '21bbbca4-83eb-4d90-89eb-4fd2189f4473';

    public static function names(): array
    {
        return [
            self::ROLE_SHOW_LIST->value => 'Просмотр списка ролей',
            self::ROLE_CREATE_OR_UPDATE->value => 'Создать/изменить роль',
            self::USER_SHOW_LIST->value => 'Просмотр пользователей',
            self::USER_CREATE_OR_UPDATE->value => 'Создание/изменение пользователей',
            self::HOUSE_SHOW_LIST->value => 'Просмотр списка домов',
            self::HOUSE_UPDATE->value => 'Изменение дома',
            self::HOUSE_FLAT_SHOW_LIST->value => 'Просмотр списка квартир',
            self::HOUSE_MASS_CREATE_FROM_GIS_HOUSE->value => 'Массовое создание макродомов из микродомов ГИС',
            self::ORDER_GIS_REPORT->value => 'Запросы в ГИС',
            self::ORDER_REFORMA_REPORT->value => 'Запросы в Реформу ЖКХ',
            self::ORDER_ROSREESTR_REPORT->value => 'Запросы в РосРеестр',
            self::MANAGEMENT_ORGANIZATION_SHOW_LIST->value => 'Просмотр списка УО/ТСЖ',
            self::MANAGEMENT_ORGANIZATION_UPDATE->value => 'Изменение УО',
            self::OMS_SHOW_LIST->value => 'Просмотр списка ОМС',
            self::PAGE_CREATE_OR_UPDATE->value => 'Создание/изменение страниц',
            self::SYSTEM_VARIABLE_UPDATE->value => 'Изменение системных настроек',
            self::HOUSE_UPDATE_CLASS->value => 'Изменение класса дома',
            self::HOUSE_UPDATE_CATEGORY->value => 'Изменение категории дома',
            self::QUOTE_SHOW_LIST->value => 'Просмотр списка цитат',
            self::QUOTE_CREATE_OR_UPDATE->value => 'Создание/изменение цитат',
            self::SHOW_PERSONAL_USER_PAGE->value => 'Просмотр страницы пользователя'
        ];
    }

    public static function getName(PermissionEnum $permission): string
    {
        return self::names()[$permission->value];
    }
}