
  date_default_timezone_set("Europe/Prague");
$ted = date("H:i:s");      
$den = date("j. n. Y");
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <title>PHP: čas serveru</title>
</head>
<body>
  <h1>Na serveru je právě <?php echo $ted; ?></h1>
  <p>Dnes je <?php echo $den; ?></p>

  <meta charset="utf-8">
  <title>Moje první PHP</title>
<body>
  <h1><?php echo "Ahoj, tady IT2-14!"; ?></h1>
  <h2><?php echo "Cislo 14 je muj kod od ucitele"; ?></h2>
  <p>Tenhle nadpis vyrobil program. Běžel na serveru, a server je teď počítač u GitHubu. HaHa</p>
  <p><?php echo "PHP je zajimavy"; ?></p>
</body>
</html>
