<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commentsContent = [
            'Отличный пост! Ваш взгляд на книгу действительно интересен.',
            'Эта книга действительно заслуживает внимания. Хочу ее прочитать!',
            'Ваши рекомендации всегда на высоте. Спасибо за интересный обзор!',
            'Полностью согласен с вашим мнением. Хочу узнать больше о этой книге.',
            'Какие эмоции вызвала у вас эта книга? Поделитесь впечатлениями!',
            'Очень интересная перспектива! Продолжайте в том же духе.',
            'Ваш взгляд на сюжет привлекает. Как вам удалось так глубоко погрузиться в суть?',
            'Уже в списке "Книги, которые нужно прочитать". Спасибо за рекомендацию!',
            'Не могу дождаться, чтобы узнать, что произойдет дальше. Спасибо за интригующий обзор!',
            'Ваши отзывы всегда такие информативные. Отличная работа!',
            'Каждый ваш пост — настоящее удовольствие для любителей чтения. Спасибо!',
            'Замечательные слова о книге. Уже добавил(а) в свой список.',
            'Ваши рецензии всегда такие эмоциональные! Продолжайте радовать нас новыми постами.',
            'Очень понравилось ваше мнение. Жду новых обзоров от вас!',
            'Спасибо за рекомендацию. Обязательно прочту эту книгу!',
            'Интересно узнать больше деталей. Можете рассказать о любимых моментах в книге?',
            'Читаю этот пост уже второй раз. Какие у вас любимые цитаты из этой книги?',
            'Как вы думаете, какие аспекты этой книги особенно привлекут читателей?',
            'Какие еще книги вы бы порекомендовали в том же жанре?',
            'С вашими рекомендациями всегда находишь что-то интересное для чтения. Спасибо!',
            'Какие ваши ожидания от следующей главы? Ждем продолжения!',
            'Согласен с вашим мнением. Эта книга — настоящий шедевр.',
            'Очень интересный взгляд на происходящее. Хочу узнать больше!',
            'Какие книги стали для вас настоящими открытиями в этом году?',
            'По вашему описанию книга звучит увлекательно. Поставил(а) в список для прочтения!',
            'Какие эмоции вы испытали, читая этот пост? Очень интересно ваше мнение!',
            'Спасибо за интересный обзор. Как вы выбираете книги для обзоров?',
            'Очень живописное описание. С нетерпением жду ваших новых рецензий!',
        ];

        $type = [
            "App\Models\Post",
            "App\Models\Book"
        ];

        function getRandomType(): int
        {
            return rand(0, 1);
        }

        for ($i = 0; $i < 25; $i++) {
            Comment::factory()->create([
                "user_id"=> getRandomUserId(),
                "content" => $commentsContent[$i],
                "commentable_id" => getRandomType(),
                "commentable_type" => $type[rand(0,1)],
            ]);
        }
    }
}
