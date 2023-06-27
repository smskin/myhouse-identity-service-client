<?php

namespace SMSkin\IdentityServiceClient\Enums;

enum PermissionEnum: string
{
    /**
     * House service
     */
    case GIS_HOUSE_SHOW_LIST = '11fe8eef-a6b5-4011-8e5e-550e3cbd4b54';
    case GIS_HOUSE_SHOW_ITEM = '4d8a4371-482c-4461-80c9-53d1d95dd74d';
    case GIS_HOUSE_PARSE_BY_REGION = '6fe78b60-765c-4aad-9f18-d7ddee6dbaff';
    case GIS_HOUSE_PARSE_BY_OKTMO = '87eba1a7-8d17-4ae3-a230-962cf04c5172';

    case GIS_MANAGEMENT_ORGANIZATION_SHOW_LIST = 'ef5586a7-3a5a-4a60-a44c-c232a5a8a40d';
    case GIS_MANAGEMENT_ORGANIZATION_SHOW_ITEM = '9a3464d4-8114-4566-a922-a770c25bc4ea';

    case GIS_OMS_SHOW_LIST = '9da6db32-098f-4bec-9620-796986501a23';
    case GIS_OMS_SHOW_ITEM = '5a63c49c-6a4b-4348-8ddd-fbc933e31034';

    case HOUSE_FLAT_SHOW_LIST = 'd785c0e0-705c-459b-ada3-a651c994af3f';
    case HOUSE_FLAT_SHOW_ITEM = '8549a653-c4ec-4eb5-a00e-648400349dc0';
    case HOUSE_FLAT_CREATE = 'bceb1021-eac9-41a5-a8c9-e8c9bed383d1';
    case HOUSE_FLAT_ORDER_ROSREESTR_REPORT = 'b98e767e-b30a-42f1-9b4d-a28c000ef4ca';
    case HOUSE_FLAT_ASSIGN_USER = 'ba46bffc-e0d9-4aa5-ae88-73e12b845d33';

    case HOUSE_GROUP_SHOW_LIST = '75c4356f-3eaa-4ea0-886b-c3411772e317';
    case HOUSE_GROUP_CREATE_OR_UPDATE = '84c348ae-b435-444f-a11b-cfe19cd2990d';
    case HOUSE_GROUP_ADD_OR_REMOVE_HOUSE = '913b53c3-6ceb-4ddb-b345-b792bf6504b0';

    case HOUSE_SHOW_LIST = 'b6ad35f4-4630-43d3-9156-1b811cb7f887';
    case HOUSE_CREATE = '922148e7-591c-41f7-afbd-edecabee0815';
    case HOUSE_SHOW_ITEM = 'cf3a9913-f0ae-4421-a027-d3d30f4076e0';
    case HOUSE_UPDATE = '3ea2d01d-7d5c-4fd5-9234-99a672fe7541';
    case HOUSE_UPDATE_CLASS = '50972dd3-cb39-47ac-8cc2-6768dd8d5013';
    case HOUSE_UPDATE_CATEGORY = '397b87dd-0c96-49e8-84a3-7c0397332402';
    case HOUSE_UPDATE_BASIS_OF_MANAGEMENT = 'fb90dbc3-9db8-4cd4-ad81-70c179a2ddf3';
    case HOUSE_SHOW_ROOMER_LIST = 'e9507977-c6e0-4fc7-b71c-68d58187a665';
    case HOUSE_MASS_CREATE_BY_GIS_HOUSES = 'dbc9ccef-3c32-4ba4-97f3-d35f39bda2c2';
    case HOUSE_ORDER_GIS_REPORT = 'f1599621-c4fc-49a1-9264-b6228f984eef';
    case HOUSE_ORDER_REFORMA_REPORT = '852021e2-fa8d-4629-8149-bfa12b72a0c1';
    case HOUSE_ORDER_ROSREESTR_REPORT = 'c71b8cbc-41c2-445d-8da5-7a79a36aa1fc';
    case HOUSE_MASS_ORDER_ROSREESTR_REPORT = '2a0a2f59-b8ac-49fb-8365-fead8cc13fbd';
    case HOUSE_MASS_REORDER_ROSREESTR_REPORT = 'fab6fc42-29e2-4fa1-b2b0-670d232d4f3a';
    case HOUSE_VERIFY_MANAGEMENT_TYPE = '9458ca2a-0791-454b-83f2-99450b31433c';
    case HOUSE_VERIFY_MANAGEMENT_ORGANIZATION = '6dbc22ab-59be-406b-8f89-3fac53603d5b';

