<?php

namespace Laravolt\Platform\Enums;

use BenSampo\Enum\Enum;

final class Permission extends Enum
{
    const ANY = '*';

    const MANAGE_USER = 'laravolt::manage-user';

    const MANAGE_ROLE = 'laravolt::manage-role';

    const MANAGE_PERMISSION = 'laravolt::manage-permission';

    const MANAGE_APPLICATION_LOG = 'laravolt::manage-application-log';

    const MANAGE_DB = 'laravolt::manage-database';

    const MANAGE_LOOKUP = 'laravolt::manage-lookup';

    const MANAGE_WORKFLOW = 'laravolt::manage-workflow';

    const MANAGE_SETTINGS = 'laravolt::manage-settings';

    const MANAGE_SYSTEM = 'laravolt::manage-system';

    const MANAGE_SEO = 'laravolt::manage-seo';
}
