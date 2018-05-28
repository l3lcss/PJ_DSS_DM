<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="css/style_result_text.css">
    <script  src="js/JS_result_text.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<link rel="stylesheet" href="css/style_predicted.css">

</head>
<body>
    <?php
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $department = $_POST["department"];
        $point[0] = $_POST["pointGenMath"];
        $point[1] = $_POST["pointIntro"];
        $point[2] = $_POST["pointCompro"];
        $point[3] = $_POST["pointC++"];
        $point[4] = $_POST["pointEng1"];
        $point[5] = $_POST["pointElect"];
        $point[6] = $_POST["pointDiscrete"];
        $point[7] = $_POST["pointOOP"];
        $point[8] = $_POST["pointJava"];
        $point[9] = $_POST["pointDigital"];
        $point[10] = $_POST["pointDataStruc"];
        $point[11] = $_POST["pointEng2"];
        $gpa = $_POST["gpa"];
        $btnsub = $_POST["sbmt"];

        for ($i=0; $i < 12; $i++) { 
            if($point[$i] == "a" || $point[$i] == "b+") $point[$i] = "high";
            else if($point[$i] == "b" || $point[$i] == "c+" || $point[$i] == "c") $point[$i] = "medium";
            else $point[$i] = "low";
        }

        if(isset($_POST["sbmt"])){
            $data = array ('gender,age,DEPARTMENT,POINT GENERAL MATHEMATICS,POINT INTRODUCTION TO INFORMATION,POINT COMPUTER PROGRAMMING,POINT COMP PROGRAMMING LAB (C++),POINT ENGLISH I,POINT FUNDAMENTAL OF ELECTRONICS,POINT DISCRETE MATHEMATICS AND APP,POINT OBJECT-ORIENTED PROGRAMMING,POINT OBJECT-ORIENTED PROGRAMMING LAB (JAVA),POINT FUNDAMENTAL OF DIGITAL,POINT DATA STRUCTURE AND ALGORITHM,POINT ENGLISH II,GPA,MAJOR',
             'Female,21,business-com,medium,medium,low,high,medium,high,medium,medium,high,high,medium,medium,1.98,Network',
             'Male,22,art-math,medium,high,medium,medium,medium,medium,medium,medium,medium,high,medium,medium,3,Information-Science',
             'Male,21,Fine-Arts,medium,medium,high,high,high,high,high,high,high,high,medium,medium,3.7,Information-Science',
             'Female,21,art-math,medium,medium,low,medium,low,medium,medium,low,low,medium,low,low,2.13,Multimedia',
             'Male,21,art-math,medium,high,low,low,medium,medium,medium,high,low,medium,medium,medium,2.75,Business',
             'Female,21,science-math,high,high,medium,low,medium,medium,medium,low,low,medium,low,medium,2.45,Business',
             'Female,20,art-language,medium,high,low,medium,medium,low,medium,low,medium,low,low,medium,2.09,Information-Science',
             'Male,21,art-math,low,medium,low,medium,medium,low,low,medium,medium,high,high,high,2.2,Multimedia',
             'Male,21,art-math,medium,low,low,low,medium,low,low,low,low,low,low,medium,2.06,Multimedia');
    
    
            $input = $gender . "," . $age . "," . $department;
            for ($i=0; $i < 12 ; $i++) { 
                $input .= "," . $point[$i];
            }
            $input .= "," . $gpa . ",?";
            array_push($data,$input);

            // for ($i=0; $i < 11 ; $i++) { 
            //     echo $data[$i] . "<br>";
            // }
            $fp = fopen('Preprocess_fin.csv', 'w');
                foreach($data as $line){
                    $val = explode(",",$line);
                    fputcsv($fp, $val);
                }
            fclose($fp);
    
             $cmd = 'java -classpath "C:\Program Files\Weka-3-7\weka.jar" weka.core.converters.CSVLoader -N "last" Preprocess_fin.csv > Preprocess_fin_unseen.arff ';
             exec($cmd,$output);
    
            // // run unseen data -p 5 is class attribute
             $cmd1 = 'java -classpath "C:\Program Files\Weka-3-7\weka.jar" weka.classifiers.lazy.IBk -T "Preprocess_fin_unseen.arff" -l "model_Ibk.model" -p 17'; // show output prediction
             exec($cmd1,$output1);
            

            //   echo "<br><br><hr>" . $output1[14];

          }
        
    ?>
    <video autoplay muted loop id="myVideo">
      <source src="Love-Coding.mp4" type="video/mp4">
    </video>

        <div class="center">
            <h1 id="word">
                <span class="letter">P</span>
                <span class="letter">R</span>
                <span class="letter">E</span>
                <span class="letter">D</span>
                <span class="letter">I</span>
                <span class="letter">C</span>
                <span class="letter">T</span>
                <span class="letter">I</span>
                <span class="letter">V</span>
                <span class="letter">E</span>
            </h1>
            <h1 id="word">
                <span class="letter">E</span>
                <span class="letter">F</span>
                <span class="letter">F</span>
                <span class="letter">E</span>
                <span class="letter">C</span>
                <span class="letter">T</span>
            </h1>
            <div id="test"></div>
            
        </div>

        <div class="container">
            <div class="animate three">
                <?php
                    $data = array("Information Science","Multimedia","Network","Business");
                    if(substr($output1[14],18,1) == "2"){
                        for ($i=0; $i < strlen($data[0]); $i++) { 
                            if($data[0]{$i} == " ") echo "<span>&nbsp;&nbsp;</span>";
                            else echo "<span>".$data[0]{$i}."</span>";
                        }
                    } 
                    else if(substr($output1[14],18,1) == "3"){
                        for ($i=0; $i < strlen($data[1]); $i++) {
                            echo "<span>".$data[1]{$i}."</span>";
                        }
                    }
                    else if(substr($output1[14],18,1) == " " ){
                        for ($i=0; $i < strlen($data[2]); $i++) {
                            echo "<span>".$data[2]{$i}."</span>";
                        }
                    }
                    else{
                        for ($i=0; $i < strlen($data[3]); $i++) {
                            echo "<span>".$data[3]{$i}."</span>";
                        }
                    }

                    // echo " >>> " . $output1[14];
                ?>
            </div>
        </div>
          
        <div class="ContainerbtnBack">
        <button onclick="window.location.href='index.php'" class="btnBack">Back</button>
        </div>
</body>
</html>