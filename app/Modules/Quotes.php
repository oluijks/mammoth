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

            'It\'s not what you look at that matters, it\'s what you see. &mdash; Henry David Thoreau',
            'Beware of false knowledge; it is more dangerous than ignorance. &mdash; George Bernard Shaw',
            'Blessed are those who give without remembering and take without forgetting. &mdash; Elizabeth Bibesco',
            'In order to succeed, we must first believe that we can. &mdash; Nikos Kazantzakis',
            'Aim for the moon. If you miss, you may hit a star. &mdash; W. Clement Stone',
            'Don\'t watch the clock; do what it does. Keep going. &mdash; Sam Levenson',
            'Try to be a rainbow in someone\'s cloud. &mdash; Maya Angelou',
            'Nothing is impossible, the word itself says \'I\'m possible\'! &mdash; Audrey Hepburn',
            'We know what we are, but know not what we may be. &mdash; William Shakespeare',
            'I love deadlines. I like the whooshing sound they make as they fly by. &mdash; Douglas Adams',
            'Procrastination is the art of keeping up with yesterday. &mdash; Don Marquis',
            'Behind every great man is a woman rolling her eyes. &mdash; Jim Carrey',
            'Life isn\'t about finding yourself. Life is about creating yourself. &mdash; George Bernard Shaw',
            'Life is really simple, but we insist on making it complicated. &mdash; Confucius',
            'The privilege of a lifetime is being who you are. &mdash; Joseph Campbell',
            'Every gift from a friend is a wish for your happiness. &mdash; Richard Bach',
            'Independence is happiness. &mdash; Susan B. Anthony',
            'A hug is like a boomerang &mdash; you get it back right away. &mdash; Bil Keane',
            'The starting point of all achievement is desire. &mdash; Napoleon Hill',
            'Try not to become a man of success, but rather try to become a man of value. &mdash; Albert Einstein',
            'Success is how high you bounce when you hit bottom. &mdash; George S. Patton',
            'You learn the wisest lessons from your enemy. If you live. &mdash; Aleksandr Voinov',

            'When there is no desire, all things are at peace. &mdash; Laozi',
            'Simplicity is the ultimate sophistication. &mdash; Leonardo da Vinci',
            'Simplicity is the essence of happiness. &mdash; Cedric Bledsoe',
            'Smile, breathe, and go slowly. &mdash; Thich Nhat Hanh',
            'Simplicity is an acquired taste. &mdash; Katharine Gerould',
            'Well begun is half done. &mdash; Aristotle',
            'He who is contented is rich. &mdash; Laozi',
            'Very little is needed to make a happy life. &mdash; Marcus Antoninus',

        ])->random();
    }
}
