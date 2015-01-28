import csv
import numpy as np

X = []
y = []
with open('data.csv', 'r') as fd:
    sampcsv = csv.reader(fd)
    sampcsv.next()
    for dp in sampcsv:
      X.append(dp[2:5]) # zanima nas samo samo bs, bos i dob
      y.append(dp[0]) # labela

X = np.array(X, dtype = np.float)
y = np.array(y)

np.save('temp/features.npy', X)
np.save('temp/labels.npy', y)

#print X, y