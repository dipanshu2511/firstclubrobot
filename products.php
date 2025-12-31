<?php error_reporting(0);require_once('header.php');?>

<?php

$id = $_GET['id'];

$image = 'img/pro/'.$id.'.jpg';

if($id == '0' || $id == '')

{

 $id = '1';

}

if($id == '7')

{

$title = 'XENA™  5.0 Unmenned Ground Vehicle';

$description = 'The XENA™ 5.0 Unmenned Ground Vehicle is a powerful, compact defence tool with advanced braking, a 500 kg payload, and a 5-6 hour battery life. It features easy control, rugged design, and comprehensive support.';

$left =  '  <ul>
 <li>Most powerful and compact</li>
 <li>Adaptive Braking Technology</li>
 <li>500 Kg Payload</li>
 <li>Iron Core rubber track 25MM thick</li>
 <li>5-6 Hr Endurance 48V/ 72 AH Battery</li>
 <li>Hot attached power bank</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Gyro based on Straight line and angular following algorithm</li>
 <li>Designed for Defense</li>
 <li>Most powerful and compact</li>
 <li>Most rugged and robust</li>
 <li><strong>Make in India </strong>with full control system and controllers</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Straight line and the angular following algorithm</li>
 <li>Automatic fire point detection & alarming</li>
 <li>Water & Foam firefighting monitor</li>
 <li>PTZ Thermal remote-controlled Camera</li>
 <li>Anyone can operate our robot in one minute of training</li>
</ul>

<p class="mt-2">12 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">



<li>

</ul>';

}



if($id == '13')

