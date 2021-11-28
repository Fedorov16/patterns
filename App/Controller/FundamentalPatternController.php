<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Fundamental\PropertyContainer\Author;
use Symfony\Component\Routing\Annotation\Route;

class FundamentalPatternController
{
    #[Route('/property_container', name: 'property_container')]
    public function index(): void
    {
        InfoRender::showInfo('Property Container', 'https://ru.freejournal.org/index.php/7181824/1/konteyner-svoystv-shablon-proektirovaniya.html');

        $author = new Author();
        $author
            ->setName('Sergey Fedorov')
            ->setEmail('svfedorov16@gmail.com')
            ->setPhone(89819578828)
            ->setAge(27);
        dump($author);

        $author
            ->addProperty('countBestBooks', 5)
            ->setProperty('countBestBooks', 8);
        dump($author);
        $author
            ->addProperty('bestPractice', ['xxx.com', 'xxx2.com'])
            ->deleteProperty('countBestBooks');
        dump($author);
    }
}
