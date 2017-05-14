<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Электронное пособие по математике - Тесты</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
	
	<!-- Establish connection with database -->
	<? require_once('../../settings.php'); ?>

	<!-- Load all onclick functions -->
	<script src="../../assets/js/onclick_funcs.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="/">Домой</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Начать</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/about/">О нас</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="/pages/help/">Помощь</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">ЭПМ</h3>
      </div>
 
		<?
		
			/* 
				Trying to load content from database 
			*/
			$_maxID = mysql_result(mysql_query("SELECT MAX(id) FROM tasks"), 0);
			for($i = 1; $i <= $_maxID; $i++)
			{
				$theme = mysql_query("SELECT * FROM tasks WHERE id = ". $i .""); 
				while ($_rows = mysql_fetch_array($theme, MYSQL_BOTH)) { ?>
				<div class="jumbotron">
					<h1 class="display-3" style="font-size: 1.5rem;"><strong>ЗАДАНИЕ #<?=$i?>:</strong></h1>
					<p class="lead"><?=$_rows[1]?></p>
					
					<button type="button" onclick="showAnswer('<?=$i?>', '1')" class="btn _show-1 btn-primary btn-sm" style="" id="_show-1-<?=$i?>">РЕШЕНИЕ</button>
					
					<button type="button" onclick="showAnswer('<?=$i?>', '2')" class="btn _show-1 btn-primary btn-sm" style="display: none" id="_show-2-<?=$i?>">СКРЫТЬ РЕШЕНИЕ</button>
					
					<p class="lead" id="_answer-<?=$i?>" style="display: none"><strong>ОТВЕТ:</strong> <?=$_rows[2]?></p>
				</div>
				<?}
			}
		?>

      <footer class="footer">
        <p>&copy; <a href="https://github.com/math-project-dev">math-project-dev</a> 2016-<?print(gmdate("Y"));?></p>
      </footer>

    </div>
	
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML"></script>
	<script type="text/x-mathjax-config">
	  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
	</script>
  </body>
</html>
