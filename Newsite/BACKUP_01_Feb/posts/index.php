<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TailWindCSS & Integrations -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="../servermc.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        let url = "mc.playavmcgames.ml";
        $(document).ready(() => {
            $.getJSON("https://api.mcsrvstat.us/1/" + url, (status) => {
                if (status.debug.ping) {
                    $("#motd").append(status.motd.raw);
                    $("#status").append("Online");
                    $("#version").append(status.version);
                    $("#players_num").append(status.players.online + "/" + status.players.max)
                    $.each(status.players.list, function (index, player) {
                        $("#players_list").append("<li>" + player + "</li>")
                    });
                    $("#fors").append("Online " + "(" + status.players.online + "/" + "45" + ")");
                } else {
                    $("#motd").append(status.hostname);
                    $("#status").append("Maintenance | Offline");
                    $("#fors").append("Maintenance | Offline");
                    $("#version").hide();
                    $("#players_num").hide();
                }
                $("body").fadeIn(2000);
            });
        });
    </script>
    <title>Posts | AVMC</title>
  </head>
  <body>
    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
      <a href="../" class="mr-5 hover:text-gray-900">Home</a>
      <a href="" class="mr-5 hover:text-gray-900"><b>Posts</b></a>
      <a href="../shop" class="mr-5 hover:text-gray-900">Shop</a>
      <a href="../staff" class="hover:text-gray-900">Staff</a>
    </nav>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
      <span class="ml-3 text-xl"><center><img src="../servermc.png" class="rounded-full mr-4" width="50" height="600"></center></span>
    </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <a href="https://discord.gg/P5hUX85RMS" target="_blank" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        <img src="../img/discord-logo.png">Discord</a>
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </div>
</header><hr><br>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-2 mx-auto">
    <div class="flex flex-col text-center w-full mb-20"><forfont>
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">POSTS AND UPDATES</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Posts</h1></forfont>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><boldness>These are posts submitted by the Admin or the Moderators,
        regarding Server Changes, <br> Bug Fixes, Updates (changelogs), Server Status, Health and more.
      </boldness>

        <br><br>
        <serverstat><center>
      </center></serverstat>
      </p>
      <HR><br>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><b>Quick Posts</b></h1>
        <div class="container">
          <br>
    </div>
    <div class="flex flex-wrap">
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Minecraft 1.8-1.16.x Supported!</h2>
        <p class="leading-relaxed text-base mb-4">Now you don't have to switch from your any favourite Minecraft Version!</p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">KitPVP Under Maintenance</h2>
        <p class="leading-relaxed text-base mb-4">We have released our KitPVP Server recently under Open Beta and Official Release is to come.</p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Bedwars to be Released as Beta!</h2>
        <p class="leading-relaxed text-base mb-4">We are working on releasing Bedwars Beta, once we think its ready to be tested very soon. </p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">150 Maximum Players Support Added!</h2>
        <p class="leading-relaxed text-base mb-4">Added 150 Maximum Players Support, with Performance Updates and Bug Fixes.</li></p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
</div><br>
<hr>
</section>
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
<div class="flex flex-wrap -mx-4 -my-8">
  <div class="py-8 px-4 lg:w-1/3">
    <div class="h-full flex items-start">
      <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
        <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Dec</span>
        <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
      </div>
      <div class="flex-grow pl-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">BedWars Development</h1>
        <h2><a href="december-18/" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Read <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
    <path d="M5 12h14M12 5l7 7-7 7"></path>
  </svg></a></h2><br><hr><br>
        <p class="leading-relaxed mb-5">This post includes the Development of BedWars Servers on
        AVMC Network Servers and Related.
        </p>
        <a class="inline-flex items-center">
          <img alt="blog" src="../servermc.png" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-3">
            <span class="title-font font-medium text-gray-900">AvIsBeastMC</span>
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="py-8 px-4 lg:w-1/3">
    <div class="h-full flex items-start">
      <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
        <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Dec</span>
        <span class="font-medium text-lg text-gray-800 title-font leading-none">15</span>
      </div>
      <div class="flex-grow pl-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">SkyWars Development</h1>
        <h2><a href="december-15/" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Read <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
    <path d="M5 12h14M12 5l7 7-7 7"></path>
  </svg></a></h2><br><hr><br>
        <p class="leading-relaxed mb-5">This posts includes the Development of SkyWars Servers on
        AVMC Network Servers and Related.</p>
        <a class="inline-flex items-center">
          <img alt="blog" src="https://cdn.discordapp.com/avatars/742344100178821221/abaf0ce06ad31c09176ea03f0d591218.png?size=128" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-3">
            <span class="title-font font-medium text-gray-900">BadassBoyTej</span>
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="py-8 px-4 lg:w-1/3">
    <div class="h-full flex items-start">
      <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
        <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Dec</span>
        <span class="font-medium text-lg text-gray-800 title-font leading-none">12</span>
      </div>
      <div class="flex-grow pl-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Lobbies and Spawn</h1>
        <h2><a href="" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">On Work!
    <path d="M5 12h14M12 5l7 7-7 7"></path>
  </svg></a></h2><br><hr><br>
        <p class="leading-relaxed mb-5">This posts includes the Information for the Lobby Setup being done for the AVMC Network Servers.</p>
        <a class="inline-flex items-center">
          <img alt="blog" src="https://discord.com/assets/322c936a8c8be1b803cd94861bdfa868.png" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-3">
            <span class="title-font font-medium text-gray-900">samplayZ</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<hr>
