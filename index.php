<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>PHP Executer</title>
</head>

<body>

    <div class=" d-flex flex-row col">
        <div class="bg-dark text-light col vh-100 ps-3" style="overflow-y: auto;">
            <h1>Code</h1>
            <div class="form-floating me-5 bg-dark " id="coding_area">
                <textarea id="code" class="form-control bg-dark text-light" onkeyup="onKeyUp()" style="height: 85vh"></textarea>
                <label for="code" class="mb-5">Write php code here without start and end tags</label>
            </div>
        </div>
        <div class="col  vh-100 ps-3" style="overflow-y: auto;">
            <h1>Output</h1>
            <iframe src="output.php" id="right_frame" scrolling="auto"></iframe>
        </div>
    </div>

    <script>
        function onKeyUp() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.response) {
                    refreshFrame();
                }
            }
            xhttp.open("POST", "edit_output.php?html_code=" + document.getElementById('code').value);
            xhttp.send();
        }


        function refreshFrame() {
            document.getElementById('right_frame').contentWindow.location.reload();
        }
    </script>
</body>



</html>