<!DOCTYPE html>
<html lang="en">

<?php snippet('header') ?>
<?php echo css(array(
   'assets/css/calendar.css'
)) ?>
<?php $featured = $page->featuredmatches()->yaml(); ?>
<?php $bg = $page->backgroundimage() ?>

<div class="page-content" style="background: url(<?php echo $bg; ?>);">
    <section class="featured container"> 
        <header class="clearfix block">
            <h2> Featured Tournaments </h2> 
        </header>
        <div class="featured-items block"> 
            <a href="<?php echo $featured[0]["link"];?>" class="item-container"> 
                <div class="item" style="background: url(<?php echo $featured[0]["image"];?>);"> 
                    <img class="right" src="<?php echo $featured[0]["game"];?>"> 
                    <div class="link-title-container"> <?php echo $featured[0]["title"];?> </div> 
                </div> 
            </a>

            <a href="<?php echo $featured[1]["link"];?>" class="item-container"> 
                <div class="item" style="background: url(<?php echo $featured[1]["image"];?>);">  
                    <img class="right" src="assets/img/lolicon.png"> 
                    <div class="link-title-container"> <?php echo $featured[1]["title"];?> </div> 
                </div> 
            </a>

            <a href="<?php echo $featured[2]["link"];?>" class="item-container"> 
               <div class="item" style="background: url(<?php echo $featured[2]["image"];?>);">  
                    <img class="right" src="assets/img/lolicon.png"> 
                    <div class="link-title-container"> <?php echo $featured[2]["title"];?> </div> 
                </div> 
            </a>

            </div>
        </div>
    </section>
</div>
<div class="block bar"> 
    <div class="container"> 
        
            <div class="tab">
                   
                <button class="tablinks red" style="width:15%; min-width:172px;" id="defaultOpen" onclick="tab2(event, 'League of Legends')"><img style="width:5%; min-width:17px;" src="http://2.bp.blogspot.com/-HqSOKIIV59A/U8WP4WFW28I/AAAAAAAAT5U/qTSiV9UgvUY/s1600/icon.png">League of Legends</button>
                
            
                
                <button class="tablinks red" style="width:15%; min-width:172px;" onclick="tab2(event, 'Point Blank')"><img style="width:5%; min-width:17px;" src="http://orig01.deviantart.net/a245/f/2014/029/b/5/point_blank_by_goldenarrow253-d747xlm.png">Point Blank</button>
               

                
            </div>
            
    </div>
            
</div>
    
</div>
<div class="block bar2"> 
    <div class="container"> 

    <div id="League of Legends" class="tabcontent">     

        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            
                     <select style="color:black;" id="myInput1" onchange="filterFunction1()">
                     <?php snippet('areafilter') ?>
                     </select>
                     
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks all" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary" style="cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary" style="cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary" style="cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary" style="cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary" style="cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5s%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
            
        </div>
        <div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr >
                                <th class="tournamenthead column1">Date
                                </th>
                                <th class="tournamenthead column2">Tournament Area
                                        
                                </th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>

                    <div id="search1">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d")):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                

                       
                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>
                  

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                    </div>
            <script>
                    function filterFunction1() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput1");
    filter = input.value.toUpperCase();
    div = document.getElementById("search1");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
                }
                                    }
                                                }
                </script>
                


            </div>
    </div>


    <div id="Point Blank" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
                     <select style="color:black;" id="myInput2" onchange="filterFunction2()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="pb">Select Tournament Type: </h4> <a class="tablinks all" style="cursor:pointer;" onclick="tab(event, 'Point Blank')">All</a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Captains League')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/captain%20league.png"><span class="tooltiptext">Captain's League</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Shooting Grounds')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Shooting%20Grounds/Shooting%20Grounds%2055x55.png"><span class="tooltiptext">Shooting Grounds</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Cadet Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Cadet%20Cup%20Headers/Cadet%20Cup%2055x55.png"><span class="tooltiptext">Cadet Cup</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Online Tournament')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/online%20tournament.png"><span class="tooltiptext">Online Tournament</span></a>
                     
        </div>
