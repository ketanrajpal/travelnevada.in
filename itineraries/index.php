<?php
ob_start();
$page="itineraries";
require_once '../config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head($page); ?>
</head>
<body>
<?php myheader($page); ?>
<section id="content">
<h1>Itineraries</h1>
<h2><span class="fa fa-caret-right"></span>Weekend Getaway from San Francisco</h2>
<ul id='timeline'>
  <li>
    <input class='radio' id='itinerary-1-1' name='itinerary-1' type='radio' checked>
    <div class="relative">
      <label for='itinerary-1-1'>Reno</label>
      <span class='date'>Day 1</span> <span class='circle'></span> </div>
    <div class='content'>
      <p>Arrive in Reno by plane (1 hour non-stop), train (5 hours by Caltrain) or automobile (3 hours 32 minutes via I-80 E) and get ready for a 3-City Tour. Step back in time and explore Virginia City, a 30 minute drive from Downtown Reno. Wooden sidewalks, saloons, Mark Twain artifacts and memorabilia, and a whole lot of fun await in this town. The state capital of Carson City is a 40 minute drive from Virginia City; some highlights along the main street include the Capitol Building, Nevada State Museum and Nevada State Railroad Museum, which often runs diesel or steam trains for visitors. The downtown district is lined with shops and award-winning restaurants. You can also pay a quick visit to Genoa, the oldest settlement in Nevada. Spend the night in Downtown Reno.</p>
    </div>
  </li>
  <li>
    <input class='radio' id='itinerary-1-2' name='itinerary-1' type='radio'>
    <div class="relative">
      <label for='itinerary-1-2'>Reno to Lake Tahoe</label>
      <span class='date'>Day 2</span> <span class='circle'></span> </div>
    <div class='content'>
      <p>An hour's drive from Reno is Lake Tahoe, a jewel in Nevada's crown. Visit Zephyr Cove Resort, home of the MS Dixie II Paddlewheeler. Enjoy a 2 hour sightseeing cruise of Emerald Bay, one of the most photographed places in the world.</p>
    </div>
  </li>
  <li>
    <input class='radio' id='itinerary-1-3' name='itinerary-1' type='radio'>
    <div class="relative">
      <label for='itinerary-1-3'>San Francisco</label>
      <span class='date'>Day 3</span> <span class='circle'></span> </div>
    <div class='content'>
      <p>Head back to San Francisco for onward journey.</p>
    </div>
  </li>
</ul>
<br>
<br>
<br>
<h2><span class="fa fa-caret-right"></span>Interstate 80 and Highway 50 loop</h2>
<ul id='timeline'>
<li>
  <input class='radio' id='itinerary-2-1' name='itinerary-2' type='radio' checked>
  <div class="relative">
    <label for='itinerary-2-1'>Lovelock & Winnemucca</label>
    <span class='date'>Day 1</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>From Reno, take I-80 East to Lovelock, a community dating
      to the 1860s. Here, check out Lovers Lock Plaza, where
      you and that special someone can 'lock your love' -
      attach a small padlock symbolizing your devotion
      onto a chain with hundreds of other such mementos.
      Continue east to Winnemucca, and stop at the
      Winnemucca Convention Center for a map of the
      area's historic sites. Travel east to either Battle
      Mountain or Carlin, railroad towns from the 1860s
      and 1870s that experienced mining booms in the
      last half of the 20th century. About eight miles
      before reaching Elko, off Hunter Exit 292, is
      the California Trail Interpretive Center (opening
      summer 2012), a must-see depiction of the
      pioneers and wagon trains that explored and
      settled the West. Take a tour of a working gold
      mine around the Carlin area* before heading
      east on I-80 toward Elko. The United States is
      the world's third largest producer of gold, and most
      of it comes from Nevada mines. Overnight in Elko</p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-2-2' name='itinerary-2' type='radio'>
  <div class="relative">
    <label for='itinerary-2-2'>Elko</label>
    <span class='date'>Day 2</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Spend the day in Elko digging into Nevada's mining, ranching, and native
culture. Explore the area's natural history, geology, and more, and see one
of the most extensive collections of work by Western artist/writer Will
James at the Northeastern Nevada Museum. Stop at the Western Folklife
Center, home of the National Cowboy Poetry Gathering, and at Sherman
Station, a collection of historic ranch buildings that also serves as the
Elko Visitors Center. Take a scenic drive to the glacier-carved Lamoille
Canyon in the Ruby Mountains. Return to Elko for the evening and dine
at one of the area's Basque restaurants for a hearty and unforgettable
authentic meal. Overnight in Elko</p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-2-3' name='itinerary-2' type='radio'>
  <div class="relative">
    <label for='itinerary-2-3'>Ely</label>
    <span class='date'>Day 3</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>From Elko, take I-80 East to Wells, where you drive along the celebrated
Victory Highway. From Wells, continue south on the Great Basin Highway
to McGill to view the McGill Drugstore Museum, a time capsule from the
1970s. Continue south to Ely and tour the Renaissance Village, a group
of restored early 1900s homes that depict the town's early cultures and
settlers. Visit the White Pine Museum and travel the city's Art Trail, which
features more than 20 murals and sculptures depicting Ely's history.</p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-2-4' name='itinerary-2' type='radio'>
  <div class="relative">
    <label for='itinerary-2-4'>Arrive in Reno</label>
    <span class='date'>Day 4</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Ely is your home base for the day. First, drive east to Great Basin National
