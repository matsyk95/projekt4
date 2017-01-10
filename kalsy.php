<!DOCTYPE html>
<html>
    <head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <link rel="stylesheet" href="projekt4_style2.css" type="text/css" media="all" />	
        <title>sprawdz</title>
    </head>
    <body>

        <?php
        class Osoba {
            private $pesel;
            private $imie;
            private $nazwisko;
            function __construct() {
                $this->pesel = '12345678912';
                $this->imie = 'Grzegorz';
                $this->nazwisko = 'Brzęczyszczykiewicz';
            }
            function osoba() {
                echo $this->imie . ' ' . $this->nazwisko . ' ' . $this->pesel . '<br/>';
            }
        }
        
        class Student extends Osoba {
            private $ocena;
            
            function __construct($pesel, $imie, $nazwisko, $ocena) {
                $this->pesel = $pesel;
                $this->imie = $imie;
                $this->nazwisko = $nazwisko;
                $this->ocena= $ocena;
            }
            
            function student() {
                echo $this->imie . ' ' . $this->nazwisko . ' ' . $this->pesel . ' Ocena: ' . $this->ocena . '<br/>';
            }
            
            function __destruct() {
		
	}
            
        }
        ?>
		
		<div>
            <h1>Osoba</h1>
            <?
            $bartek = new Osoba;
            $bartek->osoba();
            ?>
            <p>Serializacja:</p>
            <?
            $serialization = serialize($bartek);
            echo $serialization . '</br> <h2> Deserializacja: </h2>';
            $obiekt = unserialize($serialization);
            $obiekt->osoba();
            ?>
            
            <h2>Student</h2>
             <?
            $ania = new Student('15478565492','ania', 'lala', "5");
            $ania->student(); 
            ?>
             <p>Serializacja:</p>
            <?
            $serialization2 = serialize($pawel);
            echo $serialization2 . '</br> <h2> Deserializacja : </h2>';
            $obiekt2 = unserialize($serialization2);
            $obiekt2->student();
            ?>
        </div>
		
		
		</body>
		</html>
