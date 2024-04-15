<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.7.1.min"></script>
    <link rel="stylesheet" href="./foundation/css/foundation.css">
    <link rel="stylesheet" href="./index.css">
    
    <title>Rivas Pinestraw</title>

    <style>
         
    </style>
    
    <script>
        $( document ).ready(function() {
            $("#alert").on("click", createAlert);
            $("#update").on("click", changeBodyText);
             
            function createAlert() {
                alert("Hello World!");
            }
            function changeBodyText() {
                $("#body").html("<h2 id=text>I have changed!<h2>");
            }
                     
        });
    </script>

    <?php
        require("./src/functions.php")   
    ?>
</head>

<body>
    <div id="entire">
        <div class="grid-x">
            <div id="navigation" class="cell small-12 medium-12 large-12 text-right">
                <a id="update">Update Body</a> 
                <div style="border: 1px solid black; height: 30px; margin: 5px;"></div>
                <a id="alert">Alert</a>
            </div>
            <div id="header" class="cell small-12 medium-12 large-12 text-right">
                <img id = img1 
                src=./public/sunset_boat.jpg>
            </div>
        </div>

        <div class="grid-x">
            <div id="sidebar" class="cell small-12 medium-4 large-4 text-right">
                <p id="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis purus mi, eu lacinia ante semper vitae. Sed metus felis, pretium quis semper volutpat, aliquet non mauris. Etiam maximus enim vitae metus posuere, at cursus tellus pellentesque. Nunc lobortis varius est. Morbi ac neque nec erat vehicula cursus vel a tortor. Curabitur fermentum lectus eget risus vulputate, vel tincidunt justo ultricies. Sed sed ante ex. Quisque vitae quam at erat commodo mattis et non ipsum. Phasellus ac ultrices eros. Morbi vel ultrices justo. Nunc at aliquam ex. Etiam ornare in velit ut feugiat. Nulla urna dolor, placerat id dictum eget, sodales ut risus. Praesent at dictum ligula.

    Ut accumsan felis a dapibus porta. Suspendisse iaculis ligula tortor, non bibendum velit eleifend eget. Proin luctus sed arcu sed molestie. Duis sed nulla porta, faucibus massa in, euismod elit. Fusce purus purus, eleifend at magna imperdiet, posuere consectetur nulla. Cras pharetra, purus non pellentesque congue, enim lacus varius nisi, non luctus libero mi eu sapien. Morbi et augue ut nisi elementum pulvinar eget non nunc. Sed in lacinia mi. In bibendum posuere leo, at posuere ex eleifend in. Aliquam erat volutpat.

    Pellentesque vehicula diam venenatis massa aliquet lacinia. Quisque a gravida quam. Integer iaculis consectetur mauris. Morbi sit amet tincidunt dui. Integer malesuada rutrum nisl ac tincidunt. Morbi vitae convallis ipsum. Phasellus vulputate ornare nisi, eget maximus mauris imperdiet nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam tincidunt sapien ac leo tincidunt, eget aliquam nulla hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquet purus tellus, vel venenatis nulla tincidunt dictum. Proin vel dui justo. Quisque sit amet nisi nisi. Aenean sagittis, ipsum id convallis rhoncus, sem sem aliquet urna, vitae interdum eros libero sit amet nulla.

    Phasellus in lorem convallis, efficitur orci quis, iaculis nisi. Duis eget augue nulla. Phasellus ultrices dolor ut ante egestas bibendum. Nullam sit amet augue eleifend, fermentum leo et, vestibulum risus. Etiam ac dui odio. Donec justo mi, convallis ac viverra in, suscipit elementum sapien. Etiam congue metus sit amet urna venenatis maximus. Donec vitae diam et nulla blandit lacinia. Nullam tristique leo risus, nec hendrerit erat faucibus vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

    Mauris quis eros vulputate, euismod ex quis, posuere massa. Donec sed mi et metus iaculis varius et vitae nibh. Aliquam id dapibus orci, ac consectetur mauris. Mauris dapibus tortor eget ante ullamcorper, nec finibus ante tempus. Mauris semper fringilla nulla ac blandit. Phasellus tristique, velit vitae malesuada rhoncus, nisl felis volutpat sapien, vel consequat ante tortor ornare nunc. Nulla vel augue fringilla, posuere felis nec, iaculis augue. Mauris bibendum est nibh, in ultricies lorem rutrum nec. Maecenas sit amet nisi urna. Vivamus finibus lectus id arcu varius vulputate. Donec accumsan tortor orci, vel bibendum dolor auctor id.
                </p>
            </div>
            <div id="body" class="cell small-12 medium-8 large-8 text-right">
                <h2 id="text">Content Page 1</h2>
                <p id="text">This is the current time and date (Refresh to get new current time and date):<br><?php currentDateTime(); ?></p>
            </div>
        </div>
        <div class="grid-x">
            <div id="footer" class="cell small-12 medium-12 large-12 text-right">
                <p id="text">©2024 Hardwood Vazquez, All Rights Reserved</p>
                <p id="text">Design by Hardwood Vazquez</p>
            </div>
        </div>
    </div>
</body>
</html>