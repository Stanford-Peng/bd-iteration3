# WordPress Website: BDiverse
Visit us via password: spen0022(available for one year)

https://bdiverse.games/

## Project Description:

The project was focused on IT for social good, that is using information technology in having a positive impact and making a difference in society. The theme of our project was ‘Urban Wilderness’ and the topic was ‘Urban Forests’. While conducting research, we discovered that one of the major cities in Australia, Melbourne was losing its biodiversity at the fastest rate compared to any other place in Australia. This was of concern as the biodiversity of Melbourne was highlighted to be a huge part of the city’s culture and heritage. While conducting further research in to ‘why’ this was happening, we identified that one of the major reasons for this was a lack of awareness on the part of the public. Our target audience was identified as vicenarians living in Melbourne as they made up over 40% of the total population and was identified as the least aware of environmental issues by the Australian Bureau of Statistics. 

Our website was as a result, focused on raising awareness about Melbourne’s depleting biodiversity as well as helping Melbournians find opportunities so that they can start contributing to the biodiversity. Our hero features include educating the public about what the endangered plants in Melbourne city are and helping people find volunteer organisations based on a person’s location and interest. We also provide an interactive timeline of Melbourne’s Urban Forests ranging from the 19th Century to present day urban forests. We provide users with planting steps for trees, flowers and ornamental grasses to better equip them for planting activities in volunteer organisations as well as to encourage gardening at home. An information sharing page dedicated to City of Melbourne’s ‘Exceptional Tree Registry’ was also added to provide an opportunity for Melbournians to start nominating trees that they love so that they can be protected by the Australian Government. Finally, we included a Quiz as a means to provide interactive learning and to help our audience test the knowledge they’ve gained from our website.

## System Architecture:

The website is built on WordPress framework with several plugins and customized codes to extend more features. The WordPress together with MySQL database are deployed on Amazon Web Services Cloud as an Elastic Compute Cloud (EC2) instance. The instance uses Debian Linux as the operating system and Bitnami as the application environment for Apache, WordPress and a lot of other free software. Security group of EC2 instance is configured to set up a virtual firewall to filter out malicious or unnecessary incoming packets. 
Below are the inbound rules:
Port Range	Protocol	Source	Comments
80	TCP	0.0.0.0/0	Open for incoming HTTP connection
22	TCP	0.0.0.0/0	Open for incoming SSH connection
443	TCP	0.0.0.0/0	Open for incoming HTTPS connection

Outbound rules:
Port Range	Protocol	Source	Comments
All	All	0.0.0.0/0	Open for incoming HTTP connection

For inbound requests, port 80 and 443 are available for HTTP/HTTPS connection without limiting the IP source. 22 is also made available so that the maintainer can use SSH protocol to securely connect to the terminal of the EC2 instance OS using private key.
Outbound requests are not limited since it will make it easy for maintainers to update the system tools, applications and operate inside the server.


## Product Description:

The focus of the website is categorised in to three sub sections which include the ‘Knowledge’ section which encompasses all the pages that are dedicated to information sharing, the ‘Volunteer’ section includes pages dedicated to helping find volunteer opportunities and finally the ‘Quiz’ section which consists of the quiz to test audience knowledge. This is conveyed to the audience of the website by the way the navigation bar is organised. (As shown in Figure 1.)

 
Figure 1

The website https://bdiverse.games/ has the following features:
Urban Forest Timeline

Provides a timeline of Urban Forests in Melbourne city spanning from the 19th Century to present day. It also gives the audience an idea of the future of urban forests, if the extinction rate carries on at what it is today. The timeline is interactive as the relevant section of information appears as the user scrolls down. Figure 2 shows the feature on the Urban Forests Timeline page of the website. 

 
Figure 2

Endangered Plants

Provides information regarding endangered plants in Melbourne City. The audience is able to either search plants by their name or filter them by the categories provided which include ‘Extinct’, ‘Critically Endangered’, ‘Endangered’ and ‘Vulnerable’. Figure 3 shows the feature on the Endangered Plants page of the website.

 
Figure 3
Knowledge Section
Learn to Plant

Provides step by step knowledge on how to plant trees, flowers and ornamental grasses. The audience can select the desired category and then navigate through the steps to start their planting journey. The page also consists of an infographs, informing our audience on the benefits of gardening. Figure 4 shows the feature on the Learn to Plant page of the website.


 

Figure 4

Exceptional Trees

Provides answers to frequently asked questions about the Exceptional Tree Registry, an initiative run by the City of Melbourne. It provides residents with an opportunity to nominate exceptional trees around the city that they would like the Australian Government to protect. The audience are able to click the tiles which represent a particular question and will redirected to the relevant information section. Figure 5 shows the feature on the Learn to Plant page of the website.

 
Figure 5



Volunteer Section

Volunteer Organisations

Provides volunteer organisations that are committed to helping Melbourne’s biodiversity. The audience can filter these organisations by location or interest. They also are provided with the organisations’ contact details and link to their websites if they want to explore more. They can also locate the organisations on the map and have a look at the street view of the organisation. Figure 6 shows the feature on the Volunteer Organisations page of the website.

 
Quiz Section

Quiz 

Provides an opportunity for the audience of the website to test the knowledge they’ve gained on the website. The quiz is interactive and provides immediate feedback to the audience when they click on an answer, along with the justification. At the end of the quiz, a summary is also provided which includes how much time the audience took to complete the quiz, the number of questions that were answered correct and a list indicating the right answers to all the questions. The audience also has the option to retake the quiz. Figure 7 shows the feature on the Quiz page of the website.

 
Figure 7
![image](https://user-images.githubusercontent.com/48232605/121378628-b6867d80-c986-11eb-9a86-8baf95ffaed6.png)




