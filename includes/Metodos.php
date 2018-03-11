<?php
/**
 * Created by PhpStorm.
 * User: yevbes
 * Date: 15/02/2018
 * Time: 18:41
 */

class Metodos
{
    private $msqli;

    function __construct($mysqli)
    {
        $this->msqli = $mysqli;
    }

    public function getPopularArticles($limit)
    {
        $stmt = $this->msqli->prepare('select * from articles ORDER BY views DESC LIMIT ?');
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function getPopularArticlesFlag($limit)
    {
        $stmt = $this->msqli->prepare('select * ,articles.id AS artid, SUBSTRING(articles.text, 1, 90) AS text from articles ORDER BY views DESC LIMIT ?');
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function getCategories()
    {
        return $this->msqli->query('select * from articles_categories');
    }

    public function getRecentArticles($limit)
    {
        $stmt = $this->msqli->prepare('select * from articles ORDER BY pubdate DESC LIMIT ?');
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function getRecentArticlesFlag($limit)
    {
        $stmt = $this->msqli->prepare('select *, articles.id AS artid, SUBSTRING(articles.text, 1, 90) AS text from articles ORDER BY pubdate DESC LIMIT ?');
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function getTags()
    {
        return $this->msqli->query('SELECT tags.Title AS title,article_id AS article FROM tags JOIN articles_tags Art_Tags ON tags.id = Art_Tags.tag_id JOIN articles a ON Art_Tags.article_id = a.id');
    }

    public function getArticleById($id)
    {
        $stmt = $this->msqli->prepare('select articles.categorie_id AS catid, articles.id AS artid, articles.title AS title, articles.image AS imgart , articles.text AS text, articles_categories.title AS titlecat, articles.pubdate AS date,articles_categories.image AS image from articles JOIN articles_categories WHERE articles.categorie_id = articles_categories.id AND articles.id = ?');
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function articlesPerPage($offset, $per_page)
    {
        $stmt = $this->msqli->prepare('select articles.categorie_id AS catid ,articles.id AS artid,articles.title AS title, articles.image AS imgart , 
SUBSTRING(articles.text, 1, 500) AS text, articles_categories.title AS titlecat, articles.pubdate AS date,articles_categories.image AS image from articles JOIN articles_categories 
WHERE articles.categorie_id = articles_categories.id LIMIT ?,?');
        $stmt->bind_param("ii", $offset, $per_page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public function categoriesPerPage($id, $offset, $per_page)
    {
        $stmt = $this->msqli->prepare('select articles.categorie_id AS catid, articles.id AS artid, articles.title AS title, articles.image AS imgart , SUBSTRING(articles.text, 1, 500) AS text, articles_categories.title AS titlecat, articles.pubdate AS date,articles_categories.image AS image from articles JOIN articles_categories WHERE articles.categorie_id = articles_categories.id AND articles_categories.id = ? LIMIT ?,?');
        $stmt->bind_param("iii", $id, $offset, $per_page);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->free_result();
        $stmt->close();
        return $result;
    }
}