    case MANAGEMENT_ORGANIZATION_SHOW_LIST = '0f45a990-8521-4058-be38-c171c01a5f6d';
    case MANAGEMENT_ORGANIZATION_SHOW_ITEM = '070ea747-adf7-40d6-8991-cd8c1578e571';
    case MANAGEMENT_ORGANIZATION_CREATE_OR_UPDATE = 'bcffcee0-31de-4592-b5dc-cac1bf64ba1e';

    case OMS_SHOW_LIST = '6bcbc318-08e0-4279-a5d2-e5eb4d09b4fc';
    case OMS_SHOW_ITEM = '4dce440b-5a8f-49cd-ad94-87ed7fe400de';

    case PAGE_SHOW_LIST = 'bf422aa7-01d5-4d2f-880d-e4e09ead4347';
    case PAGE_SHOW_ITEM = '6d87e9f8-b098-4fa2-b1db-23c903cde5b9';
    case PAGE_CREATE_OR_UPDATE = '8ab5a867-6398-4832-a6ea-c0b2d94ee04e';

    case QUOTE_SHOW_LIST = 'c849235f-5078-4d4e-aa88-81a96bd6e1e8';
    case QUOTE_CREATE_OR_UPDATE = '107de799-c54c-4d29-b816-dc20ace92ed6';

    case ROSREESTR_HOUSE_SHOW_LIST = '1af96d31-b347-4780-898d-096feeee2001';
    case ROSREESTR_HOUSE_SHOW_ITEM = 'f5392c88-41e1-401c-b00d-7438d653b251';
    case ROSREESTR_HOUSE_SHOW_ROOMS_LIST = '9ff0e78f-b4fc-47fa-ade0-718665d2e186';

    case ROSREESTR_LAND_SHOW_LIST = '3ab56a86-736b-4754-9408-172635eb76d2';
    case ROSREESTR_LAND_SHOW_ITEM = '6f68a96d-96b4-47a7-ad50-1068422d23a9';

    case SYSTEM_VARIABLE_SHOW_LIST = '9b50338f-ec10-4de6-9099-546cf17690f4';
    case SYSTEM_VARIABLE_CREATE_OR_UPDATE = '8620fb45-efa6-4365-8212-9677c890fe69';

    case KONTUR_REESTRO_SHOW_BALANCE = '57423f02-44f9-4b4d-b2d6-e00b43fbf0ef';
    case KONTUR_REESTRO_SHOW_BALANCE_OPERATIONS = 'f32dd9a4-b4fb-43f3-b496-c7842fc9c40c';

    case SHOW_SYSTEM_STATISTIC = 'ff5eb1f2-d05f-46ba-bb8f-d5d15a1f4454';
    case SHOW_REGION_STATISTIC = '281595db-a8a3-4e90-b5f5-2575537b154b';
    case SHOW_ROSREESTR_REPORT_STATISTIC = '9fb9a961-23cb-4163-bdab-2f5949f18f01';

    /**
     * Identity service
     */
    case NOTIFICATIONS_SHOW_LIST = '81f6a4ce-cc7d-49c5-bb86-b3f9963cc6f9';
    case NOTIFICATIONS_SHOW_ITEM = '098521b9-413b-41b7-abc3-77a06577c841';
    case NOTIFICATIONS_CREATE_OR_UPDATE = 'ab26a3a8-914f-4b3b-a741-01585da852a9';
    case NOTIFICATIONS_MARK_AS_READ = '89ef8eec-c5de-418e-84ba-93e4f290b5f7';

    case PERMISSIONS_SHOW_LIST = '21d58c65-41d1-41dc-b3e7-a105607d3419';

