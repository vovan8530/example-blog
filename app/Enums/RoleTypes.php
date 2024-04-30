<?php

namespace App\Enums;

enum RoleTypes: int
{

    case ADMIN = 1;

    case CLIENT = 2;

    /**
     * @return string
     */
    public function label(): string
    {
        return self::getLabel($this);
    }

    /**
     * @param  RoleTypes  $value
     * @return string
     */
    public static function getLabel(self $value): string
    {
        return match ($value) {
            RoleTypes::ADMIN => 'admin',
            RoleTypes::CLIENT => 'client',
        };
    }

    /**
     * @return array
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * @return array
     */
    public static function arrayRoles(): array
    {
        return array_combine(self::values(), self::names());
    }
}
