<?php

namespace App\Core\Models;

use \Phalcon\Mvc\Model;

class Article extends Model{
  protected $id;
  protected $article_short_title;
  protected $article_long_title;
  protected $article_slug;
  protected $article_description;

  private $is_published;
  private $created_at;
  private $updated_at;

  public function setId($id){
    $this->id = $id;
    return $this;
  }

  public function setArticleShortTitle($article_short_title){
    $this->article_short_title = $article_short_title;
    return $this;
  }

  public function setArticleLongTitle($article_long_title){
    $this->article_long_title = $article_long_title;
    return $this;
  }

  public function setArticleSlug($article_slug){
    $this->article_slug = $article_slug;
    return $this;
  }

  public function setArticleDescription($articleDescription){
    $this->article_description = $articleDescription;
    return $this;
  }

  public function getId(){
    return $this->id;
  }

  public function getArticleShortTitle(){
    return $this->article_short_title;
  }

  public function getArticleLongTitle(){
    return $this->article_long_title;
  }

  public function getArticleSlug(){
    return $this->article_slug;
  }

  public function getArticleDescription(){
    return $this->article_description;
  }

  /**
   * @return mixed
   */
  public function getIsPublished()
  {
    return $this->is_published;
  }

  /**
   * @param mixed $is_published
   */
  public function setIsPublished($is_published)
  {
    $this->is_published = $is_published;
  }

  /**
   * @return mixed
   */
  public function getCreatedAt()
  {
    return $this->created_at;
  }

  /**
   * @param mixed $created_at
   */
  public function setCreatedAt($created_at)
  {
    $this->created_at = $created_at;
  }

  /**
   * @return mixed
   */
  public function getUpdatedAt()
  {
    return $this->updated_at;
  }

  /**
   * @param mixed $updated_at
   */
  public function setUpdatedAt($updated_at)
  {
    $this->updated_at = $updated_at;
  }



}