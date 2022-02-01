<?php

declare(strict_types=1);

namespace App\Controller;

use App\Pattern\Behavioral\Strategy\GameSetting;
use App\Pattern\Behavioral\Strategy\StrategyFactory;
use Symfony\Component\Routing\Annotation\Route;

class BehavioralPatternController
{
    #[Route('/strategy/{levelDifficult}', name: 'strategy')]
    public function strategy(string $levelDifficult): void
    {
        InfoRender::showInfo('Strategy', 'https://refactoring.guru/ru/design-patterns/strategy');
        $strategy = StrategyFactory::build($levelDifficult);
        $gameSetting = new GameSetting($strategy);
        $score = $gameSetting->scoreFight();
        dump(sprintf('level: %s score: %d',$levelDifficult, $score));
    }
}
