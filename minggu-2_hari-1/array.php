<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
        $totalKids = count($kids);
        $totalAdults = count($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: $totalKids" ; // Berapa panjang array kids
        echo "<br>";
        echo "  <ol> 
                    <li> $kids[0]</li> 
                    <li> $kids[1]</li> 
                    <li> $kids[2]</li> 
                    <li> $kids[3]</li> 
                    <li> $kids[4]</li> 
                    <li> $kids[5]</li>  
                </ol>"; 
        
        echo "Total Adults: $totalAdults" ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol> 
                <li> $adults[0]</li> 
                <li> $adults[1]</li> 
                <li> $adults[2]</li> 
                <li> $adults[3]</li> 
                <li> $adults[4]</li>  
            </ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */

        $age = array( "Will Byers" => "12", "Mike Wheeler" => "12", "Jim Hopper" => "43", "Eleven" => "12");
        $aliases = array( "Will Byers" => "Will the Wise", "Mike Wheeler" => "Dungeon Master", "Jim Hopper" => "Chief Hopper", "Eleven" => "El");
        $status = array( "Will Byers" => "Alive", "Mike Wheeler" => "Alive", "Jim Hopper" => "Deceased", "Eleven" => "Alive");

        echo $age["Will Byers"] . "<br>" . $age["Mike Wheeler"] . "<br>" . $age["Jim Hopper"] . "<br>" . $age["Eleven"];
        echo "<br>" . $aliases["Will Byers"] . "<br>" . $aliases["Mike Wheeler"] . "<br>" . $aliases["Jim Hopper"] . "<br>" . $aliases["Eleven"];
        echo "<br>" . $status["Will Byers"] . "<br>" . $status["Mike Wheeler"] . "<br>" . $status["Jim Hopper"] . "<br>" . $status["Eleven"];

        
    ?>
</body>
</html>