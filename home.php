<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-500">
    <!-- html form -->
 <div class="wrapper border-black-200 background-gray-300 flex justify-center background-gray-500">
    <form class="w-full max-w-lg" action="form.php" method="post">
        <h1 class="text-blue-300 text-center font-lg mt-40">Data Submission Form</h1>
        <div class="flex flex-wrap mb-6 justify-center">
            <div class="w-full  px-3 mb-6 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-5" for="title">
                   Title
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 focus:bg-white" id="title" type="text">
                <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>
            <div class="w-full  px-3 mb-6 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-5" for="image">
                   Image
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="image" type="text">
               
            </div>
            <div class="w-full  px-3 mb-6 ">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-5" for="description">
                   Description
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="description" type="text">
               
            </div>
            
            <button class="shadow bg-blue-500 mt-2 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                  Submit
            </button>
        </div>

    </form>
</div>
</body>
</html>