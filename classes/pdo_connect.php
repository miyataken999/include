<?php

class pdo_connect {
  //定数の宣言
  const DB_NAME='internet';
  const HOST='34.84.18.177';
  const UTF='utf8';
  const USER='testssh';
  const PASS='testssh';
  //データベースに接続する関数
  function pdo(){
    /*phpのバージョンが5.3.6よりも古い場合はcharset=".self::UTFが必要無くなり、array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF')が必要になり、5.3.6以上の場合は必要ないがcharset=".self::UTFは必要になる。*/
    $dsn="mysql:dbname=".self::DB_NAME.";host=".self::HOST.";";
    $user=self::USER;
    $pass=self::PASS;
    try{
      $pdo=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.self::UTF));
    }catch(Exception $e){
      echo 'error' .$e->getMessage();
      die();
    }
    //エラーを表示してくれる。
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }

  // 複数select
  function select_many($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }
  // 単独select
  function select_one($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetch(PDO::FETCH_ASSOC);
    return $items;
  }


  //SELECT,INSERT,UPDATE,DELETE文の時に使用する関数。
  function plural($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
}





class pdo_connect_kinkai {
  //定数の宣言
  const DB_NAME='kinkai';
  const HOST='35.200.113.217';
  const UTF='utf8';
  const USER='nishitani';
  const PASS='nishitani';

  public $text = '';
  //データベースに接続する関数
  function pdo(){
    /*phpのバージョンが5.3.6よりも古い場合はcharset=".self::UTFが必要無くなり、array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF')が必要になり、5.3.6以上の場合は必要ないがcharset=".self::UTFは必要になる。*/
    $dsn="mysql:dbname=".self::DB_NAME.";host=".self::HOST.";";
    $user=self::USER;
    $pass=self::PASS;
    try{
      $pdo=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.self::UTF));
    }catch(Exception $e){
      echo 'error' .$e->getMessage();
      die();
    }
    //エラーを表示してくれる。
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }

  // 複数select
  function select_many($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }
  // 単独select
  function select_one($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetch(PDO::FETCH_ASSOC);
    return $items;
  }


  //SELECT,INSERT,UPDATE,DELETE文の時に使用する関数。
  function plural($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
}


class pdo_connect_mypage {
  //定数の宣言
  const DB_NAME='mypage';
  const HOST='35.200.113.217';
  const UTF='utf8';
  const USER='nishitani';
  const PASS='nishitani';

  public $text = '';
  //データベースに接続する関数
  function pdo(){
    /*phpのバージョンが5.3.6よりも古い場合はcharset=".self::UTFが必要無くなり、array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF')が必要になり、5.3.6以上の場合は必要ないがcharset=".self::UTFは必要になる。*/
    $dsn="mysql:dbname=".self::DB_NAME.";host=".self::HOST.";";
    $user=self::USER;
    $pass=self::PASS;
    try{
      $pdo=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.self::UTF));
    }catch(Exception $e){
      echo 'error' .$e->getMessage();
      die();
    }
    //エラーを表示してくれる。
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }

  // 複数select
  function select_many($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }
  // 単独select
  function select_one($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetch(PDO::FETCH_ASSOC);
    return $items;
  }


  //SELECT,INSERT,UPDATE,DELETE文の時に使用する関数。
  function plural($sql){
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute();
    return $stmt;
  }
}
