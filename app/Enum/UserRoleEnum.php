<?php
namespace App\Enum;

enum UserRoleEnum:string{
    case ADMIN = 'admin';
    case PROPRIETAIRE = 'proprietaire';
    case RECOUVREUR = 'recouvreur';
    case VISITEUR = 'visiteur';
}