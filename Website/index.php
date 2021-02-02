<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="AVMC Games Network is a KitPVP, SkyWars and BedWars Minecraft Server which provides excellent experience in its server and has a 95.8% Uptime!">
    <meta name="keywords" content="avmc, avmc games, avmcgames, avmc games.ml, minecraft, minecraft servers, 1.8, minecraft servers 1.8, minecraft pvp, minecraft 1.8.9 servers, avmc, mc server, avmcgames.ml, games avmc, avmc.ml, avmcgamesml, avmc network, avmc network games, avmc, network, games, 1.16.1 minecraft, server mc, minecraftservers.org">
    <meta name="author" content="AvIsBeastMC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="/servermc.png">
    <link rel="stylesheet" href="/style.css">
    <title>Home | AVMC</title>
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
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img alt="AVMC Logo 1" src="servermc.png" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
            <span class="ml-3 text-xl">AVMC Games Network</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a href="#" class="mr-5 hover:text-gray-900"><b>Home</b></a>
            <a href="posts/" class="mr-5 hover:text-gray-900">Posts</a>
            <a href="shop/" class="mr-5 hover:text-gray-900">Shop</a>
            <a href="staff/" class="mr-5 hover:text-gray-900">Staff</a>  
          </nav>
          <a href="https://discord.gg/P5hUX85RMS" target="_blank" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
              <img alt="AVMC Home 2" src="discord-logo.png">Discord</a>
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img alt="AVMC Home 1" class="object-cover object-center rounded" alt="hero" src="Untitled.png">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><u> Official AVMC Games</u></h1>
            <p class="mb-8 leading-relaxed">Here in this website, you can buy Ranks and Know Your Stats of The Games Played on our Server like KitPVP by your IGN, Report Bugs, Have Support, Join our Discord and More!</p>
            <div class="flex w-full md:justify-start justify-center items-end">
              <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4">
                <label for="hero-field" class="leading-7 text-sm text-gray-600">Server Address</label>
                <b><input type="text" placeholder="mc.playavmcgames.ml" id="copytext" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" disabled></b>
                </div>
            </div>
            <p class="text-sm mt-2 text-gray-500 mb-8 w-full">KitPVP, BedWars & SkyWars Minecraft Server</p>
            <div class="flex lg:flex-row md:flex-col">
              <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                <img alt="AVMC " src="https://img.icons8.com/flat_round/64/000000/minecraft-logo.png"/>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-600 mb-1">SERVER STATUS</span>
                  <span id="fors" class="title-font font-medium"></span>
                </span>
              </button>
              <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                <img alt="AVMC Logo 2" src="https://img.icons8.com/officel/64/000000/discord-logo.png"/>
                <span class="ml-4 flex items-start flex-col leading-none">
                  <span class="text-xs text-gray-600 mb-1">ONLINE</span>
                  <span class="title-font font-medium">   <?php
                  $jsonIn = file_get_contents('https://discordapp.com/api/guilds/792730735852257282/widget.json');
                  $JSON = json_decode($jsonIn, true);
                 
                  $membersCount = count($JSON['members']);
                 
                  echo " 7 Members";
                 ?></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <hr>
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Staff</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">These are the Moderators of the Server who manage and maintain the AVMC Game Servers. <br> You can talk to the Staff on our <a href="https://www.avmcgames.ml/discord"><u>Discord Server</u></a></p>
            </div>
            <div class="flex flex-wrap -m-2">
              <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                  <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="servermc.png">
                  <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">AvIsBeastMC </h2>
                    <p class="text-gray-500">Server Admin & Sr. Manager </p>   
                  </div>
                </div>
              </div>
              <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img src="https://cdn.discordapp.com/avatars/557887307907203073/d91a933e2c99ed1d7c1e39d348be14be.png?size=128" alt=" " class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
                  <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">xDemonGAMINGx</h2>
                    <p class="text-gray-500">Sr. Moderator</p>
                  </div>
                </div>
              </div>
              <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img src="https://cdn.discordapp.com/avatars/742344100178821221/425f2417755b66c53cc27b4cce5dece8.png?size=128" alt=" " class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
                  <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">BadassBoyTej</h2>
                    <p class="text-gray-500">Moderator and Posts Manager</p>
                  </div>
                </div>
              </div>    
              <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                  <img src="https://cdn.discordapp.com/avatars/778824824091967489/a4d5d6b30698e8d5c41176855e45716f.png?size=128" alt=" " class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
                  <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">xX_EkMh123_Xx</h2>
                    <p class="text-gray-500">Discord Sr. Moderator</p>
                  </div>
                </div>
              </div> 
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                  <img src="https://discord.com/assets/322c936a8c8be1b803cd94861bdfa868.png" alt=" " class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
                  <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">samplayZ</h2>
                    <p class="text-gray-500">Moderator</p>
                  </div>
                </div>
              </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                  <img src="https://cdn.discordapp.com/avatars/677457193875800074/64d79a812acf08decd075ef16cb2de8d.png?size=128" alt="" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
                    <div class="flex-grow">
                    <h2 class="text-gray-900 title-font font-medium">Scorpios_MC </h2>
                    <p class="text-gray-500"> Moderator</p>
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
        <img src="servermc.png" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" aria-hidden="true">
        <span class="ml-3 text-xl">Home | AVMC</span>
      </a>
      <p class="mt-2 text-sm text-gray-500">Professional KitPVP, SkyBlock and Survival Minecraft Network</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a href="" class="text-gray-600 hover:text-gray-800">Home</a>
          </li>
          <li>
            <a href="posts/" class="text-gray-600 hover:text-gray-800">Posts</a>
          </li>
          <li>
            <a href="shop/" class="text-gray-600 hover:text-gray-800">Shop</a>
          </li>
          <li>
            <a href="staff/" class="text-gray-600 hover:text-gray-800">Staff</a>
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
            <a href="" class="text-gray-600 hover:text-gray-800">Apply Mod</a>
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
            <a class="text-gray-600 hover:text-gray-800">ETC</a>
          </li>
        </nav>
      </div>
    </div> --
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© AVMC Games Network — avmc.mcnetwork.me
      </p>
    </div>
  </div>
</footer>
    </section>
<SCRIPT LANGUAGE="JavaScript">

function ClipBoard()
{
holdtext.innerText = copytext.innerText;
Copied = holdtext.createTextRange();
Copied.execCommand("Copy");
}

</SCRIPT>
</html>