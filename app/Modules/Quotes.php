<?php

namespace Mammoth\Modules;

use Illuminate\Support\Collection;

class Quotes
{
    /**
     * Get an inspiring quote.
     *
     * @return string
     */
    public static function quote()
    {
        return Collection::make([

            'It\'s not what you look at that matters, it\'s what you see. - Henry David Thoreau',
            'Beware of false knowledge; it is more dangerous than ignorance. - George Bernard Shaw',
            'Blessed are those who give without remembering and take without forgetting. - Elizabeth Bibesco',
            'In order to succeed, we must first believe that we can. - Nikos Kazantzakis',
            'Aim for the moon. If you miss, you may hit a star. - W. Clement Stone',
            'Don\'t watch the clock; do what it does. Keep going. - Sam Levenson',
            'Try to be a rainbow in someone\'s cloud. - Maya Angelou',
            'Nothing is impossible, the word itself says \'I\'m possible\'! - Audrey Hepburn',
            'We know what we are, but know not what we may be. - William Shakespeare',
            'I love deadlines. I like the whooshing sound they make as they fly by. - Douglas Adams',
            'Procrastination is the art of keeping up with yesterday. - Don Marquis',
            'Behind every great man is a woman rolling her eyes. - Jim Carrey',
            'Life isn\'t about finding yourself. Life is about creating yourself. - George Bernard Shaw',
            'Life is really simple, but we insist on making it complicated. - Confucius',
            'The privilege of a lifetime is being who you are. - Joseph Campbell',
            'Every gift from a friend is a wish for your happiness. - Richard Bach',
            'Independence is happiness. - Susan B. Anthony',
            'A hug is like a boomerang - you get it back right away. - Bil Keane',
            'The starting point of all achievement is desire. - Napoleon Hill',
            'Try not to become a man of success, but rather try to become a man of value. - Albert Einstein',
            'Success is how high you bounce when you hit bottom. - George S. Patton',

            'When there is no desire, all things are at peace. - Laozi',
            'Simplicity is the ultimate sophistication. - Leonardo da Vinci',
            'Simplicity is the essence of happiness. - Cedric Bledsoe',
            'Smile, breathe, and go slowly. - Thich Nhat Hanh',
            'Simplicity is an acquired taste. - Katharine Gerould',
            'Well begun is half done. - Aristotle',
            'He who is contented is rich. - Laozi',
            'Very little is needed to make a happy life. - Marcus Antoninus',

        ])->random();
    }
}
