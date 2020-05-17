<?php
try {
  $dsn = new PDO('mysql:host=localhost;dbname=db','root','root',
  array(PDO::ATTR_EMULATE_PREPARES => false));
  $md = md5('1234');
  print $md;
  $dsn->query("INSERT INTO logintable VALUES(1,'user1',md5('user1'))");

  $re = $db->query("select * from logintable");
  while($kekka = $re->fetch()){
    print $kekka[0];
    print $kekka[1];
    print $kekka[2];
  }

} catch (PDOException $e) {
  exit('データベース接続失敗。'.$e->getMessage());
}



?>
<?php
try {
    $dbh = new PDO('mysql:host=mysql136.phy.lolipop.lan;dbname=LAA0939363-dbmag', "LAA0939363", "bambini");
    $dbh->query("INSERT INTO logintable VALUES(1,'admin',md5('1234'))");
    $dbh = null;
} catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
}
?>
