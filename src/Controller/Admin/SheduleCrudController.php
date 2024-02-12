<?php

namespace App\Controller\Admin;

use App\Entity\Shedule;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SheduleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Shedule::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
