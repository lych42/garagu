<?php

namespace App\Controller\Admin;

use App\Entity\Vehichle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VehichleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vehichle::class;
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