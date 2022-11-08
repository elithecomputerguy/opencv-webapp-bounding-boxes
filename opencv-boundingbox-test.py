import cv2

img = cv2.imread("./upload/faces.jpg")

img_gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
img_rgb = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)

stop_data = cv2.CascadeClassifier('./data/haarcascades/haarcascade_frontalface_alt.xml')

found = stop_data.detectMultiScale(img_gray, minSize =(20, 20))

amount_found = len(found)

if amount_found != 0:
    for (x, y, width, height) in found:
        print("x: "+str(x)+" y: "+str(y)+" Width: "+str(width)+" Height: "+str(height))
		# We draw a green rectangle around
		# every recognized sign
        cv2.rectangle(img_rgb, (x, y),(x + height, y + width),(0, 255, 0), 5)
