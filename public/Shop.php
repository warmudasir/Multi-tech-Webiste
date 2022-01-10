<!DOCTYPE html>
<html>
  <header>
    <head>
      <link href="shop.css" rel="Stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.tailwindcss.com"></script>
      <nav class="navbar navbar-dark bg-dark" style="padding: 20px;">
        <div class="container-fluid">
          <a href="index.php" style="text-decoration: none;"><span class="navbar-brand mb-0 h1">Home</span></a>
        </div>
      </nav>
      <title>Shop Here</title>
    </head>
  </header>
  <body>
    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white" >
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8" >
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="billing.php" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8" >
          <img src="./photos/Untitled design (2).png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          I phone X
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $800
        </p>
      </a>

      <a href="billing.html" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design (3).png" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
         JBL Speakers
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $305
        </p>
      </a>

      <a href="billing.php" class="group" style="border:solid 3px black"> 
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          I phone 13 MINI
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $1099
        </p>
      </a>
      <form >
      <button class="group" style="border:solid 3px black" >
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700" name="Product">
          Alexa
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $200
        </p>
      </button>
      </form>
      <!-- More products... -->
    </div>
  </div>
</div>


<!--Another one-->

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="billing.html" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design (2).png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          Earthen Bottle
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $48
        </p>
      </a>

      <a href="billing.php" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design (3).png" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          Nomad Tumbler
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $35
        </p>
      </a>

      <a href="billing.php" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          Focus Paper Refill
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $89
        </p>
      </a>

      <a href="billing.php" class="group" style="border:solid 3px black">
        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="./photos/Untitled design.png" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-full h-full object-center object-cover group-hover:opacity-75">
        </div>
        <hr style="border solid 2px black">
        <h3 class="mt-4 text-sm text-gray-700">
          Machined Mechanical Pencil
        </h3>
        <p class="mt-1 text-lg font-medium text-gray-900">
          $35
        </p>
      </a>

      <!-- More products... -->
    </div>
  </div>
</div>

  </body>
<div id="footer" style="color: white;background-color:black;">
  <br>
  <p class="text-center" style="color: white;"> © Prop.G.M.WAR \\© 2005-2022 Mozilla and individual contributors. Content is available under these licenses.</p>
  <div class="container" style="color: white;">
      <div class="row">
        <div class="col">
          Follow us on our Instagram Handle
        </div>
        <div class="col">
          Contact Details
          <br><br>
          <p>Adress Details :Multi-tech Old Hospital Road BARAMULLA-Kashmir</p>
          <p>Phone.Numbers:7006567282<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:9596141650</p>
        </div>
        <div class="col">
          24*7 service
          <br><br>
          <a href="https://www.facebook.com/search/top?q=multitech%20baramulla%20kashmir%20193101"><img src="/photo/facebook (3).png" style="height: 40px;"></a>
        </div>
      </div>
    </div>

</div>
</html>