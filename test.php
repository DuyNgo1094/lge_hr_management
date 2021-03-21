<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #e2d5d5;
        }

        .nav_wrapper {
            position: absolute;
            background-color: white;
            box-shadow: 0px 0px 10px #bbbbbb;
            height: 100vh;
        }

        .nav_expand {
            width: 2rem;
            height: 2rem;
            fill: #8e7f7f;
            background-color: white;
            box-shadow: 0px 0px 10px #bbbbbb;
            border-radius: 50%;
            position: absolute;
            right: -1rem;
            top: 2.5rem;
            z-index: 990;
            cursor: pointer;
            transform: rotateZ(-180deg);
            transition: transform 200ms ease-in-out;
            text-align: center;
            text-decoration: none;
        }

        .nav_expand:hover {
            background-color: blue;
        }

        .nav_list {
            display: flex;
            flex-direction: column;
        }

        .nav_list_item {
            list-style: none;
            transition: all 200ms ease-in;
            padding: 1rem 1.5rem;
            border-left: 1px solid transparent;
            cursor: pointer;
        }

        .nav_list_item:hover {
            background-color: #bbbbbb;
        }

        a {
            text-decoration: none;
            font-weight: 500;
            gap: 1rem;
            display: flex;
            align-items: center;
        }

        .item-active {
            background-color: #bbbbbb;
            border-left: 6px solid blue;
        }

        .nav_closed .nav_expand {
            transform: rotatez(0deg);
        }

        .nav_closed .nav_list_item p {
            display: none;
        }
    </style>

</head>

<body>
    <nav class="nav_wrapper">
        <a href="#" class="nav_expand">></a>
        <ul class="nav_list">
            <li class="nav_list_item item-active">
                <a href="#">
                    <sgv>icon</sgv>
                    <p>ITEM 1</p>
                </a>
            </li>
            <li class="nav_list_item">
                <a href="#">
                    <sgv>icon</sgv>
                    <p>ITEM 2</p>
                </a>
            </li>
            <li class="nav_list_item">
                <a href="#">
                    <sgv>icon</sgv>
                    <p>ITEM 3</p>
                </a>
            </li>
            <li class="nav_list_item">
                <a href="#">
                    <sgv>icon</sgv>
                    <p>ITEM 4</p>
                </a>
            </li>
        </ul>
    </nav>

    <script>
        let navExpand = document.querySelector(".nav_expand");
        let nav_bar = document.querySelector(".nav_wrapper");
        let navListItem = document.querySelectorAll(".nav_list_item");

        navExpand.addEventListener("click", function() {
            nav_bar.classList.toggle("nav_closed");
        })

        navListItem.forEach(link => link.addEventListener("click",listActive));

        
        function listActive (){
            navListItem.forEach(link => link.classList.remove("item-active"));
            this.classList.add ("item-active");
        }
    </script>

</body>

</html>

<<<<<<< HEAD
<!-- test conflict from cmd -->
=======
<!-- test conflict from web-->
>>>>>>> 282932ee679563f6acea6433ee00c36e45edc882
