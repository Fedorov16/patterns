<?php

declare(strict_types=1);

namespace App\Pattern\Fundamental\EventChannel;

class EventJob
{
    private const IMAGE_TOPIC = 'image';
    private const MUSIC_TOPIC = 'music';
    private const PARAGLIDE_TOPIC = 'paraglide';

    public function run(): void
    {
        $eventChannel = new EventChannel();

        $picturePublisher = new Publisher(self::IMAGE_TOPIC, $eventChannel);
        $musicPublisher = new Publisher(self::MUSIC_TOPIC, $eventChannel);
        $paraglidePublisher = new Publisher(self::PARAGLIDE_TOPIC, $eventChannel);

        $subscriberSergey = new Subscriber('Sergey Fedorov');
        $subscriberVitaliy = new Subscriber('Vitaliy Filippov');
        $subscriberAleksey = new Subscriber('Aleksey Pilov');

        $eventChannel->subscribe(self::IMAGE_TOPIC, $subscriberVitaliy);
        $eventChannel->subscribe(self::IMAGE_TOPIC, $subscriberAleksey);
        $eventChannel->subscribe(self::MUSIC_TOPIC, $subscriberAleksey);
        $eventChannel->subscribe(self::PARAGLIDE_TOPIC, $subscriberSergey);

        $picturePublisher->publish('Hey, you have to know - we have special IMAGES for you');
        $musicPublisher->publish('Hey, you have to know - we have special MUSICS for you');
        $paraglidePublisher->publish('Hey, you have to know - we would like to gift a paraglide to you');
    }
}
