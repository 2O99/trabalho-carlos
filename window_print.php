<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Imprimir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-secondary p-5">
	<div class="container card rounded shadow p-5 mx-auto">
        
        <div class="d-flex flex-row">
                <h1>
                    <?php
                        if(isset($_POST['name'])){
                            $calculatedAge = $_POST['calculatedAge'];
                            echo $_POST['name'] . ', ' . $calculatedAge;
                        }
                    ?>
                </h1>
        </div>

        <h2>Experiências e Referências: </h2>
        <div 
            class="d-flex flex-row justify-content-between mt-4">
    
            <p>
                Experiências:
                <br>
                <?php
                    if(isset($_POST['experience'])){
                        foreach($_POST['experience'] as $exp){
                            echo "$exp<br>";
                        }
                    }
                ?>
    
            </p>
    
            <p>
                Referências:
                <br>
                <?php
                    if(isset($_POST['qi'])){
                    foreach($_POST['qi'] as $qi){
                        echo "$qi<br>";
                    }
                }
                ?>
    
            </p>
    
        </div>
        <button 
            class="mt-4 btn btn-primary"
            onclick="printCurriculum()">
            Imprimir
        </button>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>