Park to see 5,000-year-old bristlecone pine trees, the oldest living things
on Earth, and enjoy a trip to the Lehman Caves to see the stalactite and
stalagmite formations. With some advance planning, you may want to
brave a hike up Wheeler Peak, the second-highest mountain in Nevada.
Travel back to Ely, where you can tour the Nevada Northern Railway
Museum or even ride a restored steam locomotive.</p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-2-5' name='itinerary-2' type='radio'>
  <div class="relative">
    <label for='itinerary-2-5'>Eureka, Austin & Fallon</label>
    <span class='date'>Day 5</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Depart Ely via Hwy. 50 - which loosely follows the path of the Pony
Express, the horseback mail delivery service that ran from 1860 to 1861 - for Eureka, where you can tour the Eureka Opera House. Continue west
along Hwy. 50, dubbed "The Loneliest Road in America" by Life magazine,
to the town of Austin. Whet your whistle at the International Cafe and
Bar, a saloon with as much history as the town itself, then drive to
Fallon, home of the Stillwater Wildlife Refuge and the Top Gun School at
Naval Air Station Fallon. Enjoy a hike or head out to Lahontan Reservoir
for some water sports before returning to Reno.</p>
  </div>
</li>
</ul>
<br>
<br>
<br>
<h2><span class="fa fa-caret-right"></span>Day trips from Las Vegas</h2>
<ul id='timeline'>
<li>
  <input class='radio' id='itinerary-3-1' name='itinerary-3' type='radio' checked>
  <div class="relative">
    <label for='itinerary-3-1'>Valley of Fire State Park</label>
    <span class='date'>Day 1</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Leave early in the morning from Las Vegas for a trip to the Valley of Fire State Park - the oldest Nevada State park offering wonderful opportunities for photographers, hikers, and nature lovers. Rock art from prehistoric people is viewable in some areas of the state park. There are also trails and picnic areas. The area gets its name from the fiery red sandstone, though there are many interesting rock formations. The Visitors Center houses interpretive displays. You can also spend time at Lake Mead, the 16th biggest man-made lake in the world, located one hour away from the Strip. Activities on offer range from swimming, boating, and hiking, to jet skiing. There are also shaded areas for picnics and beach area for lounging around on the 1320 kilometers of shoreline. Visitors are treated to unique views of lava hills, Joshua trees, bighorn sheep, and red sandstone rocks.</p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-3-2' name='itinerary-3' type='radio'>
  <div class="relative">
    <label for='itinerary-3-2'>Springs Preserve</label>
    <span class='date'>Day 2</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Spend a day at Springs Preserve a 180-acre cultural institution designed to commemorate Las Vegas' dynamic history and to provide a vision for a sustainable future. The Preserve features museums, galleries, outdoor events, colorful botanical gardens and an interpretive trail system through a scenic wetland habitat.</p>
  </div>
</li>
</ul>




<br>
<br>
<br>
<h2><span class="fa fa-caret-right"></span>Lake Tahoe itinerary</h2>
<ul id='timeline'>
<li>
  <input class='radio' id='itinerary-4-1' name='itinerary-4' type='radio' checked>
  <div class="relative">
    <label for='itinerary-4-1'>Reno and Virginia City</label>
    <span class='date'>Day 1</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Begin in Reno with a tour of the National Automobile Museum which features a collection of more than 220 vintage and classic cars, including the 1907 Thomas Flyer, winner of the 1908 New York to Paris race. Then off to historic Virginia City, just 40 minutes away. Be prepared to "step back in time." Discover shops, museums and antique treasures in this historic mining town. Take a ride on the Virginia City Trolley, which packs more than 100 years of history into a 20-minute narrated ride. Explore the Historic Fourth Ward School, the last of its kind still standing in the USA, and catch the Virginia & Truckee Railroad for a narrated round-trip to nearby Gold Hill. Return to Reno or continue on to Nevada's state capital, Carson City, only 30 minutes away. </p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-4-2' name='itinerary-4' type='radio'>
  <div class="relative">
    <label for='itinerary-4-2'>Carson City and Lake Tahoe</label>
    <span class='date'>Day 2</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>In Carson City, tour the Nevada State Capitol, constructed in 1870, making it the oldest capitol building west of the Mississippi.  Walk over to the Nevada State Museum, a portion of which served as the Carson City Mint where coins were minted from 1870 to 1893. Groups can also enjoy the Nevada State Railroad Museum, 1.5 miles south on US Hwy 395 S.  Continue on to the nearby towns of Minden and Gardnerville to explore antique shops, Basque restaurants and more. Next, it's the Town of Genoa, Nevada's oldest permanent settlement. See Mormon Station State Park and the Genoa Courthouse Museum, built in 1865 and rebuilt in 1910. Travel via SR207/Kingsbury Grade to spectacular Lake Tahoe, the largest alpine lake in North America.  Spend the evening exploring the shops, galleries and restaurants in the Heavenly Village, or take a seat at your favorite slot machine. </p>
  </div>
</li>
<li>
  <input class='radio' id='itinerary-4-3' name='itinerary-4' type='radio'>
  <div class="relative">
    <label for='itinerary-4-3'>Lake Tahoe</label>
    <span class='date'>Day 3</span> <span class='circle'></span> </div>
  <div class='content'>
    <p>Visit Zephyr Cove Resort, home of the M.S. Dixie II Paddlewheeler. Enjoy a twohour sightseeing cruise to Emerald Bay, one of the most photographed places in the world, and enjoy the views of Lake Tahoe. Return to Reno via US Hwy 50 E and I-580 or continue on to Sacramento and San Francisco via US Hwy 50 W and I-80 W.</p>
  </div>
</li>

</ul>
</section>
<?php foot($page); ?>
</body>
</html>