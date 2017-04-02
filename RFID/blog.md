# *Cisco Internet of Things project*
> Workshop 4 

**Radio Frequency Identification**

## Main group members

> Daniel Easteal

Client side programming on the Raspberry pi

> Simon Light

Server side database handling and php programming

> Alwin Huges

Server side php programming

## Post 1
> Disaster!

Off to a not so go start so far with the project as immediately after staring we are told that our Raspberry pi that we have been using for the last 3 workshops has gone missing!! Due to this they told us to wait 15 minutes for everyone else to get their Raspberry pi's first then they will see if ours is left over. So we now had 15 minutes of not being able to do the project and so we decided to start planning what we would do and how it should be programmed based on the equipment that the other groups in the room got. After the 15 minutes we then went to get the pi, and unfortunately they could not find ours so we had to start with a whole new pi that was not used and that is where we are up to at the moment. 

## Post 2
> Disaster again!!

So, we have the new Raspberry pi, but after trying to log on we realise that the password that we have been supplied was incorrect and did not actually match the password that the pi required, that was a small step back, but we went upstairs to get some help and then ended up using a monitor and then changing the password from the auto GUI log in. We thought that was over but we just realised that the server also used the same login that we did not know and so Simon has just gone up stairs to get that sorted out and should be really easy to get that changed...

## Post 3
> Not again...

So after about 10 minutes Simon has just come back and said that the server password was changed and so now we have access to the server, but due to the fact that the pi and the server are new to us we didn't have the files that we had created. This may not sound too bad, but that meant that we had to re-implement the  code for sending the information from the pi and then receiving the information as for the other workshops we had just copied the code over. So as I write this, I am also looking up the python libraries for urllib while Simon is looking up documentation for the php of how to do this...

## Post 4
> Success finally

After having all the problems that were in the way of the project now sorted and solved, we can now carry on with the project like normal, we are only just about 1 hour behind schedule, but we should manage to get this finished easily. Also, the fact that we had to to re-implement the whole sending and receiving code was a good thing as the new method that we have is more efficient and works better that the old version did. In addition to this we have now got Tom Hutchings and Alwin Huges to join our group as they did not have a group due to suspicious absences today. This is great as we all work well together and Alwin knows a lot about php compared to me and Simon so that will really help the way that we work.  

## Post 5
> Break time

It has just gone break time and there are no signs of the productivity of the group stopping as we have it all working and plan to work through break to get this done. At the moment, I have nearly finished the client (Raspberry pi) side of the programming and am happy with how it is all going. I have made it so that the card will not spam the server with information every time it detects the card as when you hold the card against the scanner it would send about 10 posts to the server containing the information of the card ID. To fix this I implemented threading into the python so that there is a main process that will scan any card and then a thread that will count down a 5 second count down for each card, more that enough time for the server to get the information and then as an example open a door. This will mean that different cards from different users can be scanned in quick succession but each card will have an individual 5 second time-out. The rest of the group has the data bases created and have a basic set-up for detecting the requests that the pi sends.

## Post 6
> After break productivity

Due to the fact that every one else in the group left during break, the room for us was a lot more productive and we managed to get a lot done. I have just added a very small database on the pi, that will print the name of the user when they scan their card so that I know the information that I am sending to the server is correct as the raw numeral values are not the best thing to look at. In addition to this it also knows when there is a new card that has been scanned and it prints the raw value of that, and that is quite helpful for debugging. However, it was not just me that was productive, the rest of the group working on the server has now made it so that the RFID information that I send is now added to the database correctly on the server so that really cool. They said that they will now get the security sorted out next while I optimise the code some more.

## Post 7
> Security

So, only about 15 minutes later Simon and Alwin have set up the security database so that the rfid code is now related to the name of the holder and also the security clearance that that person has in the form of an number. This means that we have now technically done the task, but we wand to go further with this as much as we can.

## Post 8
> Display and time

About 30 minutes since the last post and we now have a working display web page that will show the login of any one on the scanner and will then print the name of them and the security clearance that they have in the system. In addition to this, the time of the request is logged and printed to the screen along with the other information to help security. But it is approaching the end of the workshop soon, so we won't to able to add any more features...

## Post 9
> End of project

It is going to be the end of the project in a few minutes and we have added another cool additional feature and that is that the security clearances are now coloured green if you have access and then are shown in red if there is an intruder present for the scanner (someone not in the system) and this is all shown is chronological order with the most recent accesses show at the top of the web page going down to later accesses. So, that is the end of the project and so the end of the blog as well...


