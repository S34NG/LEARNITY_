<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <!-- Poppins Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Close Google Fonts -->

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Close Tailwind CDN -->

    <!-- Style CSS -->
    <!-- From css folder app.css -->
    
    <!-- Close Style CSS -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link style -->
    <link rel="stylesheet" type="text/css" href="/css/course.css" >
    <link rel="stylesheet" type="text/css" href="/css/main.css" >

    <title>Lesson Page</title>
</head>
<body>

<style>
    *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        }

        body{
            height: 100vh;
            width: 100%;
            /* background: linear-gradient(90deg, #00DAFD, 10%, white) ; */
        }

    .logo {
        /* position: absolute; */
        transform: translate(0%, 0%);
        color: white;
    }

    .logo .logo-n{
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 5px;
    }

    .logo .ggg-txt{
        font-size: 12px;
        text-align: end;
        font-weight: 100;
    }

    .logo .triangle{
        display: flex;
        /* justify-content: space-between; */
        /* position: absolute; */
        /* top: -5%; */
    }

    .logo .tri-o-r{
        border-bottom: 20px solid red;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        margin: 0 5px;
    }

    .logo .tri-o-g{
        border-top: 20px solid green;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        margin: 0 5px;
    }

    .logo .tri-o-b{
        border-bottom: 20px solid blue;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        margin: 0 5px;
    }

    .list-lesson-sb{
        background-color: whitesmoke;
        width: 300px;
        padding: 15px 30px;
        height: 100vh;
        overflow: hidden;
        position: absolute;
    }

    .list-lesson-sb .txt-course-title{
        border-bottom: 1px solid black ;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .list-lesson-sb .list-mn{
        font-size: 18px;
    }

    .ls-style{
        padding: 15px 5px;
        border: 1px solid lightslategray;
    }

    .ls-style:hover{
        /* background: -webkit-linear-gradient(right, #00DAFD, white, #00DAFD, white); */
        background-color: #00DAFD;
        cursor: pointer;
    }

    .workspace{ 
        /* width: calc(100%); */
        width: 100%;
        position: absolute;
        right: 0;
        background-color: whitesmoke;
        height: 100vh;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        flex-direction: column;
        overflow: hidden;
        /* padding: 20px;
        margin: 20px; */
        /* display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-auto-rows: minmax(500px, auto);
        grid-gap: 30px; */

    }

    .workspace .vdo-showing{
        width: 1600px;
        height: 700px;
        background-color: black;
        position: absolute;
        top: 5%;
    }

</style>

<nav class=" bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <div class="logo">
            <div class="triangle">
                <span class="tri-o-r"></span>
                <span class="tri-o-g"></span>
                <span class="tri-o-b"></span>
            </div>
            <div class="logo-n">
                LEARNITY
            </div>
            <div class="ggg-txt">
                GET GAIN GROW
            </div>
        </div>
    <!-- Main Menu Button when on Mobile Screen -->
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" 
            fill="currentColor" 
            viewBox="0 0 20 20" 
            xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" 
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" 
                            clip-rule="evenodd"></path>
        </svg>
    </button>
    <!-- Navbar Text -->
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="   
                    flex 
                    flex-col p-4 mt-4 
                    border 
                    border-gray-100 
                    rounded-lg 
                    bg-gray-50 
                    md:flex-row 
                    md:space-x-8 
                    md:mt-0 md:text-sm 
                    md:font-medium md:border-0 
                    md:bg-white dark:bg-gray-800 
                    md:dark:bg-gray-900 
                    dark:border-gray-700
                "
      >
        <li>
          <a href="#" 
                class=" 
                        block py-2 pl-3 pr-4 
                        text-white bg-blue-700 
                        rounded md:bg-transparent 
                        md:text-blue-700 md:p-0 
                        dark:text-white
                        text-base
                    " 
                        aria-current="page"
            >
                Course
            </a>
        </li>
        <li>
          <a href="#" 
                class=" block 
                        py-2 pl-3 
                        pr-4 text-gray-700 rounded 
                        hover:bg-gray-100 md:hover:bg-transparent 
                        md:border-0 md:hover:text-blue-700 md:p-0 
                        dark:text-gray-400 md:dark:hover:text-white 
                        dark:hover:bg-gray-700 dark:hover:text-white 
                        md:dark:hover:bg-transparent
                        text-base    
                    "
                        
            >
                Cart
        </a>
        </li>
        <li>
          <a href="#" 
                class=" block py-2 pl-3 pr-4 
                        text-gray-700 rounded 
                        hover:bg-gray-100 
                        md:hover:bg-transparent 
                        md:border-0 md:hover:text-blue-700 
                        md:p-0 dark:text-gray-400 
                        md:dark:hover:text-white 
                        dark:hover:bg-gray-700 
                        dark:hover:text-white 
                        md:dark:hover:bg-transparent
                        text-base
                    "
                >
                Profile
            </a>
        </li>
        <li>
          <a href="#" 
                class=" block py-2 pl-3 pr-4 
                        text-gray-700 rounded 
                        hover:bg-gray-100 
                        md:hover:bg-transparent 
                        md:border-0 md:hover:text-blue-700 
                        md:p-0 dark:text-gray-400 
                        md:dark:hover:text-white 
                        dark:hover:bg-gray-700 dark:hover:text-white 
                        md:dark:hover:bg-transparent
                        text-base    
                    "
            >
                <!-- <i class="fa-light fa-right-from-bracket"></i> -->
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- Leftside List -->

<div class="workspace">
    <!-- Workspace Showing Lesson -->
    <div class="vdo-showing">
        
    </div>

    <div class="cmt-section">
        <div class="cmt-box">

        </div>
        <div class="cmt-show">
            
        </div>
    </div>

</div>

</body>
</html>