<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                        <div id="search2">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) {  
                   
                    if ($g->game == "Point Blank" And $g->date >= date("Y-m-d")):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>
                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                        </div>
                <script>
                    function filterFunction2() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    div = document.getElementById("search2");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Piltovers Finest" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder"  style="background-color:#cc090f;">
            <select style="color:black;" id="myInput3" onchange="filterFunction3()">
                     <?php snippet('areafilter') ?>
            </select>
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
                     
        </div>
<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search3">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d") And $g->name == "Piltover's Finest"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction3() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput3");
    filter = input.value.toUpperCase();
    div = document.getElementById("search3");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="GCALP" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput4" onchange="filterFunction4()">
                     <?php snippet('areafilter') ?>
            </select>
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
                     
        </div>
                    <div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search4">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d") And $g->name == "GCALP"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>

                <?php } ?>
                </div>
<script>
                    function filterFunction4() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput4");
    filter = input.value.toUpperCase();
    div = document.getElementById("search4");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Lulu Cup" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput5" onchange="filterFunction5()">
                     <?php snippet('areafilter') ?>
            </select>
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
        
        </div>
<div class="space"> </div>

                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search5">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d") And $g->name == "Lulu Cup"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction5() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput5");
    filter = input.value.toUpperCase();
    div = document.getElementById("search5");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Teemo Cup" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput6" onchange="filterFunction6()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
                     
        </div>

<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search6">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d") And $g->name == "Teemo Cup"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction6() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput6");
    filter = input.value.toUpperCase();
    div = document.getElementById("search6");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Academy Arena" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput7" onchange="filterFunction7()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="lol">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'League of Legends')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Piltovers Finest')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconchallenger.png"><span class="tooltiptext">Piltover's Finest</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'GCALP')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/gcaicon.png"><span class="tooltiptext">GCALP Elite</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Lulu Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconrotc.png"><span class="tooltiptext">Lulu Cup</span></a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Teemo Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/001-LeagueofLegends/Articles/2014/002%20February/tournaments/iconteemocup.png"><span class="tooltiptext">Teemo Cup</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Academy Arena')"><img style="width:5%;  min-width:25px;" src="https://lol.garena.ph/tournaments/images/academy_arena.png"><span class="tooltiptext">Academy Arena</span></a>
                     
        </div>        
<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search7">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "League of Legends" And $g->date >= date("Y-m-d") And $g->name == "Academy Arena"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction7() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput7");
    filter = input.value.toUpperCase();
    div = document.getElementById("search7");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Captains League" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">

            <select style="color:black;" id="myInput8" onchange="filterFunction8()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="pb">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'Point Blank')">All</a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Captains League')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/captain%20league.png"><span class="tooltiptext">Captain's League</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Shooting Grounds')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Shooting%20Grounds/Shooting%20Grounds%2055x55.png"><span class="tooltiptext">Shooting Grounds</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Cadet Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Cadet%20Cup%20Headers/Cadet%20Cup%2055x55.png"><span class="tooltiptext">Cadet Cup</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Online Tournament')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/online%20tournament.png"><span class="tooltiptext">Online Tournament</span></a>
                     
        </div>
<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search8">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "Point Blank" And $g->date >= date("Y-m-d") And $g->name == "Captain's League"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction8() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput8");
    filter = input.value.toUpperCase();
    div = document.getElementById("search8");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Shooting Grounds" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput9" onchange="filterFunction9()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="pb">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'Point Blank')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Captains League')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/captain%20league.png"><span class="tooltiptext">Captain's League</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Shooting Grounds')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Shooting%20Grounds/Shooting%20Grounds%2055x55.png"><span class="tooltiptext">Shooting Grounds</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Cadet Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Cadet%20Cup%20Headers/Cadet%20Cup%2055x55.png"><span class="tooltiptext">Cadet Cup</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Online Tournament')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/online%20tournament.png"><span class="tooltiptext">Online Tournament</span></a>
                     
        </div>