    case ROLE_SHOW_LIST = '478a7d74-42f1-4dec-97b0-787e98dbd716';
    case ROLE_SHOW_ITEM = '01a4bcc4-37c9-4a57-b40b-b0c3040f226d';
    case ROLE_CREATE_OR_UPDATE = '6038b966-e96a-4f93-971c-06ec925050ff';
    case ROLE_DELETE = '436c4742-b652-48bd-a975-6f21e4472575';

    case USER_SHOW_LIST = '4c5dfe6c-c2db-4883-bdb2-78f2fae3e96a';
    case USER_CREATE_OR_UPDATE = '5c9f85e3-6216-4909-8048-544a098612bc';
    case USER_CREATE_BLOCK_OR_UNBLOCK = 'd24bb1a6-9513-48f9-bb6a-2260133e3fef';
    case USER_SHOW_ACTIVITY_LOG = 'c2e187f5-a983-48bb-a0ca-69100fc3687e';

    public static function names(): array
    {
        return [
            self::GIS_HOUSE_SHOW_LIST->value => 'Просмотр списка ГИС домов',
            self::GIS_HOUSE_SHOW_ITEM->value => 'Просмотр ГИС дома',
            self::GIS_HOUSE_PARSE_BY_REGION->value => 'Запуск парсинга ГИС домов по региону',
            self::GIS_HOUSE_PARSE_BY_OKTMO->value => 'Запуск парсинга ГИС домов по ОКТМО',
            self::GIS_MANAGEMENT_ORGANIZATION_SHOW_LIST->value => 'Просмотр списка ГИС обслуживающих организаций',
            self::GIS_MANAGEMENT_ORGANIZATION_SHOW_ITEM->value => 'Просмотр ГИС обслуживающей организации',
            self::GIS_OMS_SHOW_LIST->value => 'Просмотр списка ГИС ОМС',
            self::GIS_OMS_SHOW_ITEM->value => 'Просмотр элемента ГИС ОМС',
            self::HOUSE_FLAT_SHOW_LIST->value => 'Просмотр списка помещений дома',
            self::HOUSE_FLAT_SHOW_ITEM->value => 'Просмотр помещения дома',
            self::HOUSE_FLAT_CREATE->value => 'Создание помещения дома',
            self::HOUSE_FLAT_ORDER_ROSREESTR_REPORT->value => 'Запрос выписки по помещению из РосРеестра',
            self::HOUSE_FLAT_ASSIGN_USER->value => 'Привязка пользователя к помещению',
            self::HOUSE_GROUP_SHOW_LIST->value => 'Просмотр списка групп домов',
            self::HOUSE_GROUP_CREATE_OR_UPDATE->value => 'Создание\\редактирование группы домов',
            self::HOUSE_GROUP_ADD_OR_REMOVE_HOUSE->value => 'Добавление\\удаление дома в\\из группы домов',
            self::HOUSE_SHOW_LIST->value => 'Просмотр списка домов',
            self::HOUSE_CREATE->value => 'Создание дома',
            self::HOUSE_SHOW_ITEM->value => 'Просмотр дома',
            self::HOUSE_UPDATE->value => 'Редактирование дома',
            self::HOUSE_UPDATE_CLASS->value => 'Редактирование класса дома',
            self::HOUSE_UPDATE_CATEGORY->value => 'Редактирование категории дома',
            self::HOUSE_UPDATE_BASIS_OF_MANAGEMENT->value => 'Редактирование основания управления дома',
            self::HOUSE_SHOW_ROOMER_LIST->value => 'Просмотр списка жильцов дома',
            self::HOUSE_MASS_CREATE_BY_GIS_HOUSES->value => 'Массовое создание домов из ГИС домов',
            self::HOUSE_ORDER_GIS_REPORT->value => 'Запрос выписки по дому из ГИС',
            self::HOUSE_ORDER_REFORMA_REPORT->value => 'Запрос выписки по дому из Реформа',
            self::HOUSE_ORDER_ROSREESTR_REPORT->value => 'Запрос выписки по дому из РосРеестра',
            self::HOUSE_MASS_ORDER_ROSREESTR_REPORT->value => 'Массовый запрос выписки по дому из РосРеестра',
            self::HOUSE_MASS_REORDER_ROSREESTR_REPORT->value => 'Повторный массовый запрос выписки по дому из РосРеестра',
            self::HOUSE_VERIFY_MANAGEMENT_TYPE->value => 'Верификация типа обслуживающей организации дома',
            self::HOUSE_VERIFY_MANAGEMENT_ORGANIZATION->value => 'Верификация данных обслуживающей организации дома',
            self::MANAGEMENT_ORGANIZATION_SHOW_LIST->value => 'Просмотр списка обслуживающих организаций',
            self::MANAGEMENT_ORGANIZATION_SHOW_ITEM->value => 'Просмотр обслуживающей организации',
            self::MANAGEMENT_ORGANIZATION_CREATE_OR_UPDATE->value => 'Создание\\редактирование обслуживающей организации',
            self::OMS_SHOW_LIST->value => 'Просмотр списка ОМС',
            self::OMS_SHOW_ITEM->value => 'Просмотр элемента ОМС',
            self::PAGE_SHOW_LIST->value => 'Просмотр списка статичных страниц',
            self::PAGE_SHOW_ITEM->value => 'Просмотр статичной страницы',
            self::PAGE_CREATE_OR_UPDATE->value => 'Создание\\редактирование статичной страницы',
            self::QUOTE_SHOW_LIST->value => 'Просмотр списка цитат',
            self::QUOTE_CREATE_OR_UPDATE->value => 'Создание\\редактирование цитаты',
            self::ROSREESTR_HOUSE_SHOW_LIST->value => 'Просмотр списка РосРеестр домов',
            self::ROSREESTR_HOUSE_SHOW_ITEM->value => 'Просмотр РосРеестр дома',
            self::ROSREESTR_HOUSE_SHOW_ROOMS_LIST->value => 'Просмотр списка помещений РосРеестр дома',
            self::ROSREESTR_LAND_SHOW_LIST->value => 'Просмотр списка земель РосРеестр',
            self::ROSREESTR_LAND_SHOW_ITEM->value => 'Просмотр земели РосРеестр',
            self::SYSTEM_VARIABLE_SHOW_LIST->value => 'Просмотр списка системных переменных',
            self::SYSTEM_VARIABLE_CREATE_OR_UPDATE->value => 'Создание\\редактирование системной переменной',
            self::KONTUR_REESTRO_SHOW_BALANCE->value => 'Просмотр баланса КонтурРеестро',
            self::KONTUR_REESTRO_SHOW_BALANCE_OPERATIONS->value => 'Просмотр списка операций КонтурРеестро',
            self::SHOW_SYSTEM_STATISTIC->value => 'Просмотр системной статистики',
            self::SHOW_REGION_STATISTIC->value => 'Просмотр региональной статистики',
            self::SHOW_ROSREESTR_REPORT_STATISTIC->value => 'Просмотр статистики запросов в РосРеестр',
            self::NOTIFICATIONS_SHOW_LIST->value => 'Просмотр списка уведомлений',
            self::NOTIFICATIONS_SHOW_ITEM->value => 'Просмотр уведомления',
            self::NOTIFICATIONS_CREATE_OR_UPDATE->value => 'Создание\\редактирование уведомления',
            self::NOTIFICATIONS_MARK_AS_READ->value => 'Пометка уведомления как прочтенное',
            self::PERMISSIONS_SHOW_LIST->value => 'Просмотр списка привелегий',
            self::ROLE_SHOW_LIST->value => 'Просмотр списка ролей пользователей',
            self::ROLE_SHOW_ITEM->value => 'Просмотр элемента роли пользователей',
            self::ROLE_CREATE_OR_UPDATE->value => 'Создание\\редактирование роли пользователя',
            self::ROLE_DELETE->value => 'Удаление роли пользователя',
            self::USER_SHOW_LIST->value => 'Просмотр списка пользователей',
            self::USER_CREATE_OR_UPDATE->value => 'Создание\\редактирование пользователя',
            self::USER_CREATE_BLOCK_OR_UNBLOCK->value => 'Блокировка\\разблокировка пользователя',
            self::USER_SHOW_ACTIVITY_LOG->value => 'Просмотр лога активности пользователя',
        ];
    }

    public static function getName(PermissionEnum $permission): string
    {
        return self::names()[$permission->value];
    }
}
