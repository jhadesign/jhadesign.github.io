<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Light up an LED based on ADS-B tracked aircraft!" />
        <meta name="author" content="Lil Jacob" />
        <title>Aircraft SpotterLight</title>
        <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22central%22 text-anchor=%22middle%22 font-size=%2275%22>🚁</text></svg>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- EnlighterJS CSS !-->
        <link rel="stylesheet" href="dist/enlighterjs.min.css" />
	<style>
	/* ============ only desktop view ============ */
	@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
	}		
	/* ============ desktop view .end// ============ */

	.navbar .dropdown-menu {
	background: rgba(87, 72, 52, 0.9);
	}
	.navbar .dropdown-menu .dropdown-item {
	color: rgba(255, 255, 255, 0.5);
	}
	.navbar .dropdown-menu .dropdown-item:hover {
	color: rgba(54, 69, 79, 0.9);
	}

	h5 {
	  font-size: 20px;
	  background: -webkit-linear-gradient(#eee, #666);
	  -webkit-background-clip: text;
	  -webkit-text-fill-color: transparent;
	}


	</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">To the helipad</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
				        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="#">test</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <a class="dropdown-item" href="#">Something else here</a>
					</ul>
			</li>
                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-75 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase" style="font-size: 2em; padding: 0px; line-height: 1em;">Aircraft</h1>
                    <h1 class="mx-auto my-0 text-uppercase">SpotterLight</h1>
		    <h5 class="mx-auto my-0 text-uppercase">by JHA Design</h5>
	            <!--<a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>-->
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Early Warning System</h2>
                        <p class="text-white-50 font-italic">
			    I live near a HEMS (Helicopter Emergency Medical Service), in this case a helipad on top of a hospital.
			    As an aviation geek I'd always run to the window when I could hear a helicopter flapping in the vincinity.<br>
			    There had to be another way, so I would have time to grab my camera as well.<br>
			    So I had to build an EWS, to warn me by lighting up an LED, when a helicopter was approaching - and of course, the LED needed to be lit in a different color, depending on the aircraft type or operator.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" width="600" src="assets/img/merlin.gif" alt="" />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Setting up the "radar" area</h4>
                            <p class="text-black-50 mb-0">
				First, I needed to draw a few circles around my home on a tar1090 flight tracker map. The tracker is running on a RPi 3B+ with a small antenna near my window sill. Pretty easy task as this is a feature of the tar1090 software. 
			    </p>
			    <br>
                            <p class="text-black-50 mb-0">
				Next, I wanted to create a script so that if an aircraft entered the area, a WS2812 LED would light up.
				<br>
				I wrote a python script to do this. Now the LED is lit before I can hear the aircraft.<br>
			    </p>
			    <br>
                            <p class="text-black-50 mb-0">
				Enough is never enough.. so in addition I want to keep a log of the helicopters/aircraft seen by the tracker.
			    </p>


                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/map6.png" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Equipment Required</h4>
                                    <p class="mb-0 text-white-50">- Raspberry Pi (I used a 3B+).</p>
                                    <p class="mb-0 text-white-50">- USB DVB-T SDR Tuner - e.g. one of <a target ="_blank" href="https://www.aliexpress.com/wholesale?trafficChannel=main&d=y&CatId=0&SearchText=r820t2+sdr&ltype=wholesale&SortType=default&minPrice=1&maxPrice=80&page=1">these</a> incl. antenna.</p>
				    <p class="mb-0 text-white-50">- One <a href="https://www.aliexpress.com/af/ws2812b-led-F8.html?d=y&origin=n&SearchText=ws2812b+led+F8&catId=0&initiative_id=SB_20210525124005" target="_blank">WS2812 8mm LED</a> or similar.</p>
				    <p class="mb-0 text-white-50">- Some jumper wires.</p>
				    <p class="mb-0 text-white-50">- Access to 3D Printer (Optional).</p>
				    <p>&nbsp;</p>
                                    <p class="mb-0 text-white-50 font-italic">Note: the better "line of sight" your antenna has to the aircraft, the better coverage you will get from your "radar".<br>
					 Improve this by installing a better antenna (for 1090MHz ADS-B signals).</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <div class="featured-text text-center text-lg-left">
			  <div class="container p-3 my-3">
			    <ul>
			      <li>Setup the Pi with <a href="https://www.flightradar24.com/build-your-own" target="_blank">Pi24</a></li>
			      <li>Setup <a href="https://github.com/wiedehopf/tar1090" target="_blank">tar1090</a> (webinterface for the tracker)</li>
			      <li>Setup your 'circles' or 'rings':</li>
			    </ul>
			      <code>
vi /usr/local/share/tar1090/html/config.js

Edit the following: 
SiteShow    = true;
SiteLat     = 11.222222; // Set to Lat of your home
SiteLon     = 33.444444; // Set to Lng your home

SiteCircles = true;
SiteCirclesDistances = new Array(5,10,15,20);
</code>
<p>&nbsp;</p>
That's it, now you should see the circles on your tar1090!

   			  </div>
			</div>
		    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Setting up the receiver</h4>
                                    <p class="mb-0 text-white-50">In this section, we will set up the circles around your home using the tar1090 software on the Raspberry Pi.</p>
                                    <p class="mb-0 text-white-50">while you are at it, you might want to share data to FR24 as well - in return, you get (at the time of writing) a business subscribtion while sharing data.</p>		
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Three-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/twr.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Light up an LED based on the aircraft seen by the tracker</h4>
                                    <p class="mb-0 text-white-50">Using the ADS-B data, have an LED light up based on the data - the hex code of a specific aircraft or a callsign using RegEx (e.g. all DNU.*W to get all DNUsomenumberW flights).</p>
				    <p class="mb-0 text-white-50">Using the LatLon from our home and the LatLon from the tracked aircraft, we can calculate the distance to our home with <a href="https://en.wikipedia.org/wiki/Haversine_formula" target="_blank">the law of haversines</a>. And thereby determine if it is 'in range' and we want the LED lit.</p>
				    <p class="mb-0 text-white-50">I printed a model of Kastrup Tower to hold the LED.</p>
				    <p class="mb-0 text-white-50">The tower has a hollow canal to get the wires to GPIO18, +5V and GND</p>
                                    <p class="mb-0 text-white-50"><a class="js-scroll-trigger" href="#ac_spotterlight">Click here to scroll down to the code</a></p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>

<p>&nbsp;</p>
			  <div class="container p-3 my-3 border" style="height:1000px;overflow-y:auto">

			    <p>	
				Create a <b>service</b> to run the program (and log the output):<br>
				<code>
[unit]
Description=Aircraft SpotterLight by JHA DESIGN
Wants=network-online.target
After=network-online.target

[Service]
ExecStart=/usr/bin/python3 -u ac_spotterlight.py
WorkingDirectory=/home/pi/ac_spotterlight
StandardOutput=append:/home/pi/log/ac_spotterlight.log
StandardError=append:/home/pi/log/ac_spotterlight.log
Restart=always
RestartSec=300
User=root
Nice=10

[Install]
WantedBy=multi-user.target
				</code>
			    </p>


 			    <kbd id="ac_spotterlight">ac_spotterlight</kbd><a href="https://www.raspberrypi.org/documentation/linux/usage/systemd.md" target="_blank">  - how to add this script as a service on the RPi</a>
			      	    <pre data-enlighter-language="less" data-enlighter-theme="atomic" data-enlighter-language="python" data-enlighter-textoverflow="break">
#should probably move animations to a separate file. colors.py contain HTML colors to RGB. 
import re
import os
import sys
import signal
import board
import neopixel
import requests
import time
import json
from math import radians, cos, sin, asin, sqrt
from colors import *

#number of Pixels
numpix = 1
ORDER = neopixel.RGB

# Neopixels add on Pin 18 PWM pin, with 1 pixel 
pixels = neopixel.NeoPixel(board.D18, numpix, brightness=0.1, auto_write=False, pixel_order=ORDER)

center_point = [{'lat': 55.699531, 'lng': 12.585264}]
radius = 50.00 # in kilometer


# Test with history file remember to comment out live stream
#with open('history_87.json') as json_file:
#	json_dump = json.load(json_file)

# Signal Handler to Catch CTRL+C commands and turn off the lights
def signal_handler(signal, frame):
		pixels.fill((0, 0, 0))
		pixels.show()
		sys.exit(0)

signal.signal(signal.SIGINT, signal_handler)
#print('Press Ctrl+C')


def haversine(lon1, lat1, lon2, lat2):
	"""
	Calculate the great circle distance between two points
	on the earth (specified in decimal degrees)
	"""
	# convert decimal degrees to radians
	lon1, lat1, lon2, lat2 = map(radians, [lon1, lat1, lon2, lat2])
		# haversine formula
	dlon = lon2 - lon1
	dlat = lat2 - lat1
	a = sin(dlat/2)**2 + cos(lat1) * cos(lat2) * sin(dlon/2)**2
	c = 2 * asin(sqrt(a))
	r = 6371 # Radius of earth in kilometers. Use 3956 for miles
	return c * r

def in_or_out(tlat, tlon):
	lat1 = center_point[0]['lat']
	lon1 = center_point[0]['lng']
	a = haversine(lon1, lat1, tlon, tlat)
	#print('Distance (km) : ', a)
	if a <= radius:
		#print('Inside the area')
		return a 
	else:
		#print('Outside the area')
		return 9999


#pulse animation
smoothness = 100
def pulse(color): 
	for ii in range(smoothness):
		pwm_val = 100.0*(1.0 -  abs((2.0*(ii/smoothness))-1.0))
		pwm_val2 = round(pwm_val / 100,2)
		print(pwm_val2)
		pixels.brightness = pwm_val2
		pixels.fill((color))
		pixels.show()
		# in order to pulse we need a pause/sleep. Lets set this depending on the range. The closer, the faster the pulse. 
		inRange = in_or_out(foundLat[0],foundLon[0])
		print(time.ctime(), "found", dictFind[0]['name'], "range: ", inRange)
		if(inRange > 5): 
			time.sleep(inRange / 1000)
		elif(inRange <= 5): 
			time.sleep(0.01)
	time.sleep(0.5) 

def defaultAnim(color):
	if foundLat[0] and foundLon[0] != None:
		inRange = in_or_out(foundLat[0],foundLon[0])
		if inRange > 3: 
			pixels.brightness = round(1.0 - (inRange/5)/10,1) #divide the range of max 50km by 5, then by 10 and substract it from the max brightness
			print(time.ctime(), "found", dictFind[0]['name'], "range: ", inRange)
		else:
			pixels.brightness = 1.0 #it is less than 3km away lets shine bright 
	else:
		pixels.brightness = 0.5 #value between 0.0 and 1.0 (max). Increase 0.1 every time 5km mark is passed from 50km to 0km.	
	pixels.fill((color))
	pixels.show()
	print(time.ctime(), "found", dictFind[0]['name'], "range: ", inRange)

def noAnim(color): 
	pixels.brightness = 1.0
	pixels.fill((color))
	pixels.show()
	print(time.ctime(), "found", dictFind[0]['name'])


interestingFlights = [
	{"name": "Danish Air Force",
	"callSign":["DAF","RES","MERLN"],
	"icaoHex": ["45f42c", "45f42e", "45f431", "45f432", "45f434", "45f436", "45f437", "45f438", "45f42d", "45f42f", "45f430", "45f433", "45f435"],
	"color": green,
	"animation": defaultAnim,
	"priority": "1"
	},
	{
	"name": "HeliDoc",
	"callSign": ["DOC"],
	"icaoHex": ["47879d", "47a1ce", "47a20d", "47a210", "4784b1", "4783ca", "4783c9", "4783b9"],
	"color": yellow,
	"animation": noAnim,
	"priority": "1"
	},
	{
	"name": "Vandflyet",
	"callSign": ["DNU.*W"],
	"icaoHex": ["45ba61",],
	"color": blue,
	"animation": pulse,
	"priority": "1"
	}
]

def findhexCode(hexCode):
	for d in interestingFlights: 
		for h in d['icaoHex']:
			if h == hexCode:
				return d
	return None

def findcallSign(callSign):
	for d in interestingFlights: 
		for cs in d['callSign']: 
			#if callSign.find(cs) == 0:
			if re.search(cs, callSign):
				return d 
	return None


while True:
	json_dump = requests.get("http://{}:8080/data/aircraft.json".format("192.168.0.120")).json()

	found_flt = 0
	dictFind = [None,None]
	foundLat = [None,None]
	foundLon = [None,None]

	#look for the flights in the json file 
	for entry in json_dump["aircraft"]:
		if "hex" in entry: 
			dictFind[found_flt] = findhexCode(entry["hex"])
			if (dictFind[found_flt] == None):
				if "flight" in entry:
					dictFind[found_flt] = findcallSign(entry["flight"])
					#dictFind.append(findcallSign(entry["flight"]))
		if (dictFind[found_flt] != None):
			if "lat" in entry and "lon" in entry:
				foundLat[found_flt] = entry["lat"]
				foundLon[found_flt] = entry["lon"]
			if (found_flt > 0): 
				if (in_or_out(foundLat[0],foundLon[0]) > in_or_out(foundLat[1],foundLon[1])):
					dictFind[0] = dictFind[1]
					foundLat[0] = foundLat[1]
					foundLon[0] = foundLon[1]
			found_flt = 1

		#print(" ")
		#print("DEBUG: dictFind[0] = ",dictFind[0])
		#print("DEBUG: dictFind[1] = ",dictFind[1])

	if(found_flt == 1):
		dictFind[0]['animation'](dictFind[0]['color'])
	
	else:
		pixels.brightness = 1.0
		pixels.fill(black)
		pixels.show()
		#print("lights off.. scanning for aircraft.. blip.. blip.. blip..")
	time.sleep(0.05)
signal.pause()



				    </pre>
 			    <kbd id="colors">colors.py</kbd>
			      	    <pre data-enlighter-language="less" data-enlighter-theme="atomic" data-enlighter-language="python" data-enlighter-textoverflow="break">
maroon = (128, 0, 0)
darkred = (139, 0, 0)
brown = (165, 42, 42)
firebrick = (178, 34, 34)
crimson = (220, 20, 60)
red = (255, 0, 0)
tomato = (255, 99, 71)
coral = (255, 127, 80)
indianred = (205, 92, 92)
lightcoral = (240, 128, 128)
darksalmon = (233, 150, 122)
salmon = (250, 128, 114)
lightsalmon = (255, 160, 122)
orangered = (255, 69, 0)
darkorange = (255, 140, 0)
orange = (255, 165, 0)
gold = (255, 215, 0)
darkgoldenrod = (184, 134, 11)
goldenrod = (218, 165, 32)
palegoldenrod = (238, 232, 170)
darkkhaki = (189, 183, 107)
khaki = (240, 230, 140)
olive = (128, 128, 0)
yellow = (255, 255, 0)
yellowgreen = (154, 205, 50)
darkolivegreen = (85, 107, 47)
olivedrab = (107, 142, 35)
lawngreen = (124, 252, 0)
chartreuse = (127, 255, 0)
greenyellow = (173, 255, 47)
darkgreen = (0, 100, 0)
green = (0, 128, 0)
forestgreen = (34, 139, 34)
lime = (0, 255, 0)
limegreen = (50, 205, 50)
lightgreen = (144, 238, 144)
palegreen = (152, 251, 152)
darkseagreen = (143, 188, 143)
mediumspringgreen = (0, 250, 154)
springgreen = (0, 255, 127)
seagreen = (46, 139, 87)
mediumaquamarine = (102, 205, 170)
mediumseagreen = (60, 179, 113)
lightseagreen = (32, 178, 170)
darkslategray = (47, 79, 79)
teal = (0, 128, 128)
darkcyan = (0, 139, 139)
aqua = (0, 255, 255)
cyan = (0, 255, 255)
lightcyan = (224, 255, 255)
darkturquoise = (0, 206, 209)
turquoise = (64, 224, 208)
mediumturquoise = (72, 209, 204)
paleturquoise = (175, 238, 238)
aquamarine = (127, 255, 212)
powderblue = (176, 224, 230)
cadetblue = (95, 158, 160)
steelblue = (70, 130, 180)
cornflowerblue = (100, 149, 237)
deepskyblue = (0, 191, 255)
dodgerblue = (30, 144, 255)
lightblue = (173, 216, 230)
skyblue = (135, 206, 235)
lightskyblue = (135, 206, 250)
midnightblue = (25, 25, 112)
navy = (0, 0, 128)
darkblue = (0, 0, 139)
mediumblue = (0, 0, 205)
blue = (0, 0, 255)
royalblue = (65, 105, 225)
blueviolet = (138, 43, 226)
indigo = (75, 0, 130)
darkslateblue = (72, 61, 139)
slateblue = (106, 90, 205)
mediumslateblue = (123, 104, 238)
mediumpurple = (147, 112, 219)
darkmagenta = (139, 0, 139)
darkviolet = (148, 0, 211)
darkorchid = (153, 50, 204)
mediumorchid = (186, 85, 211)
purple = (128, 0, 128)
thistle = (216, 191, 216)
plum = (221, 160, 221)
violet = (238, 130, 238)
magenta = (255, 0, 255)
orchid = (218, 112, 214)
mediumvioletred = (199, 21, 133)
palevioletred = (219, 112, 147)
deeppink = (255, 20, 147)
hotpink = (255, 105, 180)
lightpink = (255, 182, 193)
pink = (255, 192, 203)
antiquewhite = (250, 235, 215)
beige = (245, 245, 220)
bisque = (255, 228, 196)
blanchedalmond = (255, 235, 205)
wheat = (245, 222, 179)
cornsilk = (255, 248, 220)
lemonchiffon = (255, 250, 205)
lightgoldenrodyellow = (250, 250, 210)
lightyellow = (255, 255, 224)
saddlebrown = (139, 69, 19)
sienna = (160, 82, 45)
chocolate = (210, 105, 30)
peru = (205, 133, 63)
sandybrown = (244, 164, 96)
burlywood = (222, 184, 135)
tan = (210, 180, 140)
rosybrown = (188, 143, 143)
moccasin = (255, 228, 181)
navajowhite = (255, 222, 173)
peachpuff = (255, 218, 185)
mistyrose = (255, 228, 225)
lavenderblush = (255, 240, 245)
linen = (250, 240, 230)
oldlace = (253, 245, 230)
papayawhip = (255, 239, 213)
seashell = (255, 245, 238)
mintcream = (245, 255, 250)
slategray = (112, 128, 144)
lightslategray = (119, 136, 153)
lightsteelblue = (176, 196, 222)
lavender = (230, 230, 250)
floralwhite = (255, 250, 240)
aliceblue = (240, 248, 255)
ghostwhite = (248, 248, 255)
honeydew = (240, 255, 240)
ivory = (255, 255, 240)
azure = (240, 255, 255)
snow = (255, 250, 250)
black = (0, 0, 0)
dimgray = (105, 105, 105)
gray = (128, 128, 128)
darkgray = (169, 169, 169)
silver = (192, 192, 192)
lightgray = (211, 211, 211)
gainsboro = (220, 220, 220)
whitesmoke = (245, 245, 245)
white = (255, 255, 255)


				    </pre>


			  </div>

                </div>
                <!-- Project Two Four-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <div class="featured-text text-center text-lg-left">
			  <div class="container p-3 my-3">
				<img class="img-fluid" src="assets/img/aclogger.png" alt="" />
   			  </div>
			</div>
		    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Logging the aircraft to .csv and displaying it</h4>
				    <p class="mb-0 text-white-50"> inspired by <a href="http://cactusprojects.com/tweeting-when-aircraft-overhead/">CactusProjects</a></p>

                                    <p class="mb-0 text-white-50">Next, I wanted to log the aircraft seen to a .csv file and then display the .csv file content on a webpage. Found some inspiration on the web and used <a href="https://getbootstrap.com/">bootstrap</a> to make it prettier.</p>
				    <p class="mb-0 text-white-50">It is often the same helicopter operating so I wanted to be able to log the same aircraft multiple times a day but not the same flight every 5 minutes. So I currently do a check to see if I have seen the aircraft in the past 30 minutes. If not it is added to the log.</p>
				    <p>&nbsp;</p>		
                                    <p class="mb-0 text-white-50"><a href="ac_spotterlog.zip">PHP/HTML code to display it once the .csv files are generated.</a></p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<p>&nbsp;</p>

			  <div class="container p-3 my-3 border" style="height:1000px;overflow-y:auto">
			    <p>	
				Create a <b>crontab</b> to run the logger every interval you'd like:<br>
				<code>
*/5 * * * * { printf "\%s: " "$(date "+\%F \%T")"; /usr/bin/env nice -10 python3 /home/pi/ac_spotterlight/ac_spotlogger.py; } >> /home/pi/log/ac_spotlogger.log 2>&1
				</code>
			    </p>
 			    <kbd id="ac_spotlogger">ac_spotlogger</kbd>
			      	    <pre data-enlighter-language="less" data-enlighter-theme="atomic" data-enlighter-language="python" data-enlighter-textoverflow="break">
#!/usr/bin/env python3

from datetime import datetime, timedelta
from datetime import date
import requests
import os
import csv
import json

#today = date.today()
today = datetime.now().strftime("%d%b%y").upper()
month = datetime.now().strftime("%b").upper()
year = datetime.now().strftime("%Y")
time = datetime.now().strftime("%H:%M:%S")
interval = datetime.now() - timedelta(minutes=30)
timeInit = datetime.now() - timedelta(hours=1)
initTime = format(timeInit, '%H:%M:%S')
intervalTime = format(interval, '%H:%M:%S')

# calculate ac-reg for danish and swedish aircrafts
# Danish start hex: 458000 Swedish: 468000

def icao2reg_dk_se(hex):
  dk_hex = 0x458000
  se_hex = 0x4A8000
  reg = ""
  # Using binary and to compare the first nine bits to evaluate country code as given by ICAO
  if ((hex & 0xFF8000) == dk_hex or (hex & 0xFF8000) == se_hex):
    if ((hex & 0xFF8000) == dk_hex):
      reg = "OY-"
    else:
      reg = "SE-"
  # Convert HEX to REG starting after the nine bits - the hex is a string and therefore converted to binary prior to calling this func.
  # Testing five bits at a time as per Bilag C
  # This is done three times as three characters is expected after the country designator for DK SE
  #
  #
  # 0100 0101 1xxx xxyy yyyz zzzz
  #
  # for each i we calculate x y z respectively by bitshifting
  # first shift will be 10 bits to the right giving:
  # 0000 0001 0001 011x xxxx
  # then we and with 0x1F (0000 0000 0000 0001 1111) resulting in
  # 0000 0000 0000 000x xxxx
  # then we use this number as the index to the alphabet to provide the right character to add to the resulting string
  # next original number is then shifted 5 bits to the right and the last is not shifted (0)
  # now we have shifted all the bits and each time added the character calculated to the string
  # we now have transformed or calculated the hex into the aircraft registration using the algorithm
  # as provided by the danish civil aviation authority (and the swedish use the same)

    for i in range(2,-1,-1):
      reg = reg + chr(ord('A') - 1 + ((hex >> (5 * i)) & 0x1F))
  return reg


# file setup
filename = "{}.csv".format(today)
rootFolder = "/var/www/html/ac_logger/flights/"
#subFolder = "{}-{}/".format(year, month)
#filepath = rootFolder + subFolder + filename
filepath = rootFolder + filename

# create root folder and sub folder
if not os.path.isdir(rootFolder):
    os.mkdir(rootFolder)

#if not os.path.isdir(rootFolder + subFolder):
#    os.mkdir(rootFolder + subFolder)

# check if files exists
file_exists = os.path.isfile(filepath)

# get all flights tracked to check against for duplicates
flights = ""
if file_exists:
    with open(filepath, "r") as csv_file:
         flights = csv.reader(csv_file, delimiter=',')

# get json data
json_dump = requests.get("http://192.168.x.xxx:8080/data/aircraft.json".format("192.168.x.xxx")).json()

#for testing purposes
#with open('history_87.json') as json_file:
#  json_dump = json.load(json_file)

# hardcoded known hex to aircraft reg 
# Should do a lookup to the database provided by https://opensky-network.org/aircraft-database instead 
icaohex = [
#Danish Air Force
"45f42c","M-502",
"45f42e","M-504",
"45f430","M-506",
"45f431","M-507",
"45f432","M-508",
"45f434","M-510",
"45f436","M-512",
"45f437","M-513",
"45f438","M-514",
"45f42b","M-515/B-583",
"45f42d","M-516",
"45f42f","M-517",
"45f433","M-519",
"45f435","M-520",
"45f42a","B-538",
"45f428","B-536",
"45f422","C-080",
"45f424","C-168",
"45f425","C-172",
"45f426","C-215",
#Norsk Luftambulanse
"4783b9","LN-OOC",
"4783ba","LN-OOD",
"4783c9","LN-OOF",
"4783ca","LN-OOJ",
"4784b1","LN-OOK",
"47879d","LN-OON",
"47a210","LN-OOV",
"47a20d","LN-OOW",
"47a1ce","LN-OOZ",
"47bf10","LN-OUK",
#Danish private aircraft
"45f081","OY-9532",
"45f009","OY-9285",
#SWEFORCE
"4a81f4","100008",
"4a8182","84002",
""] #empty value for counting purposes

# write flights to csv file
with open(filepath, "a", newline="") as file, open(filepath, "r") as csv_file:
    writer = csv.writer(file)
    fieldnames = ["flight", "hex", "reg", "date", "time"]
    writer = csv.DictWriter(file, fieldnames=fieldnames)

    # create headers if first time writing to file
    if not file_exists:
        writer.writeheader()

    # add flights based on an interval, flights can be identical
    for entry in json_dump["aircraft"]:
      seenTime = initTime
      if "hex" in entry:
        flights = csv.reader(csv_file, delimiter=',')
        #next(flights) #skip first header line
        for row in flights:
          if entry["hex"].strip() == row[1]: #check if first csv column contains our flight
            seenTime = row[4]
        if seenTime < intervalTime:
          hexValue = int(entry["hex"],16)
          rego = icao2reg_dk_se(hexValue)
          for j in range(0,len(icaohex),2):
            if icaohex[j] == entry["hex"]:
              rego = icaohex[j+1]
              break
          if "flight" in entry:
            writer.writerow({"flight": entry["flight"].strip(), "hex": entry["hex"], "reg": rego,  "date": today, "time": time})
          else:
            writer.writerow({"flight": "", "hex": entry["hex"], "reg": rego,  "date": today, "time": time})
      csv_file.seek(0)

csv_file.close()
print("Program ran succesfully")
				</pre>
			  </div>

				    <p>&nbsp;</p>
				    <p>&nbsp;</p>

                <!-- Project One Five-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
                    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    01001010 01001000 01000001 00100000 01000100 01100101 01110011 01101001 01100111 01101110<br>
		    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Bonus: Calculating the aircraft registration from the 24-bit ICAO hex code for danish/swedish aircraft</h4>
                                    <p class="mb-0 text-white-50">How do the larger trackers convert the 24-bit ICAO hex to the registration of the aircraft? By having a database or are some calculated?</p>
                                    <p class="mb-0 text-white-50">I found out that some countries e.g. Denmark & Sweden - has publicly available - the algorithm to convert the 24-bit hex to aircraft registration.</p>
                                    <p class="mb-0 text-white-50">Great! I wanted this to be calculated in the python script logging the aircraft.</p>
                                    <p class="mb-0 text-white-50">However there are exceptions.. the algorithm seem only to apply for airliners or "commercial" aviation. Small privately owned aircraft as well as the fleet of the Royal Danish Airforce is not calculated using this algorithm. And it seems the same goes for the Swedish Air Force. I am still to figure out if there is any logic in how these are assigned.</p>
				    <p class="mb-0 text-white-50">This is a work in progress, you might want to disable it.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>






        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
<!-- dont need the contacts section right now 
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
-->
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/villevarn/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
     	  <div class="container">
  	  <?php
session_start(); // Should always be on top
	if(!isset($_SESSION['counter'])) { // It's the first visit in this session
		$handle = fopen("visitors.txt", "r"); 
		if(!$handle){ 
			echo "cant open visitor file" ;
		} 
		else { 
			$counter = ( int ) fread ($handle,20) ;
			fclose ($handle) ;
			$counter++ ; 
			echo" <p> Visitor Count: ". $counter . " </p> " ; 
			$handle = fopen("visitors.txt", "w" ) ; 
			fwrite($handle,$counter) ; 
			fclose ($handle) ;
			$_SESSION['counter'] = $counter;
                }
	} 
	else { // It's not the first time, do not update the counter but show the total hits stored in session
		$counter = $_SESSION['counter'];
		echo" <p> visitors: ". $counter . " </p> " ;
	}
?>
          <p>jha design</p>
	  <p>made using bootstrap <a href="https://startbootstrap.com/theme/grayscale">grayscale theme</a></p>
          </div>
	</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    	<!-- EnlighterJS -->
	<script type="text/javascript" src="dist/enlighterjs.min.js"></script>
	
	<!-- Init Code -->
    	<script type="text/javascript">
          EnlighterJS.init('pre', 'code', {
          });
    </script>
    </body>
</html>
