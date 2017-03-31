import urllib
import urllib2


def post_uid(uid):
	names = ["Daniel","Simon","Card","Button","Sam","Alwin"]
	number = ["43.196.153.72","43.19.234.73","138.160.238.197","5.0.253.108","155.10.154.72","107.70.155.72"]
	count = 0
	valid = 0
	for item in number:
		if str(uid) == item:
			print(str(names[count]))
			valid = 1
		else:
			count = count + 1
	if valid == 0:
		print("New User: "+str(uid))











	params = urllib.urlencode({'uid':uid})
	u = urllib2.urlopen('http://172.16.0.1/~BR09/RFID/post.php', params).read();
#	print(str(u))


