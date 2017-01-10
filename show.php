<!DOCTYPE html>
<html>
    <head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Sykut Mateusz">
        <link rel="stylesheet" href="style_projekt4.css" type="text/css" media="all" />	
        <title>sprawdz</title>
    </head>
    <body>
	
        <?php
        if ($handle = opendir('./pliki/')) {
            $licz = -2;
            $thelist .= "<table>
  <tr>
    <th>Lp.</th>
    <th>Nazwa</th>
    <th>Typ</th> 
    <th>Rozmiar</th>
  </tr>";
            while (false !== ($file = readdir($handle))) {
                $licz++;
                // echo "./pliki/$file";
                $wynik = filesize("./pliki/$file");
                $typ = filetype("./pliki/$file");
                if ($file != "." && $file != "..") {
                    //    $thelist .= "<li>$licz. <a href=\"pliki/$file\" download=\"$file\">$file</a> <b>TYP:</b> $typ    <b>ROZMIAR:</b> $wynik bitów </li>";
                    $thelist .= "<tr>
                                        <td>$licz.</td>
                                        <td><a href=\"pliki/$file\" download=\"$file\">$file</a></td>
                                        <td>$typ</td>
                                        <td>$wynik bitÃ³w</td>
                                    </tr>";
                }
            }
            $thelist .= "</table>";
            closedir($handle);
        }
        ?>
	
	</body>
	</html>
