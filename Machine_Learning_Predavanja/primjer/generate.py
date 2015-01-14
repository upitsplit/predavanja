import csv
import random

with open('data.csv', 'w') as fd:
    sampcsv = csv.writer(fd)
    # svaki redak =    labela,  broj prijatelja, broj objavljenih slika, broj slika, dob, broj grupa
    sampcsv.writerow([ 'kupac', 'bp', 'bos', 'bs', 'dob', 'bg'  ])
    
    for i in range(1000):
        feats = [ random.randint(2, 100), random.randint(0, 50), random.randint(0, 100), random.randint(13, 60), random.randint(0, 10) ]
        if (feats[1] < 5 or feats[2] > 50) and feats[3] > 18 and random.randint(0, 100) > 50:
            label = 'da'
        else:
            label = 'ne'    
        sampcsv.writerow([ label ] + feats)
