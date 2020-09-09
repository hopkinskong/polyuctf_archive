from PIL import Image

im = Image.open("qr.png")

pix = im.load()

width, height = im.size

row = ""
f = open('digitalization.txt', 'w')
for i in range(width):
    for j in range(height):
        if pix[i,j] == (0,0,0,255):
            f.write(str(i) + " " + str(j) + "\n")

