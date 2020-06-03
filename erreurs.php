<?php include('serveur.php');?>
<html>
    <head><title>error</title>
</head>
<body>
<?php if(count($erreurs) > 0): ?>
    
  <div class="error">
       <?php foreach ($erreurs as $erreur): ?>
             <p><?php echo $erreur; ?></p>
      <?php endforeach ?>
     </div>
     <?php endif ?>
</body>
<style>
    .error{
    width: 93%;
    margin: 10px;
    padding: 10px;
    border: 1px solid #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
    color:red;

}
</style>
</html>