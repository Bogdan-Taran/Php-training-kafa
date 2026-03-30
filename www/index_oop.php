<?php
class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}

class Admin extends User
{
}

$author = new User('Иван');
$article = new Article('Заголовок', 'Текст', $author);

var_dump($article);
echo 'Имя автора: ' . $article->getAuthor()->getName();

$author1 = new Admin('Пётр');
$article1 = new Article('Заголовок', 'Текст', $author1);
var_dump($article1);
