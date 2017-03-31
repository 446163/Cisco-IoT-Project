import RPi.GPIO as GPIO
import MFRC522
import signal
from threading import Thread
from time import sleep

import post

continue_reading = True

olduidstring = 0

threadrun = 0

def threadF():
	global olduidstring 
	global threadrun
	threadrun = 1
#	print("thread")
	sleep(3)
	olduidstring = 0
	threadrun = 0
#	print("thread end")




# Capture SIGINT for cleanup when the script is aborted
def end_read(signal, frame):
    global continue_reading
    continue_reading = False
    GPIO.cleanup()


# Hook the SIGINT
signal.signal(signal.SIGINT, end_read)

# Create an object of the class MFRC522
MIFAREReader = MFRC522.MFRC522()

# Welcome message
print "Press Ctrl-C to stop."

# This loop keeps checking for chips. If one is near it will get the UID and authenticate
while continue_reading:
#    print("running")

    # Scan for cards    
    (status, TagType) = MIFAREReader.MFRC522_Request(MIFAREReader.PICC_REQIDL)

    # Get the UID of the card
    (status, uid) = MIFAREReader.MFRC522_Anticoll()

    # If we have the UID, continue
    if status == MIFAREReader.MI_OK:

        # Print UID
        uidString = str(uid[0]) + "." + str(uid[1]) + "." + str(uid[
            2]) + "." + str(uid[3])
#        print(uidString)

	if uidString != olduidstring:
        	post.post_uid(uidString)
#		print("sent")

	olduidstring = uidString
	if threadrun == 0:
		thread = Thread(target = threadF)
		thread.start()
#	thread.join()

