<?php

namespace Name;

use App\Entity\Jyry;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JyryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jyry::class;
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
