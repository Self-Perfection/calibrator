<?php

namespace app\models;

/**
 * Уровень доступа в системе
 */
abstract class UserRole
{
    /**
     * Обычный юзер
     */
    const USER = 0;
    
    /**
     * Модератор (может принимать заявки на вопросы и создавать их)
     */
    const MODERATOR = 1;
    
    /**
     * Администратор (то же что модератор + может назначать модераторов)
     */
    const ADMIN = 2;
    
}
