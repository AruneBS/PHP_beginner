<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<style>
   
   


    

</style>
</head>


<body>

    <div class="conainer">
        <h1 style="text-align: center;">10x10 MULTIPLICATION CHART</h1>
        <table class="table w-50 text-center">
            <tr>
                <th class="border"></th>
                <?php for ($a = 1; $a < 11; $a++) { ?>
                    <th class="border"><?= $a ?></th>
                <?php } ?>
            </tr>
            <?php for ($x = 1; $x < 11; $x++) { ?>
                <tr>
                    <th class="border"><?= $x ?></th>
                    <?php for ($y = 1; $y < 11; $y++) { ?>
                        <td class="border"><?= $x * $y ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>