<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search9">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "Point Blank" And $g->date >= date("Y-m-d") And $g->name == "Shooting Grounds"):
                ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction9() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput9");
    filter = input.value.toUpperCase();
    div = document.getElementById("search9");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Cadet Cup" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput10" onchange="filterFunction10()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="pb">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'Point Blank')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Captains League')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/captain%20league.png"><span class="tooltiptext">Captain's League</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Shooting Grounds')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Shooting%20Grounds/Shooting%20Grounds%2055x55.png"><span class="tooltiptext">Shooting Grounds</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Cadet Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Cadet%20Cup%20Headers/Cadet%20Cup%2055x55.png"><span class="tooltiptext">Cadet Cup</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Online Tournament')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/online%20tournament.png"><span class="tooltiptext">Online Tournament</span></a>
                     
        </div>
<div class="space"> </div>
                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search10">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "Point Blank" And $g->date >= date("Y-m-d") And $g->name == "Cadet Cup"): ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                </div>
<script>
                    function filterFunction10() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput10");
    filter = input.value.toUpperCase();
    div = document.getElementById("search10");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>

    <div id="Online Tournament" class="tabcontent">
        <div class="width85">
        <div class="fullwidth addborder" style="background-color:#cc090f;">
            <select style="color:black;" id="myInput11" onchange="filterFunction11()">
                     <?php snippet('areafilter') ?>
                     </select>
                     <h4 class="pb">Select Tournament Type: </h4> <a class="tablinks" style="cursor:pointer;" onclick="tab(event, 'Point Blank')">All</a>
                     <a class="tablinks secondary" style=" cursor:pointer;" onclick="tab(event, 'Captains League')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/captain%20league.png"><span class="tooltiptext">Captain's League</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Shooting Grounds')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Shooting%20Grounds/Shooting%20Grounds%2055x55.png"><span class="tooltiptext">Shooting Grounds</span></a>
                     <a class="tablinks secondary " style=" cursor:pointer;" onclick="tab(event, 'Cadet Cup')"><img style="width:5%;  min-width:25px;" src="http://cdn.garenanow.com/community/esports/004-PointBlank/Articles/Cadet%20Cup%20Headers/Cadet%20Cup%2055x55.png"><span class="tooltiptext">Cadet Cup</span></a>
                     <a class="tablinks secondary opentab" style=" cursor:pointer;" onclick="tab(event, 'Online Tournament')"><img style="width:5%;  min-width:25px;" src="http://pb.garena.ph/tournaments/images/pb/online%20tournament.png"><span class="tooltiptext">Online Tournament</span></a>
                     
        </div>
<div class="space"> </div>

                    <table class="fullwidth">
                        <thead> 
                            <tr>
                                <th class="tournamenthead column1">Date</th>
                                <th class="tournamenthead column2">Tournament Area</th>
                                <th class="tournamenthead column3">Internet Café</th>
                                <th class="tournamenthead">Address</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="search11">
                    <?php $games = $page->tournaments()->toStructure()->sortBy('date', 'asc') ?>
                <?php foreach($games as $g) { 
                    
                    if ($g->game == "Point Blank" And $g->date >= date("Y-m-d") And $g->name == "Online"): ?>

                 <?php if ($g->game == "League of Legends"):
                        $c = "1cb2d8" ?>
                <?php elseif ($g->game == "Point Blank"):
                        $c = "cc090f" ?>
                    
                <?php else: ?>
                
                <?php endif ?>

                


                <a href="<?php echo $g->link ?>" class="fullwidth"><div class="divinner2"> 
                            <table class="fullwidth fullheight">
                             <tr>
                                <td class="tournamentbody column1"> <?php $d = strtotime("$g->date"); echo date('d M', $d); ?> </td>
                                <td class="tournamentbody column2"> <?php echo $g->area ?> </td>
                                <td class="tournamentbody column3"> <?php echo $g->computershop ?> </td>
                                <td class="tournamentbody"> <?php echo $g->address ?> </td>
                            </tr>
                            </table>
                
                        </div> </a>

                
                <?php else: ?>
                <?php endif ?>


                <?php } ?>
                    </div>
<script>
                    function filterFunction11() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput11");
    filter = input.value.toUpperCase();
    div = document.getElementById("search11");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else { 
            a[i].style.display = "none";
        }
    }
}
                </script>
            </div>
    </div>


    
</div>


</div>





            <script>function tab(evt, tabname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>function tab2(evt, tabname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script>function tab3(evt, tabname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<?php snippet('footer') ?>

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/creative.min.js"></script>

</body>

</html>