<footer class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
<div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
  <img src="../servermc.png" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
  <span class="ml-3 text-xl">Posts | AVMC</span>
</a>
<p class="mt-2 text-sm text-gray-500">Professional KitPVP, SkyBlock and Survival Minecraft Network</p>
</div>
<div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
<div class="lg:w-1/4 md:w-1/2 w-full px-4">
  <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
  <nav class="list-none mb-10">
    <li>
      <a href="../" class="text-gray-600 hover:text-gray-800">Home</a>
    </li>
    <li>
      <a href="" class="text-gray-600 hover:text-gray-800">Posts</a>
    </li>
    <li>
      <a href="../shop/" class="text-gray-600 hover:text-gray-800">Shop</a>
    </li>
    <li>
      <a href="../staff/" class="text-gray-600 hover:text-gray-800">Staff</a>
    </li>
  </nav>
</div>
<div class="lg:w-1/4 md:w-1/2 w-full px-4">
  <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">AVMC NETWORK</h2>
  <nav class="list-none mb-10">
    <li>
      <a href="https://discord.gg/P5hUX85RMS" target="_blank" class="text-gray-600 hover:text-gray-800">Discord</a>
    </li>
    <li>
      <a href="https://twitter.com/avmcgames" target="_blank" class="text-gray-600 hover:text-gray-800">Twitter</a>
    </li>
    <li>
      <a href="mailto:support@playavmcgames.ml" target="_blank" class="text-gray-600 hover:text-gray-800">Support</a>
    </li>
    <li>
      <a href="https://forms.gle/EjnBkmZSm14Mh6mJ6" target="_blank" class="text-gray-600 hover:text-gray-800">Apply Mod</a>
    </li>
  </nav>
</div>
<div class="lg:w-1/4 md:w-1/2 w-full px-4">
  <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">STAFF CONTACT</h2>
  <nav class="list-none mb-10">
    <li>
      <a href="mailto:admin@playavmcgames.ml" class="text-gray-600 hover:text-gray-800"><b>ADMIN</b></a>
    </li>
    <li>
      <a href="" class="text-gray-600 hover:text-gray-800">AvIsBeastMC</a>
    </li>
    <li>
      <a href="mailto:moderators@playavmcgames.ml" class="text-gray-600 hover:text-gray-800"><b>MODERATORS</b></a>
    </li>
    <li>
      <a href="mailto:ekmh123@gmail.com" class="text-gray-600 hover:text-gray-800">xX_EkMh123_Xx</a>
    </li>
  </nav>
</div>
<div class="lg:w-1/4 md:w-1/2 w-full px-4">
  <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">POSTS</h2>
  <nav class="list-none mb-10">
    <li>
      <a class="text-gray-600 hover:text-gray-800">BedWars</a>
    </li>
    <li>
      <a class="text-gray-600 hover:text-gray-800">Performance</a>
    </li>
    <li>
      <a class="text-gray-600 hover:text-gray-800">Lobbies</a>
    </li>
    <li>
      <a class="text-gray-600 hover:text-gray-800">More</a>
    </li>
  </nav>
</div>
</div>
</div>
<div class="bg-gray-100">
<div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
<p class="text-gray-500 text-sm text-center sm:text-left">© AVMC Games Network — mc.playavmcgames.ml
</p>
</div>
</div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
