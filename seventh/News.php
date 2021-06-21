<?php


class News
{
    protected array $articles = [];

    /**
     * @param Article $article
     */
    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
        $file = fopen(__DIR__ . '/news.txt', 'a');
        fwrite($file, $article->article . "\n");
        fclose($file);
    }

    /**
     * @return array
     */
    public function getArticles(): array
    {
        return file(__DIR__ . '/news.txt');
    }
}