{

$title = 'ELI COVID<br/>screening robot';

$description = 'The ELI COVID screening robot enhances safety with long-range temperature detection, staff attendance tracking from 3 feet, and door access control. It ensures efficient health monitoring and access management.';

$left =  '<ul>
<li>ELI with partial motion on welcome</li>
 <li>Temperature on long range detection</li>
 <li>Staff attendance system from 3 feet</li>
 <li>Door access control</li>
 <li>99</li>

</ul>

<p class="mt-2">12 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://youtu.be/E7Ywc_QlPm8?si=29wJIS7KBLgF0QmD"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '4')

{

$title = 'MOBILE<br/>WATER ATM';

$description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet nec ullamcorper sit amet risus. Tristique senectus et netus et malesuada fames ac turpis.';

$left =  '<ul>

<li><b>GPS Live Location</b></li>

<li><b>CCTV Camera</b></li>

<li><b>Remote monitoring </b></li>

<li><b>Double </b><b>Puf</b> <b>Stracture</b></li>

<li><b>UV Projection</b></li>

</ul>

<p class="mt-2">User Recharge validity & expire system., Dynamic user registration with unlimited users, Smart operating system (RTOS Based) with 256bit processor., Fully automatic, Insulated Tank, 2000 LTR dispense unit, GPS Location tracking</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '6')

{

$title = 'KRUSHNA™<br/> Tactical Combat Robot';

$description = 'KRUSHNA™ Tectical Combat Robot offers multi-utility applications, allowing for the mounting of various units suitable for defence purposes such as Rescue, Artillery, Bomb diffusion, Surveillance, and Logistics transport.';

$left =  '<ul>
<li>The KRUSHNA™ Tactical Combat Robot have top speed 10 km/h</li>
 <li>PTZ Smart Remote Operated attachments thermal camera</li>
 <li>Object Detection & Tracking</li>
 <li>High Precise Adaptive Breaking</li>
 <li>Gyro based Straight line and Angular Algorithm</li>
 <li>LCD on remote side for Live Video Feed</li>
 <li>4-6 Hrs Battery Backup</li>
 <li>Speed Up to 10 Km/h</li>
</ul>

<p>Key Parameter:</p>

<ul>
<li>Compact Design for heavy duty work</li>
<li>180 MM width Heavy Duty Spiral Iron Core Wire Rubber Track</li>
<li>Track Belt Suspension</li>
<li>BLDC Heavy duty motors</li>
<li>RC 5000 Meter Range</li>
<li>Heat and overload protection</li>
<li>Efficiency Exhaust protection</li>
<li>500 Kg Payload capacity</li>
<li>120 Kg Drag capacity (UP to 8 Ton Vehicle)</li>
<li>Climb to possible stairs and elevations</li>
<li>Fast Charging system</li>
<li>All-terrain Vehicle Technology</li>
</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}





if($id == '16')

{

$title = 'SONA 1.5<br/>SERVICE ROBOT';

$description = 'The SONA 1.5 Service Robot navigates complex environments using advanced self-mapping and obstacle avoidance technology. It features spine-based balancing, optional 3D vision, voice communication, and auto-charging, ensuring efficient and reliable service.';

$left =  '<ul>
 <li>Humanoid Service Robot Sona 1.5 have top speed .3m/s</li>
 <li>Navigate in any complex environment</li>
 <li>Self mapping and navigation technology with using Laser, Digital Compass & Digital Gyro</li>
 <li>Obstacle avoidance with laser mapping and detection</li>
 <li>Distance measuring system to achieve goal.</li>
 <li>Spine based center of gravity balancing</li>
 <li>Camera Vision for 3D object detection (Optional)</li>
 <li>Voice Communication (Optional)</li>
 <li>Heat and over load protection</li>
 <li>Efficiency Exhaust protection</li>
 <li>Down stairs detection with CLIF sensors (Optional)</li>
 <li>Auto charging docking system &#40;optional&#41;</li>
 <li>Auto Recovery Behaviors in any troubleshooting</li>
 <li>Options for HDMI/ USB / Ethernet / Touch screen (Optional)</li>
 <li>User Touch Interface with display. (Optional)</li>

</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://youtu.be/eXjxBVe7kWI?si=vsKBrSj_I4W8BnII"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '17')

{

$title = 'SONA 2.5<BR/>Service  Robot';

$description = 'The SONA 2.5 Service is a humanoid robot with a top speed of 0.3m/s. It features spine-based balance, heat protection, and auto-recovery. Optional add-ons include 3D vision and voice communication.';

$left =  '<ul>

 <li>Humanoid Service Robot Sona 2.5 have top speed .3m/s</li>
 <li>Navigate in any complex environment</li>
 <li>Self mapping and navigation technology with using Laser, Digital Compass & Digital Gyro</li>
 <li>Obstacle avoidance with laser mapping and detection</li>
 <li>Distance measuring system to achieve goal.</li>
 <li>Spine based center of gravity balancing</li>
 <li>Camera Vision for 3D object detection (Optional)</li>
 <li>Voice Communication (Optional)</li>
 <li>Heat and over load protection</li>
 <li>Efficiency Exhaust protection</li>
 <li>Down stairs detection with CLIF sensors (Optional)</li>
 <li>Auto charging docking system &#40;optional&#41;</li>
 <li>Auto Recovery Behaviors in any troubleshooting</li>
 <li>Options for HDMI/ USB / Ethernet / Touch screen (Optional)</li>
 <li>User Touch Interface with display. (Optional)</li>

</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '10')

{

$title = 'SONA 3.5<BR/>AI HUMANOID ROBOT';

$description = 'Sona 3.5 Ai Humanoid robot is advanced AI based humnaoid robot that can greet & meet to customers to in recepetion, hotels and corporates, Sona 3.5 robot also welcome to visitors with hand shake and movemnts, Sona 3.5 robot can guide the person to any location. .';

$left =  '<ul>
<ul>
 <li><em>Human interaction</em></li>
 <li><em>Smart HAND and Head Movement </em></li>
 <li><em>Hand 3 axis with maximum 180˚ of freedom</em></li>
 <li><em>Head Vertical 20</em><em>˚ & Horizontal 60˚ of freedom </em></li>
 <li><em>Greet with INDIAN and western style</em></li>
 <li><em>Programmable hand movement for regional greetings actions</em></li>
 <li><em>AI based voice communication</em></li>
 <li><em>Laser Imagine Based Navigation</em></li>
 <li><em>Ultrasonic/IR/Heat/Clif Sensors  (Optional)</em></li>
 <li><em>Smart Obstacle Avoidance technology </em></li>
 <li><em>Vison Camera for face detection </em></li>
 <li><em>Spin based CG(Centre Of Gravity) balancing </em></li>
 <li><em>Auto docking charging system</em></li>
 <li><em>5Hrs/ 2Days standby battery backup </em></li>
 <li><em>Simulate up to 5kg load</em></li>
</ul>

<p><strong><em>Key Parameter:</em></strong><em> </em><br>
<em>• Humanoid Service Robot Sona 3.5 have top speed .7m/s <br>
• Navigate in any complex environment <br>
• Self mapping and navigation technology with using Laser, Digital Compass & Digital Gyro <br>
• Obstacle avoidance with laser mapping and detection <br>
• Distance measuring system to achieve goal. <br>
• Spine based center of gravity balancing <br>
• Camera Vision for 3D object detection (Optional)<br>
• Voice Communication (Optional)<br>
• Lift communication for multi floor access (Optional)<br>
• Heat and over load protection <br>
• Efficiency Exhaust protection<br>
• Down stairs detection with CLIF sensors (Optional)<br>
• Auto charging docking system (optional)<br>
• Auto Recovery Behaviors in any troubleshooting <br>
• Options for HDMI/ USB / Ethernet / Touch screen (Optional)</em></p>


<ul>
 <li><em>User Touch Interface with display. (Optional)</em></li>
</ul>

<p><strong><em>Additional Features (Active AI):</em></strong></p>

<ul>
 <li><strong><em>Meet and Greet:</em></strong><em>            Robot stands in the reception welcoming the visitors</em></li>
 <li><strong><em>Registration:</em></strong><em>  Robot request visitors to register their details like name and phone number</em></li>
 <li><strong><em>Host Notification:</em></strong><em>         Robot notifies the host about the guest after registration</em></li>
 <li><strong><em>Intelligent Conversation:</em></strong><em>        Robot initiates speech based conversations with the visitor, based on face detection & face recognition </em></li>
 <li><strong><em>Guest Engagement</em></strong><em>:    Robot engages the guests in lobby with contextual conversation and survey </em></li>
 <li><strong><em>Complaint Registration:</em></strong><em>         Robot registers complains and gives notification over email to the concerned department.</em></li>
 <li><strong><em>Contextual Quiz:</em></strong><em>           Robot engages the users in contextual quiz above the company and with generic content.</em></li>
 <li><strong><em>Brand Promotion:</em></strong><em>       Robot shows multiple video to the visitor about the company / institute, Upcoming projects, Achievements etc. </em></li>
 <li><strong><em>Contextual FAQs:</em></strong><em>          Robot answers the questions about the company/institute by voice, video and pictures.</em></li>
 <li><strong><em>Feedback Collection:</em></strong><em>  Robot can collect feedback from the visitors after conversation. The feedback can on a scale of 1-5, voice and text. If the feedback given by guest is less than 3/5, the robot asks the guest for reason notify the concerned person / department.</em></li>
</ul>

<p> </p>

<p><strong><em>Technical Specification:</em></strong><em> </em><br>
<em><strong>Robo Base:</strong> 3.5 MM dual MS powder coated base </em></p>

<p><strong><em>Body Material:</em></strong><em> 1.5mm thick FRP for heavy duty work </em></p>

<p><strong><em>Spine:</em></strong><em> SS balanced spine for extra balancing tested at 100 kg weight with 10 mm deflection</em></p>

<p><strong><em>Dimension:</em></strong><em> Sona 3.5 can fit a box of (1450 x 480 x500) L x W x H in MM </em></p>

<p><strong><em>Total Weight: </em></strong><em>28 Kg</em></p>

<p><strong><em>CPU:</em></strong><em> CLUB FIRST robot core processor with 4GB RAM and 32GB Map Storage.</em></p>

<p><strong><em>Battery:</em></strong><em> 40000 Mah Battery for 5-6 Hrs running Backup.</em></p>
            
</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://youtu.be/1zLu6NFvlHI?si=WKEOXZscJWb14fij"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}





if($id == '9')

{

$title = 'SONA 2.5<br/>Service Robot';

$description = 'The Sona 3.5 humanoid service robot is a versatile service robot designed for hygiene tasks in various environments. It features AI voice interaction, facial recognition, and advanced navigation technology for efficient, autonomous operation.';

$left =  '
<p>Sona X.X Series of Robots: The “Sona” Series of robots are most ergonomically designed Humanoid Service Robots. Used for Hygiene goods service in Restaurants, Hotels, Offices, Hospitals, Schools, Bank Etc. These robots featured with AI based human voice interaction, Facial recognition and learning. These robots are Navigate using SLAM (Simultaneous Localization and Mapping) technology. It Create the map of any environment and navigate accordingly.</p>

<p>Key Parameter: Model: Sona 2.5 Humanoid Robot</p>

<ul>
 <li>Humanoid Service Robot Sona 2.5 have top speed .3m/s</li>
 <li>Navigate in any complex environment</li>
 <li>Self mapping and navigation technology with using Laser, Digital Compass & Digital Gyro</li>
 <li>Obstacle avoidance with laser mapping and detection</li>
 <li>Distance measuring system to achieve goal.</li>
 <li>Spine based center of gravity balancing</li>
 <li>Camera Vision for 3D object detection (Optional)</li>
 <li>Voice Communication (Optional)</li>
 <li>Heat and over load protection</li>
 <li>Efficiency Exhaust protection</li>
 <li>Down stairs detection with CLIF sensors (Optional)</li>
 <li>Auto charging docking system &#40;optional&#41;</li>
 <li>Auto Recovery Behaviors in any troubleshooting</li>
 <li>Options for HDMI/ USB / Ethernet / Touch screen (Optional)</li>
 <li>User Touch Interface with display. (Optional)</li>
</ul>
<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '110')

{

$title = 'Xena 5.0<br/>Tactical Combat Robot';

$description = 'Xena 5.0 is a tactical combat robot, a robust robot with a top speed of 10 km/h, compact design for heavy-duty work, equipped with a heavy-duty spiral iron core wire rubber track belt suspension, BLDC heavy-duty motors, and various other features.';

$left =  '<ul>
<li>The Xena 5.0 Tactical Combat Robot have top speed 10 km/h</li>
 <li>PTZ Smart Remote Operated attachments thermal camera</li>
 <li>Object Detection & Tracking</li>
 <li>High Precise Adaptive Breaking</li>
 <li>Gyro based Straight line and Angular Algorithm</li>
 <li>LCD on remote side for Live Video Feed</li>
 <li>4-6 Hrs Battery Backup</li>
 <li>Speed Up to 8 Km/h</li>
</ul>

<p>Key Parameter:</p>

<ul>
<li>Compact Design for heavy duty work</li>
<li>120 MM width Heavy Duty Spiral Iron Core Wire Rubber Track</li>
<li>Track Belt Suspension</li>
<li>BLDC Heavy duty motors</li>
<li>RC 5000 Meter Range</li>
<li>Heat and overload protection</li>
<li>Efficiency Exhaust protection</li>
<li>200 Kg Payload capacity</li>
<li>80 Kg Drag capacity (UP to 8 Ton Vehicle)</li>
<li>Climb to possible stairs and elevations</li>
<li>Fast Charging system</li>
<li>All-terrain Vehicle Technology</li>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/watch?v=A9ZtKD34TFM</span></a>

</li>

<li>

</ul>';

}



if($id == '11')

{

$title = 'XENA 3.5<br/>Humanoid Robot';

$description = 'The XENA 3.5 Humanoid Robot offers smart hand and head movements, AI-based voice communication, and obstacle avoidance. It greets in Indian and Western styles, features advanced sensors, and boasts a 5-hour battery life.';

$left =  '<ul>

<li>Human interaction</li>

<li>Smart HAND and Head Movement </li>

<li>Hand 3 axis with maximum 180˚ of freedom</li>

<li>Head Vertical 20˚ &amp; Horizontal 60˚ of freedom </li>

<li>Greet with INDIAN and western style</li>

<li>Programmable hand movement for regional greetings actions</li>

<li>AI based voice communication</li>

<li>Laser Imagine Based Navigation</li>

<li>Ultrasonic/IR/Heat/Clif Sensors  (Optional)</li>

<li>Smart Obstacle Avoidance technology </li>

<li>Vison Camera for face detection </li>

<li>Spin based CG(Centre Of Gravity) balancing </li>

<li>Auto docking charging system</li>

<li>5Hrs/ 2Days standby battery backup </li>

<li>Simulate up to 5kg load</li>

</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}





if($id == '3')

{

$title = 'KRUSHNA<br/>FIRE FIGHTING ROBOT';

$description = 'The KRUSHNA Fire Fighting robot is advanced machines designed to aid in extinguishing fires and performing rescue operations in hazardous environments. Krushna Fire Fighting Robot is equipped with various technologies like autonomous fire point detection, adaptive brteaking that enable them to navigate, detect, and extinguish fires, ensuring safety and efficiency.';

$left =  '<ul>
 <li>Most powerful and compact</li>
 <li>Adaptive Braking Technology</li>
 <li>1000 Kg Payload</li>
 <li>10 Ton Vehicle and 100 M two Charged hose dragging capacity</li>
 <li>Iron Core rubber track 25MM thick 180 MM width</li>
 <li>5-6 Hr Endurance </li>
 <li>Hot attached power bank</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Gyro based on Straight line and angular following algorithm</li>
 <li>Designed for Defense</li>
 <li>Most powerful and compact</li>
 <li>Most rugged and robust</li>
 <li><strong>Make in India </strong>with full control system and controllers</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Straight line and the angular following algorithm</li>
 <li>Automatic fire point detection & alarming</li>
 <li>Water & Foam firefighting monitor</li>
 <li>PTZ Thermal remote-controlled Camera</li>
 <li>Anyone can operate our robot in one minute of training</li>

</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://www.youtube.com/user/TheCLUBFIRST1/"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



if($id == '5')

{

$title = 'XENA 5.0<br/>Fire Fighting Robot';

$description = 'The XENA 5.0 Fire Fighting Robot is a powerful fire fighting robot, tackles tough terrains with its durable tracks and exceptional dragging capacity. Easy to operate, it extinguishes flames with a high-powered water and foam monitor, making it ideal for frontline firefighting. a robotic fire extinguisher.';
$left =  '<ul>
<li>Most powerful and compact</li>
 <li>Adaptive Braking Technology</li>
 <li>500 Kg Payload</li>
 <li>7 Ton Vehicle and 100 M two Charged hose dragging capacity</li>
 <li>Iron Core rubber track 25MM thick</li>
 <li>5-6 Hr Endurance 48V/ 72 AH Battery</li>
 <li>Hot attached power bank</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Gyro based on Straight line and angular following algorithm</li>
 <li>Designed for Defense</li>
 <li>Most powerful and compact</li>
 <li>Most rugged and robust</li>
 <li><strong>Make in India </strong>with full control system and controllers</li>
 <li>Short turning and easy-to-control straight line & angular 360  gyro</li>
 <li>Individual differential gear for each drive</li>
 <li>Straight line and the angular following algorithm</li>
 <li>Automatic fire point detection & alarming</li>
 <li>Water & Foam firefighting monitor</li>
 <li>PTZ Thermal remote-controlled Camera</li>
 <li>Anyone can operate our robot in one minute of training</li>
</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://youtu.be/eOQ0UU2-QiU?si=J5iHrphuAIqRwS8n"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}





if($id == '8')

{

$title = 'XENA 6.0 MAN HOLE CLEANING ROBOT';

$description = '<p>The XENA 6.0 Man Hole Cleaning Robot offers efficient manhole cleaning with features like a hydraulic robotic grabber, GPS, and solar-powered hybrid charging. It ensures fast, noiseless operation, with a 250 kg sludge capacity. It collects and lifts the solid waste from a manhole and collects it in a chamber. CCTVs are equipped with robotic machines to monitor the cleaning.</p>
.';

$left =  '<ul>
 <li><em>Single Board Operating system</em></li>
 <li><em>Integrated sludge collection tray</em></li>
 <li><em>Hydraulic Robotic Grabber</em></li>
 <li><em>Line camera feed</em></li>
 <li><em>GAS detection</em></li>
 <li><em>Depth measurement system of sludge chamber</em></li>
 <li><em>Emergency alarm system and warning indicators</em></li>
 <li><em>Bipolar suspension </em></li>
 <li><em>GPS enabled (Optional FR2)</em></li>
 <li><em>Hydraulic Based Grabber</em></li>
 <li><em>Battery Operated UNIT</em></li>
 <li><em>Solar Powered Hybrid Charging System</em></li>
 <li><em>Noise less Operation</em></li>
 <li><em>Easy to move and towing system</em></li>
 <li><em>Antirust body</em></li>
 <li><em>ATV wheels</em></li>
 <li><em>RMS Remote Monitoring System</em></li>
</ul>

<p><strong><em>Key Parameter:</em></strong><em> </em></p>

<ul>
 <li><em>Fast cleaning process</em></li>
 <li><em>Maximum sludge collation in single operation up to 20Kg</em></li>
 <li><em>Less cleaning time</em></li>
 <li><em>Hydraulic Robotic Grabber</em></li>
 <li><em>Maximum Depth cover up to 10 meters</em></li>
 <li><em>Robots can also use for rescue operations</em></li>
 <li><em>Maximum lift capacity up to 500 KG</em></li>
 <li><em>Auto cleaning system</em></li>
 <li><em>Bio sludge collection stomach</em></li>
 <li><em>250 Kg stomach capacity</em></li>

</ul>

<p class="mt-2">30 Months of Warranty for all spare parts including battery., Easy to replace spares make in India, Proper training to operator, Remote Service assistance and troubleshooting

</p>'; 

$right = '<ul class="p-relative project-info ms-mt-block">

<li>

<h5>Video Link</h5>

<a href="https://youtu.be/_wGssre3SC4?si=kKyGALJJC8tXUfFT"><span>https://www.youtube.com/user/TheCLUBFIRST1/</span></a>

</li>

<li>

</ul>';

}



?>



    <main class="main-root">



        <!-- ========== side box left ========== -->

        <div class="side-bar-full">

            <div class="side-box-left ">

                <div class="side-menu border-left border-right p-relative h-100 d-flex justify-content-center">

                    <div class="page-active">

                        <h2 class="text-uppercase">Products</h2>

                    </div>

                </div>

            </div>

            <div class="side-box-right text-stroke border-right text-uppercase">

                <div class="text-stroke-box">

                    <div class="text-stroke-inner">Our Products</div>

                </div>

            </div>

        </div>

        <!-- ========== End side box left ========== -->





        <div id="dsn-scrollbar">

            <div class="inner-content">

                <!-- ========== Header ========== -->

                <header class="p-relative dsn-header-animation full-width over-hidden h-v-100 v-dark-head">


                    <div class="box-content  align-items-center">

                        <div class="hero-img p-absolute w-100  h-100 before-z-index z-index-0" data-overlay="5"

                            data-dsn-ajax="img">


                            <img class="cover-bg-img dsn-hero-parallax-img "

                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="

                                data-dsn-src="<?php echo $image;?>"

                                data-dsn-srcset="<?php echo $image;?> 1800w,<?php echo $image;?> 768w"

                                alt="" data-dsn-position="10% 10%">

                        </div>

                        <div class="hero-content dsn-container">

                            <div class="has-box-mod p-relative move-circle" data-dsn="parallax"

                                data-dsn-color="#393531">

                                <h1 class="title " data-dsn-ajax="title">

                               <?php echo $title;?>


                                </h1>


                            </div>



                            <!--div class="metas mt-25">

                                <span>Fashion</span>

                                <span>Photography</span>

                            </div-->

                        </div>



                    </div>



                </header>

                <!-- ========== End Header ========== -->



                <div class="wrapper ">







                    <!-- ========== Section Paragraph ========== -->

                    <div class="dsn-container section-margin" data-dsn-animate="section">

                        <div class="max-w750">

                            <h4 class="title-block dsn-text mb-20">

                                <?php echo $title;?>

                            </h4>




                            <p class="dsn-up">

                                <?php echo $description;?>

                            </p>

                        </div>

                    </div>

                    <!-- ========== End Section Paragraph ========== -->




                    <!-- ========== Intro Project ========== -->

                    <div class="intro-project dsn-container section-margin">


                        <div class="row">
                            

                            <div class="col-lg-8">



                                <div class="intro-text p-relative">

                                    <div class="inner">

                                        <h2 class="title-block  border-section-bottom dsn-up">

                                            Description

                                        </h2>

                                        <p class="dsn-up mt-30 max-w750">

                                            <?php echo $left;?>

                                        </p>

                                        

                                    </div>

                                </div>



                            </div>



                            <div class="col-lg-4">

                                <?php echo $right;?>

                            </div>

                        </div>

                    </div>

                    <!-- ========== End Intro Project ========== -->



                    



                    <!-- ========== 2 col image with pop image ========== -->

                    <!-- ========== end 2 col image with pop image  ========== -->



                    



                    



                    



                </div>





            </div>



        </div>





        



    </main>



    <!-- ========== Cursor Page ========== -->

    <div class="cursor">



        <div class="cursor-helper">

            <span class="cursor-drag">Drag</span>

            <span class="cursor-view">View</span>

            <span class="cursor-open"><i class="fas fa-plus"></i></span>

            <span class="cursor-close">Close</span>

            <span class="cursor-play">play</span>

            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>

            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>

        </div>



    </div>

    <!-- ========== End Cursor Page ========== -->





    <!-- ========== social network ========== -->

      <div class="social-network">

        <ul class="socials d-flex  flex-column ">

            <li>

                <a href="https://www.youtube.com/@CLUBFIRST" target="https://www.youtube.com/@CLUBFIRST">

                    <i class="fab fa-youtube"></i>

                    <span>Yt</span>

                </a>

            </li>

            <li>

                <a href="https://twitter.com/ClubFirst7" target="https://twitter.com/ClubFirst7">

                    <i class="fab fa-twitter"></i>

                    <span>Tw</span>

                </a>

            </li>

            <li>

                <a href="https://www.linkedin.com/company/club-first/?originalSubdomain=in" target="https://www.linkedin.com/company/club-first/?originalSubdomain=in">

                    <i class="fab fa-linkedin"></i>

                    <span>in</span>

                </a>

            </li>

            <li>

                <a href="https://www.facebook.com/ClubFirstGroup/" target="https://www.facebook.com/ClubFirstGroup/">

                    <i class="fab fa-facebook-f"></i>

                    <span>Fb</span>

                </a>

            </li>

        </ul>

    </div>

    <!-- ========== End social network ========== -->



    <!-- ========== Scroll Right Page To Top Page ========== -->

    <div class="scroll-to-top">

        <img src="assets/img/scroll_top.svg" alt="">

        <div class="box-number v-middle">

            <span>0%</span>

        </div>

    </div>

    <!-- ========== End Scroll Right Page To Top Page ========== -->



    <!-- ========== Light & Dark Options ========== -->

    <div class="day-night">

        <div class="night active" data-dsn-theme="dark">

            <svg width="48" height="48" viewBox="0 0 48 48">

                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>

                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"

                    height="2.6"></rect>

                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>

                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"

                    height="1"></rect>

                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>

                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"

                    height="2.6"></rect>

                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>

                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"

                    height="1"></rect>

                <path

                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">

                </path>

            </svg>

        </div>

        <div class="moon" data-dsn-theme="night">

            <svg width="48" height="48" viewBox="0 0 48 48">

                <path

                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">

                </path>

            </svg>

        </div>

    </div>

    <!-- ========== End Light & Dark Options ========== -->





    <!-- ========== paginate-right-page ========== -->

    <div class="dsn-paginate-right-page"></div>



    <!-- Optional JavaScript -->

    <script src="assets/js/jquery-3.1.1.min.js"></script>

    <script src="assets/js/plugins.min.js"></script>

    <script src="assets/js/dsn-grid.min.js"></script>

    <script src="assets/js/custom.js"></script>



</body>



</html>